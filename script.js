function create_account(){  
    var n=document.getElementById("n1").value;  
    var p=document.getElementById("p1").value; 

    //Code for password validation  
        var amount = 50000;  
        var PhoneNumbe = ([254])+(([7-9])); 
  //other validations required code  
if(n==''||p==''){  
    alert("Enter each details correctly");  
    }  
    else if(!Amount.test(n))  
        {  
            alert('Amount is incorrect must contain 5 digts only');  
        }  
else if (!PhoneNumbe.test(p))  
        {  
            alert('Invalid PhoneNumber format please enter valid Phone Number Start 254');  
        }  
}
