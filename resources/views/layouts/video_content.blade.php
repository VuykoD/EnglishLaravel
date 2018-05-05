
<body id="pageBody">
<div class="container">
<div class="row-fluid color_grey">
<h4 class="centered_menu padding_50">Новые видео</h4>


                <div class="span12">
@if(Session::has('message'))
        {{Session::get('message')}}
    @endif

                        <ul id="tiles_2"> 

 @foreach ($video as $item)
                <li class ="none_user_message"><article class="youtube video flex-video pull-left">
                <a href="@guest # @else video_training?user={{Auth::user()->id}}&adress={{ $item['path_youtube']}}&number={{$item['id']}}&hide_title={{$item['hide']}}@endguest">    
                <img src="images/video/{{$item['id']}}.jpg" class="img_for_video" ></a></article>
                <div class="pull-right"><div class="meta"><span>{{$item['type']}}</span>
                <span class="pull-right">{{$item['level']}}</span></div>
                <div class="list-group"><button type="button" class="list-group-item list-group-item-warning height_45">
                <img src="images/sort/puzzle.png" class="img-sort pull-left"><span>0 предложений, 0 слов</span></button>
                <h5 align="center">{{$item['name']}}</h5></div></li>
                @if ($loop->index==1)
                    @break
                @endif
@endforeach  

                         

                          
                </div>
                
</div>
</div>
<h4 class="centered_menu">Каталог видео</h4>
<div class="container">

<form>



                    <div class="span2">
                    <div class="btn-group">
                    <button class="btn btn-medium" data-toggle="dropdown" id="type_video_button">Все видео <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a class="type_video">Все видео</a></li>
                        <li><a class="type_video">Мультфильмы</a></li>
                         <li><a class="type_video">Интересное</a></li>
                        <li><a class="type_video">Видеоуроки</a></li>
                        <li><a class="type_video">Музыка</a></li>
                         <li><a class="type_video">Фильмы</a></li>
                    </ul>
                    </div>
                    </div>
                    <div class="span2">
                    <div class="btn-group">
                    <button class="btn btn-medium" data-toggle="dropdown" id="level_button">Любая сложность <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li ><a class="level">Любая сложность</a></li>
                        <li ><a class="level">Легкий уровень</a></li>
                         <li><a class="level">Средний уровень</a></li>
                        <li><a class="level">Тяжелый уровень</a></li>
                    </ul>
                    </div>
                    </div>
                    <div class="span2  pull-right">
                    <label class="checkbox inline">
                        <input type="checkbox" id="inlineCheckbox4" value="option6"> Скрыть изученое
                    </label>
                    </div>
                                    
</form>
<br>
</div>
<div class="container">
<div class="row-fluid">

                <div class="span12">


                        <ul id="tiles"> 
                           
 @foreach ($video as $item)
                 @if ($loop->index>1)
                 <li class ="height250 {{$item['level']}} {{$item['type']}} none_user_message">

                
                <a href="@guest # @else video_training?user={{Auth::user()->id}}&adress={{ $item['path_youtube']}}&number={{$item['id']}}&hide_title={{$item['hide']}}@endguest">  
                <img src="images/video/{{$item['id']}}.jpg" class="img_for_video margin_top_0" ></a>
                <div class="pull-right"><div class="meta"><span>{{$item['type']}}</span>
                <span class="pull-right">{{$item['level']}}</span></div>
                <div class="list-group"><button type="button" class="list-group-item list-group-item-warning height_45">
                <img src="images/sort/puzzle.png" class="img-sort pull-left"><span>0 предложений, 0 слов</span></button>
                <h5 align="center">{{$item['name']}}</h5></div></li>
                @endif
                @if ($loop->index==19)
                    @break
                @endif
@endforeach 

                
                        </ul>

                </div>
                
</div>
</div>

                <div class="pagination centered_menu">
                    <ul>
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
 <br> <br>               

 <script src="js/jquery.min.js" type="text/javascript"></script> 


 <script type="text/javascript">

@guest
     $(".none_user_message").on("click", function () {
         alert("Необходимо авторизироваться или зарегистрироваться")
     });
@endguest

$type={{$type}}
if ($type==9){$("#type_video_button").text("Все видео")}
if ($type==1){$("#type_video_button").text("Мультфильмы")}
if ($type==2){$("#type_video_button").text("Интересное")}
if ($type==3){$("#type_video_button").text("Видеоуроки")}
if ($type==4){$("#type_video_button").text("Музыка")}
if ($type==5){$("#type_video_button").text("Фильмы")}
//console.log($type)

show_select()

$(".type_video").on("click", function () {
 $("#type_video_button").text($(this).text())
 show_select()
});


$(".level").on("click", function () {
 $("#level_button").text($(this).text())
 show_select()
});

function show_select(){
  var $type_video=""
  var $level=""
 $(".height250").show();
 if ($("#type_video_button").text()=="Все видео"){$type_video=""}
 if ($("#type_video_button").text()=="Мультфильмы"){$type_video=".height250:not(.Мультфильмы)"}
 if ($("#type_video_button").text()=="Интересное"){$type_video=".height250:not(.Интересное)"}   
 if ($("#type_video_button").text()=="Видеоуроки"){$type_video=".height250:not(.Видеоуроки)"}
 if ($("#type_video_button").text()=="Музыка"){$type_video=".height250:not(.Музыка)"}
 if ($("#type_video_button").text()=="Фильмы"){$type_video=".height250:not(.Фильмы)"}
 $($type_video).hide();
 if ($("#level_button").text()=="Любая сложность"){$level=""}
 if ($("#level_button").text()=="Легкий уровень"){$level=".height250:not(.легкий)"}
 if ($("#level_button").text()=="Средний уровень"){$level=".height250:not(.средний)"}   
 if ($("#level_button").text()=="Тяжелый уровень"){$level=".height250:not(.тяжелый)"}
$($level).hide();
  $type_video_=$("#type_video_button").text()
  $type_video_=$type_video_.replace('<span class="caret"></span>','')
  $("#type_video_button").text($type_video_).append('<span class="caret"></span>')
  $level_=$("#level_button").text()
  $level_=$level_.replace('<span class="caret"></span>','')
  $("#level_button").text($level_).append('<span class="caret"></span>')
  }

    </script>
</body>