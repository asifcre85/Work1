<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!-- css -->
  <!-- <link rel="stylesheet" href="<?php echo base_url();?> css/bootstrap.min.css"> -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="css/nivo-lightbox.css" rel="stylesheet" />
  <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="css/animations.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">
  <link href="color/default.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/sty.css">
  <!-- =======================================================
    Theme Name: Bocor
    Theme URL: https://bootstrapmade.com/bocor-bootstrap-template-nice-animation/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
 <style>
 
 button{
  background-color: lightgrey;
 }
 
 th{
  border: 1px solid black;
 }
 .right{
  padding-left: 850px;
}
.right1{
  width: 10%;
  height: 15%;
}
 th, td {
  padding: 15px;
}
 table, td {
  border: 1px solid black;
  
}
.btn3 {
  background-color: lightgrey;
margin-left: 65%;
height:70px;
width: 90px; 
text-align: center;
 }
   .btn1 {
  background-color: lightgrey;
margin-left: 5%;
height:50px;
width: 70px; padding-bottom: 5px;
text-align: center;
 }
.btn2 {
  background-color: lightgrey;
margin-left: 0%;
height:50px;
width: 70px; padding-bottom: 5px;
text-align: center;}
 </style>


</head>
<body style="background-color: #ECE5E5;">
  <div class="container">
    <div class="row" style="width: 1000px;">
      <div class="col-md-2" style="height: 70%; padding-top: 10px;" >

 <BUTTON id="id1" style=" width: 90%; padding: 4%"><a href="#home">BROAST</a></BUTTON>
 <BUTTON style=" width: 90%; padding: 4%"><a href="#news">BURGER</a></BUTTON>
 <BUTTON style=" width: 90%; padding: 4%"><a href="#contact">DRINKS</a></BUTTON>
 <BUTTON style=" width: 90%; padding: 4%"><a href="#about">SALAD</a> </BUTTON><br>
 <BUTTON style=" width: 90%; padding: 4%"><a href="#about">OTHERS</a></BUTTON><br>
