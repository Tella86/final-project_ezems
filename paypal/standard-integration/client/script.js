//Helper/Utility fuctions
let url_to_head = (url) => {
    return new Promise(function(resolve, reject){
        var script = document.createElement('script');
        script.src=url;
        script.onload = function(){
            resolve();
        };
        script.onerror= function(){
            reject('Error loading script.');
        };
        document.head.appendChild(script); 
    });
}
let handle_close = (event) => {
    event.target.closest(".ms-alert").remove();
}
let handle_click = (event) => {
    if (event.target.classList.contains(".ms-close")){
        handle_close(event);
    }
}
document.addEventListener("click", handle_click);


const paypal_sdk_url = "https://www.paypal.com/sdk/js";
const client_id = "AXyghC3mpdYZa-v590r1hbzlWCF6aX7bHYVEiteYLvH9yJSdTL7gLVCpkctEq-gJXbAM-zrwlOnDkSNu";
const currency = "USD";
const intent = "capture";
let alerts = document.getElementById("alerts");

// paypal Code
url_to_head(paypal_sdk_url + "?client-id=" + client_id + "&enable-funding=venmo&currency=" + currency + "&intent=" + intent)
.then(()=>{
    document.getElementById("loding").classList.add("hide");
    document.getElementById("content").classList.remove("hide");
    let alerts = document.getElementById("alerts");
    let paypal_buttons =paypal.buttons({
        onClik: (data)=> {

        },
        style: {
            shepe: 'rect',
            color: 'gold',
            layout: 'vertical',
            label: 'paypal',
        },
        createOrder: function(data, actions){
            return fetch("https://localhost:3306/create_order",{
                method:"post", headers:{"Content-Type": "application/json; charset=utf-8"},
                body: JSON.stringify({"intent": intent})
            })
            .then((Response)=> Response.json)
            .then((order)=> {returnorder.id;});

        },
        onApprove: function(data, actions){
            let order_id = data.orderID;
            return fetch("https://localhost:3306/comple_order",{
                method: "post",headers: {"Content-Type": "application/json; charset=utf-8"},
                body: JSON.stringify({
                    "intent": intent,
                    "order_id": order_id,
                })
            })
            .then((Response) => Response.json())
            .then((irder_details)=>{
                console.log(irder_details);
                let intent_object = intent==="authorize"? "authorizations": "captures";
                // Custom Successful message
                alerts.innerHTML = '<div class=\'ms=alert ms-action\'>Thank you' + irder_details.payer.name.give_name + ''
                + irder_details.payer.name.surname + 'for your payment of ' + irder_details.purchase_units[0].payment
                [intent_object][0].amount.value + '' + irder_details.purchase_units[0].payments[intent_object][0].amount.currency_code +'!</div>';
                // close out the paypal button tha were rendered
                paypal_buttons.close();
            })
            .catch((error) => {
                console.log(error);
                alerts.innerHTML = '<div class="ms-alert ms-action2 ms-small"><span class="ms-close"></span><p>An Error Ocurred!</p> </div>';
            });
        },
        oncancel: function(data){
            alerts.innerHTML='<div class="ms-action2 ms-small" ><span class"ms-close"></span><p>Ordercancelled!</p> </div>';

        },
        onrror: function (err) {
           console.log(err); 
        }
    });
    paypal_buttons.render('#payment_options');
}) 
.catch((error) =>{
    console.error(error);
}) ;