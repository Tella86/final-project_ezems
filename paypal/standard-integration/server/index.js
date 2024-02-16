import express from 'express';
import fetch from 'node-fetch';
import "dotenv/config";
const app = express();
app.use(express.json());
app.use(express.urlencoded({ extended: true}));
const port = process.env.PORT || 3306;
const environment = process.env.ENVITONMENT || 'sandbox';
const client_id = process.env.CLIENT_ID;
const client_secret = process.env.CLIENT_SECRET;
const endpoint_url = environment ==='sandbox' ? 'https://api-m.sandbox.paypal.com' : 'https://api-m.paypal.com';

function get_access_token(){
  const auth = '${client_id}:${client_secret}'
  const data = 'grant_type=client_credentials'
  return fetch(endpoint_url + '/v1/oauth2/token',{
    method: 'POST',
    headers:{
      'Content-Type': 'application/x-www-form-urlencoded',
      'Authorization': 'Basic ${Buffer.from(auth).toString(`base64`)}'
      
    },
    body: data
  })
  .then(res => res.json())
  .then(json => {return json.access_token;})

  app.listen(port, () => {
    console.log('Server listening at https://localhost:$(port)')
  })
}
app.post('/create_oder', (req, res) =>{
  grt_access_token()
  .then(_access_token => {
    let order_data_json = {
      'intent': req.body.intent.toUpperCase(),
      'purchase_unit':[{
        'amount':{
          'currency_code': 'USD',
          'value': '1000.00',
        }
      }]
    };
    const data = JSON.stringify(order_data_json)

    fetch(endpoint_url + '/v2/checkout/order',{//https://developer.paypal.com/docs/api/orders/v2/#orders_create
      method: 'POST',
      headers:{
        'Content-Type': 'application/json',
        'Authorization': 'Beare ${access_token}',
        'paypal-request-Id': generate_random_uuid()//"d9f80740-38f0-11e8-b467-8ed5f89f718b"
      },
      body: data
    })
    .then(res => res.json())
    .then(json => {res.send(json);}) //send minimal data to client
  })
  .catch(err => { console.log(err); res.status(500).senf(err)})
});
app.post('/complete_order', (req, res) => {
  get_access_token()
  .then(_access_token => {
    fetch(endpoint_url + '/v2/checkout/orders/' + req.body.order_id + '/' + req.body.intent, {
      method: 'POST', headers: {'Content-Type': 'application/json', 'Authorization': 'Bearer ${access_token}'}
    })
    .then(_res => req.json())
    .then(json => { console.log(json); res.send(json);})//send minmal data to client
  })
  .catch(err => { console.log(err); res.status(500).send(err)})
});