</div>
<?php
      $query = $this->db->query('SELECT * FROM products where id=1');
      $p=$query->row();
      $query2 = $this->db->query('SELECT * FROM products where id=2');
      $p2=$query2->row();
      ?>
     <div  class="col-md-1 " style="padding-top: 10px;">
        <button class="id11" value="Broast" price="<?php echo $p->price;?>" >BROAST <span class="bt" style="color:lightgrey;">spicy rgrtdspicy</span></button></div>
    <div class="col-md-1 " style="padding-top: 10px;">      <button class="id11" value="Broast1" price="<?php echo $p2->price;?>">BROAST spicy <span class="bt" style="color:lightgrey;">spicyQ</span></button></div>
    <div class="col-md-1 "style="padding-top: 10px;">      <button class="id11" value="Broast2" price="12">BROAST spicy <span style="color:lightgrey;">spicyQ</span></button></div>
    <div class="col-md-1"style="padding-top: 10px;">      <button class="id11" value="Broast3" price="13">BROAST spicy <span style="color:lightgrey;">spicyQ</span></button></div>
    <div class="col-md-1 "style="padding-top: 10px;">      <button class="id11" value="Broast4" price="14">BROAST spicy <span style="color:lightgrey;">spicyQ</span></button></div>
    <div class="col-md-1 "style="padding-top: 10px;">      <button class="id11" value="Broast5" price="15">BROAST spicy <span style="color:lightgrey;">spicyQ</span></button></div>
    <div class="col-md-1"style="padding-top: 10px;">      <button class="id11" value="Broast6" price="16">BROAST spicy <span style="color:lightgrey;">spicyQ</span></button></div>
    <div class="col-md-3" style="padding-top: 10px;">
      <span style="padding-left: 15px;"><b>Date/Time: </b><span class="e" name="addmore[][dat]" style="color: red"  id="digital-clock"></span></span><br>

         </div><br><br><br><br>
    <div class="col-md-1"style="padding-top: 10px;">
        <button >BROAST <span style="color:lightgrey;">spicy rgrtdspicy</span></button></div>
    <div class="col-md-1"style="padding-top: 10px;">      <button class="">BROAST spicy <span style="color:lightgrey;">spicyQ</span></button></div>
    <div class="col-md-1"style="padding-top: 10px;">      <button class="">BROAST spicy <span style="color:lightgrey;">spicyQ</span></button></div>
    <div class="col-md-1"style="padding-top: 10px;">      <button class="">BROAST spicy <span style="color:lightgrey;">spicyQ</span></button></div>
    <div class="col-md-1"style="padding-top: 10px;">      <button class="">BROAST spicy <span style="color:lightgrey;">spicyQ</span></button></div>
    <div class="col-md-1"style="padding-top: 10px;">      <button class="">BROAST spicy <span style="color:lightgrey;">spicyQ</span></button></div>
    <div class="col-md-1"style="padding-top: 10px;">      <button class="">BROAST spicy <span style="color:lightgrey;">spicyQ</span></button></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="padding-left: 15%;"><b>TOKEN</b></span>
    <br><br><br><br>

    <div class="col-md-1"style="padding-top: 10px;">
        <button >BROAST <span style="color:lightgrey;">spicy rgrtdspicy</span></button></div>
    <div class="col-md-1"style="padding-top: 10px;">      <button class="">BROAST spicy <span style="color:lightgrey;">spicyQ</span></button></div>
    <div class="col-md-1"style="padding-top: 10px;">      <button class="">BROAST spicy <span style="color:lightgrey;">spicyQ</span></button></div>
    <div class="col-md-1"style="padding-top: 10px;">      <button class="">BROAST spicy <span style="color:lightgrey;">spicyQ</span></button></div>
    <div class="col-md-1"style="padding-top: 10px;">      <button class="">BROAST spicy <span style="color:lightgrey;">spicyQ</span></button></div>
    <div class="col-md-1"style="padding-top: 10px;">      <button class="">BROAST spicy <span style="color:lightgrey;">spicyQ</span></button></div>
    <div class="col-md-1"style="padding-top: 10px;">      <button class="">BROAST spicy <span style="color:lightgrey;">spicyQ</span></button></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="padding-top: 15px;"><B>TAKE IN</B></span><br>&nbsp;&nbsp;<button class="btn1">OUT</button>&nbsp;&nbsp;&nbsp;<button class="btn2">IN</button>
           
       </div><br>    
            
      <div class="row">
     <div class="col-md-8" style="">
      <table class="table table-bordered " id="ro" style="border: 1px solid black;background-color: white;">
    <thead>
      <tr>
        <th>SNO</th>
        <th>DISCRIPTION</th>
        <th>QTY</th>
        <th>PRICE</th>
        <th>TOTAL</th>
        <th>CANCEL</th>
      </tr>
    </thead>
  
    <tbody>
      
    </tbody>
  </table></div>
<div class="col-md-4">
  <button class="btn1 btn12" id="btt7" value="7">7</button><button id="btt8" class="btn1 btn12" value="8">8</button><button value="9" id="btt9" class="btn1 btn12">9</button><br>
  <button class="btn1 btn12" value="4">4</button><button class="btn1 btn12" value="5">5</button><button value="6" class="btn1 btn12">6</button><br>
  <button class="btn1 btn12" value="1">1</button><button class="btn1 btn12" value="2">2</button><button value="3" class="btn1 btn12">3</button><br>
  <button class="btn1 btn12" value="clear">CE</button><button class="btn1 btn12" value="0">0</button><button class="btn1 btn12" value="."><b>.</b></button>
</div></div>
<div class="row" style="margin-top: 20px;">
  <div class="col-md-4 col-md-offset-8"><button class="btn btn-success" id="orde">ORDER</button></div>
