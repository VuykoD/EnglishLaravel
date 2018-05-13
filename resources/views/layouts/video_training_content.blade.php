

     <script src="js/jquery.min.js" type="text/javascript"></script>

     <script src="js/general-data.js"></script>
     <script src="js/training-phrase.js"></script>
     <script src="js/random_voice.js"></script>
     <script src="js/speech-input.js"></script>
     <script src="js/ajax_framework.js"></script>


     <link rel="stylesheet" href="css/animate.css">

<br>
<div class="container">
   <div class="row-fluid">


<div class="span2"></div>
                <div class="span8 border_video">


<div class="video-responsive">
    <article class="review">
                               
                    <iframe id="video" width="auto" height="auto" src="http://www.youtube.com/embed/{{$adress}}" allowfullscreen></iframe>
                            </article>  
                            <a class="btn over" title="Нажмите Tab для повтора"></a>

                            <a class="btn {{$hide_title}}"></a>
  
</div>
</div>
</div><br> 
                  
                   <div class="container training">
                    <div class="row-fluid">
                    <div class="span2"> </div>
                    <div class="span1"><label class="checkbox inline">
                        <input type="checkbox"  value="option6" id="rus1"> Скрыть <br> перевод
                    </label> </div>
     
 <div class="span5">
   <a class="btn btn-inverse btn-large centered_menu_3 margin_b_7"   href="vocabulary?id_course={{$id_base}}&id_user={{Auth::user()->id}}&GetWords=9" >Отобрать на изучение</a>
          
  <a class="btn btn-info btn-large centered_menu_3 margin_b_7" id="new_training1">Тренировать</a>
   </div>
                    <div class="span1"></div>
                        <div class="btn-group">
                    <button class="btn btn-medium" data-toggle="dropdown" id="type_training_button">Сложить слова<span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a class="type_training">Сложить слова</a></li>
                        <li><a class="type_training">Первые буквы (...)</a></li>
                        <li><a class="type_training">Первые буквы</a></li>
                        <li><a class="type_training">3 руссских варианта</a></li>
                        <li><a class="type_training">Микрофон</a></li>
                    </ul>
                    </div>
                    </div>
                    </div>
</div>

<div class="height320">
<div class="container">

<p align="center" class="rus size_20 font_green "></p>
<p align="center" class="input2 size_30 "><button class="btn btn-secondary btn-large btn_input2"></button></p>
<p align="center" class="input" id="focus"></p>
<p align="center" class="prompt2"></p>
<p align="center" class="prompt size_20 font_green "></p>
<p align="center" class="microphon"><meter class="meter2" value="0" max="100"  optimum="1"></meter><br><textarea   placeholder="Повторите сколько успеете. Наведите мышку" id ="repeat"></textarea></p>

</div>
</div>
<br>

 @guest
      @else
 @if (Auth::user()->id==1)




<br><br><br><br>
<div class="container">
   <div class="row-fluid">
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>№</th>
                <th>id</th>
                <th>Начало</th>
                <th>Конец</th>
                <th>Английский</th>
                <th>Русский</th>
            </tr>
        </thead>
        <tbody Class="rows">
    </table>
   <br>
  </div> 
</div>   
<br>
<br><br><br><br>


<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


$(document).on('click', '.edit_button', function(e) {
  e.preventDefault();

  var $string= $(this).attr('class').split(' ');
  var $row=$string[2];
  console.log($row)

  var arr_base_course_id_ = $("input.id."+$row).val();
  var start_video=$("input.start."+$row).val();
  var end_video=$("input.end."+$row).val();
  var eng_ = $("input.english."+$row).val();
  var rus_ = $("input.russian."+$row).val();
  var sound_type = $sound_type;
        
  $.ajax({

     type:'POST',
     url:'/ajaxRequest',
     data:{sound_type:sound_type, arr_base_course_id_:arr_base_course_id_, eng_:eng_, rus_:rus_, start_video:start_video, end_video:end_video, _token: '{{csrf_token()}}'},

        success:function(data){

            $video_.attr('src', src + '?autoplay=1&rel=0&start='+start_video+'&end='+end_video+'&rel=0');
        }

  });
});
</script>

<script type="text/javascript">

$myVocabulary = {!!$video_time!!}

function list()   { 
$.each($myVocabulary,function(index,value) {
  var $index1=index+1
  //$(".costumer").text($text+$(this)[0]['id']+" - ");
  $(".rows").append(
    '<tr>'+
    '<td>' +$index1+"</td>"+
    '<td><input class="id ' +$index1+'row" style="width:50px" value=' +value['id']+"></input></td>"+
    '<td><input class="start ' +$index1+'row" style="width:50px" value=' +value['start_']+"></input></td>"+
    '<td><input class="end ' +$index1+'row" style="width:50px" value=' +value['end_']+"></input></td>"+
    '<td><input class="english ' +$index1+'row" style="width:500px" value="' +value['english']+'"></input></td>'+
    '<td><input class="russian ' +$index1+'row" style="width:500px" value="' +value['russian']+'"></input></td>'+
    '<td><btn class="btn sound ' +$index1+'row">S</btn></td>'+
    '<td><btn class="btn edit_button ' +$index1+'row">E</btn></td>'+
    "</tr>"
    );
})
}
list() 

</script>


    @endif                             
 @endguest



<script>

arr_start =[];
arr_end =[];
arr_adress =[];
$getQuantity=0;
$get_base_course_id=0;
number_video=0;
$koef=1;
video_=1;
cycle=0;
row_new=0;
max_task=0;
task_new=0;
try_answer=0;
show_training=1;
repeat_training=0;

buttons();

$(document).keyup(function(e){
if (e.which == 9) {
   $sound();
}  
}); 



$(function () {
$sound_type="video"
$(".input2" ).css("opacity","0.01")
$(".microphon" ).hide()
$video_ = $('#video');
src = $video_.attr('src');
arr_English=[@foreach ($video_time as $list)"{{$list['english']}}",@endforeach]
arr_base_course_id=[@foreach ($video_time as $list)"{{$list['id']}}",@endforeach]

$.each(arr_English, function(index, value){
   arr_English[index]=value.replace("&#039;", "'");
});

start_video=[@foreach ($video_time as $list)'{{$list['start_']}}',@endforeach]
end_video=[@foreach ($video_time as $list)'{{$list['end_']}}',@endforeach]
arr_Rus=[@foreach ($video_time as $list)'{{$list['russian']}}',@endforeach]
});



$(".over").css("display","none")

$(".type_training").on("click", function () {
    $("#type_training_button").text($(this).text()).append('<span class="caret"></span>') 
    select_type_training_()
});


$(".checkbox").on("click", function () {
    translation_hide();
});


$(".over").on("click", function () {
   $sound();
});

function $sound()   { 
   $video_.attr('src', src + '?autoplay=1&rel=0&start='+start_video[number_video]+'&end='+end_video[number_video]+'&rel=0');
   $('#firstLetter').focus();
}


$(document).on('click', '#new_training1', function() {
    number_video=0;
    $("#new_training1").hide();
    $(".over").css("display","block")
    $sound();
    try_training_cod();
    select_type_training_()
});

$(document).on('click', '.sound', function() {
  var $string= $(this).attr('class').split(' ');
  var $row=$string[2];
  var $start=$("input.start."+$row).val();
  var $end=$("input.end."+$row).val();
  $video_.attr('src', src + '?autoplay=1&rel=0&start='+$start+'&end='+$end+'&rel=0');
});

$(".height320").css("display","none")
</script>






