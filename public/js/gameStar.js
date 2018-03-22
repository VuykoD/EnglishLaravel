 function enemy1(){


  $('body').append('<div class="enemy enemy1"><b>10/10</b><meter value="10" max="10" low="3" optimum="9" high="7"></meter><img src="images/game/enemy/1.png"/></div>')
    var speed=(40 + Math.floor(Math.random() * 40));
   
    var l=30; var t= 80 ; myDuration=speed*Math.sqrt(l*l+t*t);
  $(".enemy1").animate({left: '+='+l+'px', top: '+='+t+'px',},myDuration,'linear'); 
    var l=70; var t= 70 ; myDuration=speed*Math.sqrt(l*l+t*t);
  $(".enemy1").animate({left: '+='+l+'px', top: '+='+t+'px',},myDuration,'linear'); 
    var l=400; var t= -10 ; myDuration=speed*Math.sqrt(l*l+t*t);
  $(".enemy1").animate({left: '+='+l+'px', top: '+='+t+'px',},myDuration,'linear'); 
    var l=80; var t= 0 ; myDuration=speed*Math.sqrt(l*l+t*t); 
  $(".enemy1").animate({left: '+='+l+'px', top: '+='+t+'px',},myDuration,'linear'); 
    var l=90; var t= 30 ; myDuration=speed*Math.sqrt(l*l+t*t); 
  $(".enemy1").animate({left: '+='+l+'px', top: '+='+t+'px',},myDuration,'linear'); 
    var l=40; var t= 80 ; myDuration=speed*Math.sqrt(l*l+t*t);
  $(".enemy1").animate({left: '+='+l+'px', top: '+='+t+'px',},myDuration,'linear'); 
    var l=-45; var t= 100 ; myDuration=speed*Math.sqrt(l*l+t*t); 
  $(".enemy1").animate({left: '+='+l+'px', top: '+='+t+'px',},myDuration,'linear'); 
    var l=-120; var t= 70 ; myDuration=speed*Math.sqrt(l*l+t*t); 
  $(".enemy1").animate({left: '+='+l+'px', top: '+='+t+'px',},myDuration,'linear');
    var l=-10; var t= 130 ; myDuration=speed*Math.sqrt(l*l+t*t); 
  $(".enemy1").animate({left: '+='+l+'px', top: '+='+t+'px',},myDuration,'linear');
    var l=180; var t= 140 ; myDuration=speed*Math.sqrt(l*l+t*t); 
  $(".enemy1").animate({left: '+='+l+'px', top: '+='+t+'px',},myDuration,'linear');
    var l=330; var t= 140 ; myDuration=speed*Math.sqrt(l*l+t*t); 
  $(".enemy1").animate({left: '+='+l+'px', top: '+='+t+'px',},myDuration,'linear');
  

};

  function enemy11(){
  $('body').append('<div class="enemy enemy11"><b>10/10</b><meter value="10" max="10" low="3" optimum="9" high="7"></meter><img src="images/game/enemy/21.png"/></div>')
    var speed=(30 + Math.floor(Math.random() * 30));
    
    var l=-200; var t= 100 ; myDuration=speed*Math.sqrt(l*l+t*t);
  $(".enemy11").animate({left: '+='+l+'px', top: '+='+t+'px',},myDuration,'linear'); 
    var l=-110; var t= 140 ; myDuration=speed*Math.sqrt(l*l+t*t);
  $(".enemy11").animate({left: '+='+l+'px', top: '+='+t+'px',},myDuration,'linear'); 
    var l=-50; var t= 60 ; myDuration=speed*Math.sqrt(l*l+t*t);
  $(".enemy11").animate({left: '+='+l+'px', top: '+='+t+'px',},myDuration,'linear'); 
    var l=-100; var t= 50 ; myDuration=speed*Math.sqrt(l*l+t*t);
  $(".enemy1").animate({left: '+='+l+'px', top: '+='+t+'px',},myDuration,'linear'); 
    var l=-210; var t= 120 ; myDuration=speed*Math.sqrt(l*l+t*t); 
  $(".enemy11").animate({left: '+='+l+'px', top: '+='+t+'px',},myDuration,'linear');
    var l=-10; var t= 140 ; myDuration=speed*Math.sqrt(l*l+t*t);
  $(".enemy11").animate({left: '+='+l+'px', top: '+='+t+'px',},myDuration,'linear');
    var l=180; var t= 140 ; myDuration=speed*Math.sqrt(l*l+t*t);
  $(".enemy11").animate({left: '+='+l+'px', top: '+='+t+'px',},myDuration,'linear');
    var l=330; var t= 140 ; myDuration=speed*Math.sqrt(l*l+t*t);
  $(".enemy11").animate({left: '+='+l+'px', top: '+='+t+'px',},myDuration,'linear');
  
};

