
$('#senator1').on('change',function(){ 
  var sen1 = document.getElementById('senator1').value; 
  // var sen2 = document.getElementById('senator2').value;
  var sen2 = "";
  var sen3 = "";
  var sen4 = "";
  var sen5 = "";
  var sen6 = "";
  var sen7 = "";
  var sen8 = "";  

  $.ajax({    //create an ajax request to load_page.php
        type:"POST",
        url: "loadsenators.php?action=senator2",             
        dataType: "text",   //expect html to be returned  
        data:{senator1:sen1,senator2:sen2,senator3:sen3,senator4:sen4,senator5:sen5,senator6:sen6,senator7:sen7,senator8:sen8},               
        success: function(data){
           $(".sens2").html(data); 
        }

    });

});

$('#senator2').on('change',function(){


  var sen1 = document.getElementById('senator1').value;
  // var sen1="";
  var sen2 = document.getElementById('senator2').value; 
  var sen3 = "";
  var sen4 = "";
  var sen5 = "";
  var sen6 = "";
  var sen7 = "";
  var sen8 = "";    

  $.ajax({    //create an ajax request to load_page.php
        type:"POST",
        url: "loadsenators.php?action=senator3",             
        dataType: "text",   //expect html to be returned  
        data:{senator1:sen1,senator2:sen2,senator3:sen3,senator4:sen4,senator5:sen5,senator6:sen6,senator7:sen7,senator8:sen8},               
        success: function(data){   
           // // $("#sens").hide();
           // $("#sens_44").hide();
           // $("#sens_55").hide();
           // $("#sens_66").hide();
           // $("#sens_77").hide();
           // $("#sens_88").hide();
           $(".sens3").html(data);   
        }

    });

});
$('#senator3').on('change',function(){ 
  var sen1 = document.getElementById('senator1').value; 
  var sen2 = document.getElementById('senator2').value; 
  var sen3 = document.getElementById('senator3').value;  
  var sen4 = "";
  var sen5 = "";
  var sen6 = "";
  var sen7 = "";
  var sen8 = "";    

  $.ajax({    //create an ajax request to load_page.php
        type:"POST",
        url: "loadsenators.php?action=senator4",             
        dataType: "text",   //expect html to be returned  
        data:{senator1:sen1,senator2:sen2,senator3:sen3,senator4:sen4,senator5:sen5,senator6:sen6,senator7:sen7,senator8:sen8},               
        success: function(data){   
           // $("#sens").hide();
           // $("#sens4").hide();
           // $("#sens_55").hide();
           // $("#sens_66").hide();
           // $("#sens_77").hide();
           // $("#sens_88").hide();
           $(".sens4").html(data);  
        }

    });

});
$('#senator4').on('change',function(){


  var sen1 = document.getElementById('senator1').value; 
  var sen2 = document.getElementById('senator2').value; 
  var sen3 = document.getElementById('senator3').value;  
  var sen4 =  document.getElementById('senator4').value;  
  var sen5 = "";
  var sen6 = "";
  var sen7 = "";
  var sen8 = "";    

  $.ajax({    //create an ajax request to load_page.php
        type:"POST",
        url: "loadsenators.php?action=senator5",             
        dataType: "text",   //expect html to be returned  
        data:{senator1:sen1,senator2:sen2,senator3:sen3,senator4:sen4,senator5:sen5,senator6:sen6,senator7:sen7,senator8:sen8},               
        success: function(data){   
           // $("#sens").hide();
           // $("#sens4").hide(); 
           //  $("#sens_66").hide();
           // $("#sens_77").hide();
           // $("#sens_88").hide();
           $(".sens5").html(data);  
        }

    });

});
$('#senator5').on('change',function(){


  var sen1 = document.getElementById('senator1').value; 
  var sen2 = document.getElementById('senator2').value; 
  var sen3 = document.getElementById('senator3').value;  
  var sen4 =  document.getElementById('senator4').value;  
  var sen5 =  document.getElementById('senator5').value; 
  var sen6 = "";
  var sen7 = "";
  var sen8 = "";    

  $.ajax({    //create an ajax request to load_page.php
        type:"POST",
        url: "loadsenators.php?action=senator6",             
        dataType: "text",   //expect html to be returned  
        data:{senator1:sen1,senator2:sen2,senator3:sen3,senator4:sen4,senator5:sen5,senator6:sen6,senator7:sen7,senator8:sen8},               
        success: function(data){   
           // $("#sens").hide();
           // $("#sens4").hide();
            
           // $("#sens_77").hide();
           // $("#sens_88").hide();
           $(".sens6").html(data);  
        }

    });

});
$('#senator6').on('change',function(){


  var sen1 = document.getElementById('senator1').value; 
  var sen2 = document.getElementById('senator2').value; 
  var sen3 = document.getElementById('senator3').value;  
  var sen4 =  document.getElementById('senator4').value;  
  var sen5 =  document.getElementById('senator5').value; 
  var sen6 = document.getElementById('senator6').value; 
  var sen7 = "";
  var sen8 = "";    

  $.ajax({    //create an ajax request to load_page.php
        type:"POST",
        url: "loadsenators.php?action=senator7",             
        dataType: "text",   //expect html to be returned  
        data:{senator1:sen1,senator2:sen2,senator3:sen3,senator4:sen4,senator5:sen5,senator6:sen6,senator7:sen7,senator8:sen8},               
        success: function(data){   
           // $("#sens").hide();
           // $("#sens4").hide();
            
           // $("#sens_88").hide();
           $(".sens7").html(data);  
        }

    });

});
$('#senator7').on('change',function(){


  var sen1 = document.getElementById('senator1').value; 
  var sen2 = document.getElementById('senator2').value; 
  var sen3 = document.getElementById('senator3').value;  
  var sen4 =  document.getElementById('senator4').value;  
  var sen5 =  document.getElementById('senator5').value; 
  var sen6 = document.getElementById('senator6').value; 
  var sen7 = document.getElementById('senator7').value; 
  var sen8 = "";    

  $.ajax({    //create an ajax request to load_page.php
        type:"POST",
        url: "loadsenators.php?action=senator8",             
        dataType: "text",   //expect html to be returned  
        data:{senator1:sen1,senator2:sen2,senator3:sen3,senator4:sen4,senator5:sen5,senator6:sen6,senator7:sen7,senator8:sen8},               
        success: function(data){    
           $(".sens8").html(data);  
        }

    });

});