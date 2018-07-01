@extends('app')
@section('content')
<style>




/*.enemy2 { left: 180px;  top: 200px; }*/
/*.enemy3 { left: 280px;  top: 180px; }*/
.enemy4 { left: 30px;  top: 250px; }
/*.enemy5 { left: 480px;  top: 220px; }*/
/*.enemy6 { left: 580px;  top: 280px; }*/


.enemy13 { left: 30px;  top: 800px; }
.enemy14 { left: 30px;  top: 550px; }
.enemy15 { left: 30px;  top: 650px; }
.enemy18 { left: 30px;  top: 450px; }
.enemy21 { left: 30px;  top: 750px; }





</style>
<body id="pageBody">






  <div class="container">
    <div class="row-fluid">

      <div>


       <img src="images/game/background/1.jpg" alt="загружается карта" class="map"/>
       <svg><line x1="190" y1="190" x2="590" y2="590" stroke="yellow" stroke-width="2"/></svg>

       <div class="base base1"></div>
       <div class="base base2"></div>
       <div class="base base3"></div>
       <div class="base base4"></div>
       <div class="base base5"></div>
       <div class="base base6"></div>
       <div class="base base7"></div>
       <div class="base base8"></div>
       <div class="base base9"></div>
       <div class="base base10"></div>
       <a class="btn btn-info btn-large" id="startGame">Старт</a>



<!-- <script src="scripts/jquery.min.js" type="text/javascript"></script> 
  <script src="scripts/default.js" type="text/javascript"></script> -->
  <script src="js/gameStar.js" type="text/javascript"></script>


  <!-- include ('layouts.training')  -->
  <script>

  $left=$('.map').position()['left'];

  $('.map').css('left',1*$left);
  $('#startGame').css('left',1*$left+850);

  $('.base1').css('left',1*$left+160);
  $('.base1').css('top',150);

  $('.base2').css('left',1*$left+570);
  $('.base2').css('top',170);

  $('.base3').css('left',1*$left+650);
  $('.base3').css('top',350);

  $('.base4').css('left',1*$left+520);
  $('.base4').css('top',710);

  $('.base5').css('left',1*$left+810);
  $('.base5').css('top',240);

  $('.base6').css('left',1*$left+320);
  $('.base6').css('top',340);

  $('.base7').css('left',1*$left+970);
  $('.base7').css('top',360);  

  $('.base8').css('left',1*$left+690);
  $('.base8').css('top',600);  

  $('.base9').css('left',1*$left+1080);
  $('.base9').css('top',240);

  $('.base10').css('left',1*$left+850);
  $('.base10').css('top',740);

   $(".btn_Game").hide()
   $(".hidden3").hide()

   function position(){
    console.log($('.enemy1').position()['left'])
   }
   </script>


 </body>
 </html>

 @endsection