function myInterval(){

  if (flight<10) {
  var myInterval1=(3 + Math.floor(Math.random() * 10))*1000;
  var myInterval2=(1 + Math.floor(Math.random() * 6))*1000;

    setTimeout(enemy11, myInterval1);
    setTimeout(enemy1, myInterval2);
    flight++;
    };
  };

flight=0;
//enemy1();
//enemy11(); 

$("#startGame").on("click", function () {
  $(".Game").addClass("btn_Game");
  $(".training_hide").addClass("Game2");
  $("p").css("text-align","left");
  $(".input2").css( "color","rgb(170,220,170)" );
  $(".prompt").css( "color","white" );
  $(".input2").css( "padding-top","0px" );
  $(".prompt").css( "padding-top","0px" );
  $(".prompt").css( "padding-bottom","0px" );
  $(".prompt2").css( "padding-top","0px" );
  $(".prompt2").css( "padding-top","0px" );
  $(".prompt3").css( "padding-top","0px" );
  $("svg").css( "margin-left","0px" );
  $("polygon").css( "stroke","rgb(170,220,170)" );
  $("#meter").css( "color","rgb(170,220,170)" );
 setTimeout(myInterval,1000);
setInterval(myInterval, 15000);
$(this).hide();
$(".btn_Game").show();
    });










function MyCollision(){
  $(".centerDiv").each(function() {

    var x = $(this).parent().position() ;
    var centerLeft = x.left+$(this).parent().width()/2;
      var centerTop = x.top+$(this).parent().height()/2;
       var MyRadius = $(this).height()/2;
    
         $(".enemy").each(function() {
         var xEnemy = $(this).position() ;
         centerLeftEnemy = xEnemy.left+$(this).width()/2;
           centerTopEnemy = xEnemy.top+$(this).height()/2;
           var katet1=centerLeft-centerLeftEnemy;
           var katet2=centerTop-centerTopEnemy;
          distance1=Math.sqrt(katet1*katet1+katet2*katet2);
           MyDistance1 =MyRadius+ 30;
            if (distance1<MyDistance1) {

              // if (katet1>=0 && katet2>=0) $(this).append('<svg class="shot_line"><line x1="0" y1="0" x2="'+katet1+'" y2="'+katet2+'" stroke="yellow" stroke-width="2"/></svg>');
               //if (katet1>=0 && katet2<0) $(this).append('<svg margin-top = "'+katet2-30+'" class="shot_line"><line x1="0" y1="0" x2="'+katet1+'" y2="'+katet2+'" stroke="yellow" stroke-width="2"/></svg>');
                var $lifeEnemy=$(this).children("meter").val();
                $lifeEnemy--;
                 $(this).children("meter").val($lifeEnemy)
                 $(this).children("b").text($lifeEnemy+'/10')

                
                 
                 


                //setTimeout(deleteLine,100);  
                if ($lifeEnemy<=0) {
                  $(this).remove();
                 };
         
            }else{
              $(this).css('opacity','');
            }

            });
        if (distance1<MyDistance1) {
                
              /*$(this).css('opacity','0.5');*/
         
            }else{
              /*$(this).css('opacity','');*/
            }
     
        
       });    
};

setInterval(MyCollision, 2000);
                function deleteLine(){
                          $(".shot_line").remove()
                    };

