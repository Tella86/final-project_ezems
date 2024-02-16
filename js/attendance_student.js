$(document).ready(function(){
$('#StudentID').keyup(function(e){
  if(e.which != 13) return false;

var Digital=new Date()
var T_hours=Digital.getHours()
var T_minutes=Digital.getMinutes() 
var timeObject;


var studentID = document.getElementById('StudentID').value;  

   var evnts;


 // if () {};
  // alert(evnts);

 


 //
 if ($("#StudentID").val().length>6){

    evnts  = $('.attendevents').val();
    timeObject = T_hours + ':' + T_minutes;
    
  $.ajax({    //create an ajax request to load_page.php
        type:"POST",
        url: "loaddetails.php",             
        dataType: "text",   //expect html to be returned  
        data:{IDNO:studentID,stringtime:timeObject,checkattendance:evnts},               
        success: function(data){    
        $("#check_attendance").html(data); 
         // alert(data)
        }
        

    });


  $.ajax({    //create an ajax request to load_page.php
        type:"POST",
        url: "loaddetails.php",             
        dataType: "text",   //expect html to be returned  
        data:{IDNO:studentID,name:''},               
        success: function(data){    
           $("#name").html(data); 
        }


    });


  $.ajax({    //create an ajax request to load_page.php
        type:"POST",
        url: "loaddetails.php",             
        dataType: "text",   //expect html to be returned  
        data:{IDNO:studentID,course:''},               
        success: function(data){    
           $("#course").html(data); 
        }

    });

  $.ajax({    //create an ajax request to load_page.php
        type:"POST",
        url: "loaddetails.php",             
        dataType: "text",   //expect html to be returned  
        data:{IDNO:studentID,year:''},               
        success: function(data){    
           $("#year").html(data); 
        }

    });

    $.ajax({    //create an ajax request to load_page.php
        type:"POST",
        url: "loaddetails.php",             
        dataType: "text",   //expect html to be returned  
        data:{IDNO:studentID,img:''},               
        success: function(data){    

          // alert(data);
           $("#img_profile").html(data); 
        }

    });



$("#StudentID").val('');
$("$StudentID").focus();


 }
 })

});

 