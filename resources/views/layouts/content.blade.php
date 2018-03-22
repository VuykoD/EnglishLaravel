<div id="decorative1" style="position:relative">
    <div class="container">
        <div class="divPanel headerArea"

            <div class="row-fluid">
                 <div class="span12">
                        <div id="headerSeparator"></div>
                          <div class="container">
                               <div class="span3">
                               
                              <!--  <div class="text_black">
                               <H4 class="text_black">Планы на будущее</H4>
                               <p>Здесь будет размещаться юмор, цитаты, советы в случайном порядке с сылкой на то место где будет продолжение. если они не будут помещаться полностью </p>
                               <p align="right"><a href="#">читать продолжение</a></p>
                               </div> -->
                                         

                                   @guest
                                    @include ('auth.login')
                                    @else
                                    <div class="alert hidden1"></div>
                                   @endguest
                                   
<!--                                     <div class="input-append">

                                        <input class="text_entry"  type="text" placeholder="email" name="email" value=""><br>

                                        <input class="text_entry" type="password" placeholder="password " name="password" value=""><br>


                                       <a href="{{ route('login') }}" class="btn  btn_entry">Вход</a>
                                        

                                    </div>  -->

                                   
                                   
                                  
                                 

                               
                            <div @guest @else class="hidden1" @endguest>
                            <div id="divHeaderLine1" >Наша цель:</div><br />
                              <div id="divHeaderLine2" class="divHeaderLine2">Мы пытаемся сделать обучение интересным...</div>
                            <br /><br />
                           <!-- <div id="divHeaderLine3"><a class="btn btn-large btn-primary" href="#divHeaderLine2">Далее</a></div>-->
                        </div>
                             </div>

                              </div>
                        </div>

            <br /> 
                        

                        <div id="headerSeparator2"></div>

                </div>
             </div>

        </div>
       
   
</div>




<div id="contentOuterSeparator"></div>

<div class="container">

    <div class="divPanel page-content">

        <div class="row-fluid">

                <div class="span12" id="divMain">

                    <h2>Добро пожаловать</h2>

                    <p>У нас вы сможете изучать используя видео, проходить школьные программы. Изучать слова, фразы и предложения с помощью
                         тренировок. Читать короткие истории, сказки. <strong>Вы можете улучшать навыки разговорной речи с помощью микрофона</strong>.
                         А также получать удоволствие от изучения с помошью различных игр.
                    </p>

                    <hr style="margin:45px 0 35px" />
                  <div class="row-fluid">
                        <div class="span7 ">
                    <h3>Как это работает:</h3>

                <article>
                    <iframe width="700" height="315" src="http://www.youtube.com/embed/e7OYeIXsW60"  class="video_home"></iframe>
                </article>
                </div>
                <div class="span1">
                </div>
                <div class="span4 sidebar">

                            <div class="sidebox">
                                <h3 class="sidebox-title">На заметку родителям</h3>
                                <p>Многие из детей очень любят играть в различные иргы типа Minecraft или WoT. Вы можете <a href="#">скачать приложение</a>, которое будет блокировать эти игры, пока ребенок не позанимался. И будет открывать ребенку доступ к играм на один час после того, как он набрал необходимое количество балов. Список игр, на которые ставится запрет, Вы вибераете сами.</p>                       
                            </div>

                            <br />

                        </div>    
                <br />
                </div>  
                 <hr style="margin:45px 0 35px" />
                    <div class="lead">
                        <h2>Изучение с помощью любимого видео</h2> 
                        <h3>Мультфильмы, музыка, фильмы, видеоуроки и многое другое...</h3>
                    </div>
                    <br />

                    <div class="list_carousel responsive">
                        <ul id="list_photos">
                            <li><a href="#gallery.html"><img src="images/cartoon.jpg" class="img-polaroid"></a></li>
                            <li><a href="#gallery.html"><img src="images/music.jpg" class="img-polaroid" href="#gallery.html"></a></li>
                            <li><a href="#gallery.html"><img src="images/movie.jpg" class="img-polaroid" href="#gallery.html"></a></li>
                            <li><a href="#gallery.html"><img src="images/minecraft.jpg" class="img-polaroid" href="#gallery.html"></a></li>
          <li><a href="#gallery.html"><img src="images/chirch.jpg" class="img-polaroid" href="#gallery.html"></a></li>                            
                            <li><a href="#gallery.html"><img src="images/movie3.jpg" class="img-polaroid" href="#gallery.html"></a></li>
                            <li><a href="#gallery.html"><img src="images/vectorbeastcom-grass-sun.jpg" class="img-polaroid" href="#gallery.html"></a></li>
                            <li><a href="#gallery.html"><img src="images/movie2.jpg" class="img-polaroid" href="#gallery.html"></a></li>
          <li><a href="#gallery.html"><img src="images/stones-hi-res.jpg" class="img-polaroid" href="#gallery.html"></a></li>
          <li><a href="#gallery.html"><img src="images/salzburg-x.jpg" class="img-polaroid" href="#gallery.html"></a></li>
                        </ul>
                    </div> 
          
                    <hr style="margin:45px 0 35px" />
                    
                    <div class="lead">
                        <h2>Мы планируем...</h2> 
                        <h3>Постоянно обновлять наш сайт, чтобы у ущащихся не пропадал интерес.</h3>
                    </div>
                    <br />

                    <div class="row-fluid">
                        <div class="span8">

                            <h3>Изучение с помощью игр.</h3>         

                            <p>
                                <img src="images/15.jpg" class="img-polaroid" style="margin:12px 0px;">  
                            </p>
              
                            <p>Играя в различные игры, обычно балы или игровая валюта дается за выпление опреденных заданий. И вы, расходуя их, можете развиваться в игре и выходить на более сложные уровни. Здесь же балы будут даваться за выполнение английских заданий. Попробуйте, может и Вам понравится! 
                            </p>
                                                                                       
                        </div>
                        <div class="span4 sidebar">

                            <div class="sidebox">
                                <h3 class="sidebox-title">Выражение счастья на английском языке.</h3>
                                <p>On cloud nine - на седьмом небе.<br>
                                On top of the world - на седьмом небе.<br>
                                Over the moon - на седьмом небе.<br>
                                In seventh heaven - на седьмом небе.<br>
                                Happy as a clam - довольный как суслик.

                                </p>                       
                            </div>

                            <br />

                        </div>
                    </div>

                </div>

            </div>

        <div id="footerInnerSeparator"></div>
    </div>

</div>