</div></div>
  
      
    

 <!-- <script>
 
var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
var dateTime = date+' '+time;
$("#div").html(dateTime);
      </script> -->


  <!-- <script type="text/javascript">
 
    $(document).ready(function() {
        $('#bot1').click(function() {
     var brst= $(this).val();
     var brst1= $(this).attr("price");
     $('#td1').text(brst);
      $('#td3').text(brst1);
        });
    });
</script>
 <script type="text/javascript">
 
    $(document).ready(function() {
        $('#btt7').click(function() {
     var bott= $(this).val();
     var brst1= $('#td3').text();
     $('#td2').text(bott);
    var total = bott*brst1;
    $('#td4').text(total); 
        });
    });
</script> -->

<script type="text/javascript">
    $(document).ready(function(){      
      var i=0;  
   
      $('.id11').click(function(){ 
    var bro =  $(this).val();
    var bro1 =  $(this).attr("price");
           i++;  
           $('#ro').append('<tr id="'+i+'" class="dynamic-added"><td  class="name_list">'+i+'</td><td  class="a'+i+'">'+bro+'</td> <td   class="b'+i+'"> </td><td  class="c'+i+'">'+bro1+'</td><td   class="d'+i+'"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>'); 
           $('.btn12').click(function(){ 
     var bro12 =  $(this).val();
     var total= bro12*bro1; 
     $(".b"+i+"").text(bro12);
     $(".d"+i+"").text(total);
      
      }); 
      });

    
  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#'+button_id+'').remove();
          // location.reload();  
      });  
  
    });  
</script>

<script>
    $(document).ready(function() {
        $("#orde").click(function() {
      var lastRowId = $('#ro tr:last').attr("id"); /*finds id of the last row inside table*/
      var item = new Array(); 
      //var quanti = new Array();
       var pricee = new Array();
      // var totall = new Array();
      // var datee = new Array();
      for ( var i = 1; i <= lastRowId; i++) {
      item.push($(".a"+i+"").html()); /*pushing all the names listed in the table*/
      //quanti.push($(".b"+i+"").html()); /*pushing all the emails listed in the table*/
     pricee.push($(".c"+i+"").html());
      //totall.push($("#"+i+" .d"+i).html());
      //datee.push($(".e").html());
      }
      var sendItem = JSON.stringify(item); 
      //var sendQuanti = JSON.stringify(quanti);
      var sendPricee = JSON.stringify(pricee);
      //var sendTotall = JSON.stringify(totall);
      //var sendDatee = JSON.stringify(datee);
      //alert(sendItem);
      //alert(sendQuanti);
      $.ajax({
      url: "http://localhost/work1//index.php/Welcome/ord_2/",
      type: "post",
      data: {sendItem : sendItem , sendPricee : sendPricee },
      success : function(data){
      //alert(data); /* alerts the response from php.*/
      location.reload();
      }
      });
      });
      });
  </script>

  <script>
          function getDateTime() {
              var now     = new Date(); 
              var year    = now.getFullYear();
              var month   = now.getMonth()+1; 
              var day     = now.getDate();
              var hour    = now.getHours();
              var minute  = now.getMinutes();
              var second  = now.getSeconds(); 
              if(month.toString().length == 1) {
                   month = '0'+month;
              }
              if(day.toString().length == 1) {
                   day = '0'+day;
              }   
              if(hour.toString().length == 1) {
                   hour = '0'+hour;
              }
              if(minute.toString().length == 1) {
                   minute = '0'+minute;
              }
              if(second.toString().length == 1) {
                   second = '0'+second;
              }   
              var dateTime = year+'/'+month+'/'+day+' '+hour+':'+minute+':'+second;   
               return dateTime;
          }

          // example usage: realtime clock
          setInterval(function(){
              currentTime = getDateTime();
              document.getElementById("digital-clock").innerHTML = currentTime;
          }, 1000);
  </script>
  
</body>
</html>