$(function () {
 $('.base').mouseenter(function(){
                     $(this).css('height', '60px')
                     $(this).css('width', '80px')
                     var x = $(this).position()
                     var t = x.top-20
                     var l = x.left-10
                     $(this).offset({top:t,left:l})
                     $(this).append('<div class="choiseDefender choiseDefender1"><b>10</b></div>')

                     $('.choiseDefender1').click(function () {
                      if ( 1*$('#time_game').text()>=10){
                          $('#time_game').text(1*$('#time_game').text()-10)
                          var x = $(this).parent().position()
                          var t = x.top-150
                           var l = x.left-150

                        $(this).parent().parent().append('<div class="defender position"><div class="centerDiv centerDiv1"><img src="images/game/defender/1.png" class="defender1"></div></div>')
                          $(this).append('<line x1="220" y1="220" x2="220" y2="390" stroke="violet" stroke-width="5" />');           
                        $('.position').offset({top:t,left:l})
                        $('.position').removeClass("position")
                        $(this).parent().remove()
                                        $('.defender1').mouseenter(function(){
                                         $(this).parent().css('border','1px solid white')
                                         $(this).parent().css('background-color','rgba(255, 165, 0, 0.3)')
                                         });

                                        $('.defender1').mouseleave(function(){
                                         $(this).parent().css('border','')
                                         $(this).parent().css('background-color','')
                                         });

                                   



                         }});

                     $(this).append('<div class="choiseDefender choiseDefender2"><b>15</b></div>')

                     $('.choiseDefender2').click(function () {
                          if ( 1*$('#time_game').text()>=15){
                          $('#time_game').text(1*$('#time_game').text()-15)
                          var x = $(this).parent().position()
                          var t = x.top-150
                           var l = x.left-150
               
                        $(this).parent().parent().append('<div class="defender position"><div class="centerDiv centerDiv2"><img src="images/game/defender/2.png" class="defender2"></div></div>') 

                        $('.position').offset({top:t,left:l})
                        $('.position').removeClass("position")
                        $(this).parent().remove()
                                        $('.defender2').mouseenter(function(){
                                         $(this).parent().css('border','1px solid white')
                                         $(this).parent().css('background-color','rgba(255, 165, 0, 0.3)')
                                         });

                                        $('.defender2').mouseleave(function(){
                                         $(this).parent().css('border','')
                                         $(this).parent().css('background-color','')
                                         });

                         }});


                     $(this).append('<div class="choiseDefender choiseDefender3"><b>20</b></div>')

                     $('.choiseDefender3').click(function () {
                      if ( 1*$('#time_game').text()>=20){
                          $('#time_game').text(1*$('#time_game').text()-20)
                          var x = $(this).parent().position()
                          var t = x.top-150
                           var l = x.left-150
        
                        $(this).parent().parent().append('<div class="defender position"><div class="centerDiv centerDiv3"><img src="images/game/defender/3.png" class="defender3"></div></div>')             
                        $('.position').offset({top:t,left:l})
                        $('.position').removeClass("position")
                        $(this).parent().remove()
                                        $('.defender3').mouseenter(function(){
                                         $(this).parent().css('border','1px solid white')
                                         $(this).parent().css('background-color','rgba(255, 165, 0, 0.3)')
                                         });

                                        $('.defender3').mouseleave(function(){
                                         $(this).parent().css('border','')
                                         $(this).parent().css('background-color','')
                                         });
                        }});


                     $(this).append('<div class="choiseDefender choiseDefender4"><b>30</b></div>')

                     $('.choiseDefender4').click(function () {
                      if ( 1*$('#time_game').text()>=30){
                          $('#time_game').text(1*$('#time_game').text()-30)
                          var x = $(this).parent().position()
                          var t = x.top-150
                           var l = x.left-150
                
                        $(this).parent().parent().append('<div class="defender position"><div class="centerDiv centerDiv4"><img src="images/game/defender/4.png" class="defender4"></div></div>')             
                        $('.position').offset({top:t,left:l})
                        $('.position').removeClass("position")
                        $(this).parent().remove()
                                        $('.defender4').mouseenter(function(){
                                         $(this).parent().css('border','1px solid white')
                                         $(this).parent().css('background-color','rgba(255, 165, 0, 0.3)')
                                         });

                                        $('.defender4').mouseleave(function(){
                                         $(this).parent().css('border','')
                                         $(this).parent().css('background-color','')
                                         });
                        }});


                     $(this).append('<div class="choiseDefender choiseDefender5"><b>50</b></div>')

                     $('.choiseDefender5').click(function () {
                      if ( 1*$('#time_game').text()>=50){
                          $('#time_game').text(1*$('#time_game').text()-50)
                          var x = $(this).parent().position()
                          var t = x.top-150
                           var l = x.left-150
      
                        $(this).parent().parent().append('<div class="defender position"><div class="centerDiv centerDiv5"><img src="images/game/defender/5.png" class="defender5"></div></div>')             
                        $('.position').offset({top:t,left:l})
                        $('.position').removeClass("position")
                        $(this).parent().remove()
                                        $('.defender5').mouseenter(function(){
                                         $(this).parent().css('border','1px solid white')
                                         $(this).parent().css('background-color','rgba(255, 165, 0, 0.3)')
                                         });

                                        $('.defender5').mouseleave(function(){
                                         $(this).parent().css('border','')
                                         $(this).parent().css('background-color','')
                                         });
                        }});

});                     

                        
 $('.base').mouseleave(function(){
                   $(".choiseDefender", this).remove()
                    $(this).css('height', '')
                     $(this).css('width', '')
                     var x = $(this).position()
                     var t = x.top+20
                     var l = x.left+10
                     $(this).offset({top:t,left:l})
                     
  });
         

});       
