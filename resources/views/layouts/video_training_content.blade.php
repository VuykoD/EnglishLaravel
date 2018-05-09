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

 @guest
      @else
 @if (Auth::user()->id==1)
<p align="center" class="edit" ><input class="edit_password"  type="password" placeholder="password"/>
    <center>
    <input class="arr_base_course_id_" name="arr_base_course_id_"/>    
    <input class="start_video" name="start_video"/>
    <input class="end_video" name="end_video"/>
    <input class="eng_ edit_base" name="eng_"/>
    <button type="submit" class="edit_button btn btn-secondary">Редактировать</button>
    <input class="rus_ edit_base" name="rus_"/>
    </center>
</p>

    @endif                             
 @endguest

</div>
</div>

    <link rel="stylesheet" href="css/animate.css">
 
     <script src="js/general-data.js"></script>
     <script src="js/training-phrase.js"></script>
     <script src="js/random_voice.js"></script>
     <script src="js/jquery-1.8.2.min.js"></script>
     <script src="js/speech-input.js"></script>
     <script src="js/ajax_framework.js"></script>

 @guest
      @else
 @if (Auth::user()->id==1)
 <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });



    $(".edit_button").click(function(e){
        e.preventDefault();



        var arr_base_course_id_ = $("input[name=arr_base_course_id_]").val();
        var eng_ = $("input[name=eng_]").val();
        var rus_ = $("input[name=rus_]").val();
        var start_video = $("input[name=start_video]").val();
        var end_video = $("input[name=end_video]").val();
        var sound_type = $sound_type;


        $.ajax({

           type:'POST',

           url:'/ajaxRequest',
         
           data:{sound_type:sound_type, arr_base_course_id_:arr_base_course_id_, eng_:eng_, rus_:rus_, start_video:start_video, end_video:end_video, _token: '{{csrf_token()}}'},

           success:function(data){

              $(".rus_" ).hide();
              $(".eng_" ).hide();
              $(".edit_button" ).hide();
  $getSentence=eng_;
  $getRus=rus_;
  arr_English[number_video]=eng_;
  arr_Rus[number_video]=rus_;
  arr_start[number_video]=start_video;
  arr_end[number_video]=end_video;
  $start=start_video;
  $end=end_video;
 
  // arr_English[$number_in_array]=eng_;
  // arr_Rus[$number_in_array]=rus_;

  if (training_type==1){put_words_right_written_cod()}
  if (training_type==2){written_yes_no_cod()}
  if (training_type==3){put_words_right_audition_cod()}
  if (training_type==4){audition_yes_no_cod()}
  if (training_type==5){letter___written_cod()}  
  if (training_type==6){first_letter___written_cod()} 
  if (training_type==7){first_letter_written_cod()} 
  if (training_type==8){first_letter___audition_cod()}  
  if (training_type==9){letter___audition_cod()}  
  if (training_type==10){first_letter_audition_cod()}  
  if (training_type==11){one_rus_4_eng_cod()}  
  if (training_type==12){one_eng_4_rus_cod()} 
  if (training_type==13){four_rus_audition_cod()}
    $video_.attr('src', src + '?autoplay=1&rel=0&start='+$start+'&end='+$end+'&rel=0');
              // alert(data.success);

              // $(".submit2").text($(".submit2").text()+data.success);

           }

        });



    });

</script>

    @endif                             
 @endguest



<script>

 buttons();
  $(document).keyup(function(e){
  
if (e.which == 9) {$video_.attr('src', src + '?autoplay=1&rel=0&start='+$start+'&end='+$end+'&rel=0');}  
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
   
  $video_.attr('src', src + '?autoplay=1&rel=0&start='+$start+'&end='+$end+'&rel=0');
});




$(document).on('click', '#new_training1', function() {
    $("#new_training1").hide();
    


    $(".over").css("display","block")

   
      number_video=0;
 

      $video_.attr('src', src + '?autoplay=1&rel=0&start='+start_video[number_video]+'&end='+end_video[number_video]+'&rel=0');

    arr_start =[];
    arr_end =[];
    arr_adress =[];
    $getQuantity=0;
      $get_base_course_id=0;
      
              $koef=1;
               video_=1;
               cycle=0;
               row_new=0;
               max_task=0;
              task_new=0;
              try_answer=0;
              show_training=1;
              repeat_training=0;
    try_training_cod();

  select_type_training_()
});
$(".height320").css("display","none")



</script>