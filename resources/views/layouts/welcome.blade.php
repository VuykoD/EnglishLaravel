@extends('app')
@section('content')
<div id="decorative1" ></div>

<div class="row-fluid absolute_auth" >
                 <div class="span12">
                        <div id="headerSeparator"></div>
                          <div class="container">
  
                               <div class="span3">
     

                                   @guest
                                    @include ('auth.login')
                                    @else
                                    <div class="alert hidden1"></div>
                                   @endguest
                                   

  
                            <div @guest @else class="hidden1" @endguest>
                            <div id="divHeaderLine1" >Наша цель:</div><br />
                              <div id="divHeaderLine2" class="divHeaderLine2">Мы пытаемся сделать обучение интересным...</div>
                            <br /><br />
                           
                        </div>
                             </div>

                              </div>
                        </div>

                             <br /> 

                        <div id="headerSeparator2"></div>
 </div>
 <div class="row-fluid absolute_auth">
      <div class="span12"> 
        <div class="container">
         <div @guest  class="unvisible" @endguest>
                          <a href="video?user=@guest none @else{{Auth::user()->id}}@endguest&type=9">
                               <div class=" span8 four_block pull-left" id="block1">  
                               <center><h4 style="color:white">Изучение с помощью видео.</h4>           
                                <img src="images/movie12.jpg" class="img-polaroid" >  
                                <p style="color:black">Вы обучаетесь и развлекаетесь одновременно. Вы развиваете навык восприятия английского языка на слух.
                                  Вы учите разговорные формы слов, фразовые глаголы и сленг. Вы учитесь естественной речи.
                                </p></center>
                               </div>
                          </a>     

                          <a href="reading?type=9"><div class=" span4 text_black four_block pull-right"  id="block2">
                                <center>
                               <H4 style="color:white">Чтение</H4>
                               <p>В разделе чтение все самое интересное. 
                                Чтение - это один из самых доступных способов изучения и совершенствования языка, читать тексты можно в любое время,
                                 в любом месте, тем самым, постоянно практикуя навыки языка.</p>
                                <br/> <br/>
                                <p>"Genius is 1% inspiration and 99% perspiration" </p>
                               </center>
                               </div>
                          </a>

                          <a href="training?user=@guest none @else{{Auth::user()->id}}@endguest&type=video">
                               <div class="span4 text_black four_block pull-left" id="block3">
                               <center><H4 style="color:white">Тренажеры</H4>
                               <p>Это основа этого сайта.
                                Вы можете выбрать нужный Вам курс в разделе курсы от дошкольного уровня до уровня advance.
                                Есть 10 разных типов тренировок на предложения и 10 типов на слова. Слова подбираются к предложению.
                                 Курсы созданы на основании учебников 1-10 класса и сучествующих материалов на курсах.
                                 Цикл обучения разбит на 3 этапа: изучение нового, повторение, и экзамен.</p> 
                                 <p>Запомните - повторение Мать учения.</p>
                               </center>
                               </div>
                          </a>

                          <a href="game.php">
                               <div class=" span8 text_black four_block pull-right disabled" id="block4">
                               <center><h4 style="color:white">Изучение с помощью игр.</h4>           
                                <img src="images/15.jpg" class="img-polaroid " >  
                                <p class="disabled">Играя в различные игры, обычно баллы даются за выпление заданий в игре. И вы, расходуя их, можете развиваться и выходить на более сложные уровни. Здесь же баллы будут даваться за выполнение английских заданий.
                                </p>></center>
                               </div>
                          </a>  

           </div>
      </div>  
   </div>        
</div>

<div id="contentOuterSeparator"></div>

<div class="container">

    <div class="divPanel page-content">

        <div class="row-fluid">

                <div class="span12" id="divMain">
                   
                    <h2>На заметку родителям</h2>

                    <p>Многие из детей очень любят играть в различные иргы типа Minecraft или WoT. Вы можете <a href="#">скачать приложение</a>, которое будет блокировать всё, пока ребенок не позанимался. И будет открывать ребенку доступ к играм на час или два после того, как он набрал необходимое количество баллов.</p>

                    <div >
                      <center>
                        <h3>Мы планируем...</h3> 
                        <p>Постоянно обновлять наш сайт, чтобы у учащихся не пропадал интерес.</p></center>
                    </div>
                    <br />

                    </div>

                </div>

            </div>

        <div id="footerInnerSeparator"></div>
    </div>

</div>

<script src="js/jquery.min.js" type="text/javascript"></script> 
<link rel="stylesheet" href="css/animate.css">

<script>
window.onload = function (){
 @if (isset($message)){
alert("{{$message}}")}
@endif
}
$('#block1').mouseenter(function(){$(this).animate({opacity: "1"},200,"swing" );})
$('#block1').mouseleave(function(){$(this).animate({opacity: ".2"},300,"swing" );})
$('#block2').mouseenter(function(){$(this).animate({opacity: "1"},200,"swing" );})
$('#block2').mouseleave(function(){$(this).animate({opacity: ".2"},300,"swing" );})
$('#block3').mouseenter(function(){$(this).animate({opacity: "1"},200,"swing" );})
$('#block3').mouseleave(function(){$(this).animate({opacity: ".2"},300,"swing" );})
$('#block4').mouseenter(function(){$(this).animate({opacity: "1"},200,"swing" );})
$('#block4').mouseleave(function(){$(this).animate({opacity: ".2"},300,"swing" );})



</script>
@endsection