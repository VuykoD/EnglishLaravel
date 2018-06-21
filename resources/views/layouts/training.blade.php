@extends('app')
@section('content')
<br>

<div class="costumer">    
<form>
                   <div class="container">
                    <div class="row-fluid">
                    <div class="span2">
                      <center><a href="training?user=@guest none @else{{Auth::user()->id}}@endguest&type=video" class="btn btn-primary btn-large centered_menu_2">из видео</a></center>
                    </div>
                    <div class="span8">
                      <center>  
                 <div class="Game"> 
                    <a class="btn btn-info btn-large centered_menu_2  " id="new_training">
                        Изучить новое

                    </a>
                    
                    <select class="select" id="select_new">
                        <option  hidden>5</option>
                        <option>3</option> <option>4</option> <option>5</option> <option>6</option>
                        <option>7</option> <option>8</option> <option>9</option> <option>10</option>
                        <option>11</option> <option>12</option> 
                      </select>
                    


                     <a class="btn btn-info btn-large centered_menu_2" id="old">Повторить</a>
                     <select class="select" id="select_repeat">
                        <option hidden>10</option>
                        <option>3</option> <option>4</option> <option>5</option> <option>6</option>
                        <option>7</option> <option>8</option> <option>9</option> <option>10</option>
                        <option>11</option> <option>12</option><option>15</option><option>20</option> <option>30</option> 
                      </select>


                      <a class="btn btn-info btn-large centered_menu_2" id="test">Экзамен</a>
                     <select class="select" id="select_test">
                        <option hidden>10</option>
                        <option>3</option> <option>4</option> <option>5</option> <option>6</option>
                        <option>7</option> <option>8</option> <option>9</option> <option>10</option>
                        <option>11</option> <option>12</option> 
                      </select>

                        <span  class = "training">
                        <a class="btn btn-primary btn-large centered_menu_2" id="sound_yes_no" name="sound_yes_no">звукоДанетка</a>
                        </span>
                        <select class="select hidden1" disabled>
                          <option>3</option>
                        </select>
                      
                    

                       </div>
                       </center>
                    </div>
                    <div class="span2">
                        <center>  <a href="training?user=@guest none @else{{Auth::user()->id}}@endguest&type=course" class="btn btn btn-primary btn-large ">из курсов</a>  </center>
                    </div>
                    </div>
                    </div>
                                    
</form>

<div class="container hidden3">
<div class="row-fluid">



<div class="span6">
<div class="list-group list-training">
<h3 class="sidebox-title centered_menu">настройка циклов для слов</h3>


<div class="span10">
<button type="button" class="list-group-item list-group-item-warning margin_l__10_ training" title="Нажмите, чтобы попробовать" id="put_letters_right_written">
1)<img src="images/training/9.png" class="training">
<b>Слово из букв</b>
</button>
</div>

<div class="span10">
<button type="button" class="list-group-item list-group-item-warning margin_l__10_ training" title="Нажмите, чтобы попробовать" id="written_letters_yes_no">
2)<img src="images/training/3.png" class="training">
<b>да/нетка</b>
</button>
</div>

<div class="span10">
<button type="button" class="list-group-item list-group-item-warning margin_l__10_ training" title="Нажмите, чтобы попробовать" id="put_letters_right_audition"> 
3)<img src="images/training/7.png" class="training">
<b>sound + буквы</b>
</button>
</div>

<div class="span10">
<button type="button" class="list-group-item list-group-item-warning margin_l__10_ training" title="Нажмите, чтобы попробовать" id="audition_letters_yes_no"> 
4)<img src="images/training/4.png" class="training">
<b>sound - да/нет</b>
</button>
</div>

<div class="span10 ">
<button type="button" class="list-group-item list-group-item-warning margin_l__10_ training" title="Нажмите, чтобы попробовать" id="letter___written"> 
5)<img src="images/training/8.png" class="training"><span class="size_40 height_55"></span><b>перевод (...)</b>
</button>
</div>

<div class="span10 ">
<button type="button" class="list-group-item list-group-item-warning margin_l__10_ training" title="Нажмите, чтобы попробовать" id="one_rus_4_eng"> 
6)<span class="size_40 height_55"></span><b>рус. - 4 анг.</b>
</button>
</div>

<div class="span10">
    <button type="button" class="list-group-item list-group-item-warning margin_b_2 margin_l__10_ training" title="Нажмите, чтобы попробовать" id="letter___audition">  
7)<img src="images/training/6.png" class="training"><span class="size_40 height_55"></span><b>sound письмо (...)</b>
</button>
</div>    

<div class="span10">
    <button type="button" class="list-group-item list-group-item-warning margin_b_2 margin_l__10_ training" title="Нажмите, чтобы попробовать" id="one_eng_4_rus">    
    8)<img src="images/training/socialmediaicons.png" class="training"><span class="size_40 height_55"> </span><b> анг. - 4 рус.</b>
    </button>
</div>

<div class="span10">
    <button type="button" class="list-group-item list-group-item-warning margin_b_2 margin_l__10_ training" title="Нажмите, чтобы попробовать" id="sound_4_words_rus">  
9)<img src="images/training/2.png" class="training"><span class="size_40 height_55"></span><b> sound - 4 рус.</b>
</button>
</div> 

<div class="span10">
    <button type="button" class="list-group-item list-group-item-warning margin_b_2 margin_l__10_ training" title="Нажмите, чтобы попробовать" id="dictophon_word_"> 
10)<img src="images/training/microphone.png" class="training">
<b>Диктофон(...)</b> 
</button>
</div>    





</div>
</div>



<div class="span6">
<div class="list-group list-training">
<h3 class="sidebox-title centered_menu">настройка для предложений</h3>



<div class="span10">
<button type="button" class="list-group-item list-group-item-warning margin_l__10_ training" title="Нажмите, чтобы попробовать" id="put_words_right_written">
1)<img src="images/training/2_1.png" class="training">
<b>Сложить слова (+0...2) по написаному</b>
</button>
</div>
<div class="span1 border_1"> 
        <label class="checkbox inline"><input type="checkbox" id="Sentence1_1">1 новое</label><br>
        <label class="checkbox inline "><input type="checkbox" id="Sentence23_1">2-6 повт.</label>
 </div>

<div class="span10">
<button type="button" class="list-group-item list-group-item-warning margin_l__10_ training" title="Нажмите, чтобы попробовать" id="written_yes_no">
2)<img src="images/training/3.png" class="training">
<b>да/нетка</b>
</button>
</div>
<div class="span1 border_1"> 
        <label class="checkbox inline"><input type="checkbox" id="Sentence1_2" value="option1" >1 новое</label><br>
        <label class="checkbox inline "><input type="checkbox" id="Sentence23_2" value="option2" >2-6 повт.</label>
 </div>

<div class="span10">
<button type="button" class="list-group-item list-group-item-warning margin_l__10_ training" title="Нажмите, чтобы попробовать" id="put_words_right_audition"> 
3)<img src="images/training/2_1.png" class="training">
<b>Сложить слова (+0...2) по озвученому</b>
</button>
</div>
<div class="span1 border_1"> 
        <label class="checkbox inline"><input type="checkbox" id="Sentence1_3" value="option1" checked disabled>1 новое</label><br>
        <label class="checkbox inline "><input type="checkbox" id="Sentence23_3" value="option2">2-6 повт.</label>  
 </div>

<div class="span10">
<button type="button" class="list-group-item list-group-item-warning margin_l__10_ training" title="Нажмите, чтобы попробовать" id="audition_yes_no"> 
4)<img src="images/training/4.png" class="training">
<b>sound - да/нет</b>
</button>
</div>
<div class="span1 border_1"> 
        <label class="checkbox inline"><input type="checkbox" id="Sentence1_4" value="option1">1 новое</label><br>
        <label class="checkbox inline "><input type="checkbox" id="Sentence23_4" value="option2">2-6 повт.</label>
 </div>


<div class="span10 ">
<button type="button" class="list-group-item list-group-item-warning margin_l__10_ training" title="Нажмите, чтобы попробовать" id="first_letter___written"> 
5)<span class="size_40 height_55"></span><b> Первые буквы (...) по написаному</b>
</button>
</div>
<div class="span1 border_1"> 
        <label class="checkbox inline"><input type="checkbox" id="Sentence1_5" value="option1" >1 новое</label><br>
        <label class="checkbox inline "><input type="checkbox" id="Sentence23_5" value="option2"   checked  disabled>2-6 повт.</label> 
 </div>

<div class="span10 ">
<button type="button" class="list-group-item list-group-item-warning margin_l__10_ training" title="Нажмите, чтобы попробовать" id="first_letter_written"> 
6)<span class="size_40 height_55"></span><b> Первые буквы по написаному</b>
</button>
</div>
<div class="span1 border_1"> 
        <label class="checkbox inline"><input type="checkbox" id="Sentence1_6" value="option1" >1 новое</label><br>
        <label class="checkbox inline "><input type="checkbox" id="Sentence23_6" value="option2">2-6 повт.</label>
 </div>


<div class="span10">
    <button type="button" class="list-group-item list-group-item-warning margin_b_2 margin_l__10_ training" title="Нажмите, чтобы попробовать" id="first_letter___audition">    
    7)<span class="size_40 height_55"> </span><b> Первые буквы (...) по озвученому</b>
    </button>
</div>    
<div class="span1 border_1"> 
        <label class="checkbox inline"><input type="checkbox" id="Sentence1_7" value="option1">1 новое</label><br>
        <label class="checkbox inline "><input type="checkbox" id="Sentence23_7" value="option2">2-6 повт.</label>  
 </div>


<div class="span10">
    <button type="button" class="list-group-item list-group-item-warning margin_b_2 margin_l__10_ training" title="Нажмите, чтобы попробовать" id="first_letter_audition">  
8)<span class="size_40 height_55"></span><b> Первые буквы по озвученому</b>
</button>
</div>    
<div class="span1 border_1"> 
        <label class="checkbox inline"><input type="checkbox" id="Sentence1_8" value="option1" >1 новое</label><br>
        <label class="checkbox inline "><input type="checkbox" id="Sentence23_8" value="option2">2-6 повт.</label> 
         
 </div>


<div class="span10">
    <button type="button" class="list-group-item list-group-item-warning margin_b_2 margin_l__10_ training" title="Нажмите, чтобы попробовать" id="sound_4_rus">  
9)<span class="size_40 height_55"></span><b> Озвучка - 4 русских варианта</b>
</button>
</div>    
<div class="span1 border_1"> 
        <label class="checkbox inline"><input type="checkbox" id="Sentence1_9" value="option1">1 новое</label><br>
        <label class="checkbox inline "><input type="checkbox" id="Sentence23_9" value="option2">2-6 повт.</label> 
         
 </div>



<div class="span10">
    <button type="button" class="list-group-item list-group-item-warning margin_b_2 margin_l__10_ training" title="Нажмите, чтобы попробовать" id="dictophon___"> 
10)<img src="images/training/microphone.png" class="training">
<b>Диктофон(...)</b> 
</button>
</div>    
<div class="span1 border_1"> 
        <label class="checkbox inline"><input type="checkbox" id="Sentence1_10" value="option1" checked disabled>1 новое</label><br>
        <label class="checkbox inline "><input type="checkbox" id="Sentence23_10" value="option2" checked disabled >2-6 повт.</label> 
 </div>
</div>

</div>
</div>
</div>
</div>
<div class="training_hide">
<p align="center" class="try_answer size_20 font_green">
<button class="btn btn-info btn-large height_25  IDontknow1">English</button> <text class="try_answer1"></text>
<button class="btn btn-info btn-large height_25  IDontknow2">English</button> <text class="try_answer2"></text>
<button class="btn btn-info btn-large height_25  IDontknow3">English</button> <text class="try_answer3"></text>
<button class="btn btn-info btn-large height_25  IDontknow4">English</button> <text class="try_answer4"></text>
<button class="btn btn-info btn-large height_25  IDontknow5">English</button> <text class="try_answer5"></text>
<button class="btn btn-info btn-large height_25  IDontknow6">English</button> <text class="try_answer6"></text>
<button class="btn btn-info btn-large height_25  IDontknow7">English</button> <text class="try_answer7"></text>
<button class="btn btn-info btn-large height_25  IDontknow8">English</button> <text class="try_answer8"></text>
<button class="btn btn-info btn-large height_25  IDontknow9">English</button> <text class="try_answer9"></text>
<button class="btn btn-info btn-large height_25  IDontknow10">English</button> <text class="try_answer10"></text>
<button class="btn btn-info btn-large height_25  IDontknow11">English</button> <text class="try_answer11"></text>
<button class="btn btn-info btn-large height_25  IDontknow12">English</button> <text class="try_answer12"></text>



    <br><button class="btn btn-success btn-large goOn">Перейти к обучению</button><br>
</p>

  
<div class="timer_sound_game"  style="display: none;">
  <center>осталось <span id = "time_for_sound_game">60</span> сек </center>
  <center>
  рекорд сайта <span id = "site_record">60</span>/<span id = "user_record">60</span> ваш рекорд
  <meter class="meter3" value="0" max="100"  optimum="1"></meter>
  добавится +<span id = "add_for_sound_game">1</span>/ <span id = "result_for_sound_game">0</span> ваш результат
  </center>
</div>

<div class="height320">
<div class="container">
 <div class="row-fluid progress_">  
  
    <svg viewBox="0 0 70 70" class="svg1">
 <polygon class="polygon_1 fill_white" points="1,12 11,34 17,34 13,12"/>
 <polygon class="polygon_2 fill_white" points="13,12 17,34 26,34 30,12"/>
 <polygon class="polygon_3 fill_white" points="30,12 26,34 32,34 42,12 "/>
 <polygon class="polygon_4 fill_white" points="1,12 11,1 17,1 13,12" />
 <polygon class="polygon_5 fill_white" points="13,12 17,1 26,1 30,12"/>
 <polygon class="polygon_6 fill_white" points="30,12 26,1 32,1 42,12 "/>
</svg>

 
    <meter class="meter" value="0" max="21"  optimum="1" id="meter2"></meter><text id="meter">  0 из 6</text>
   

</div>
<p align="center" class="sound"><img src="images/training/Sound.png" class="training title_sound"></p>
<p align="center" class="rus font_green "></p>
<p align="center" class="input2"><button class="btn btn-secondary btn-large btn_input2"></button></p>
<p align="center" class="input" id="focus"></p>
<p align="center" class="prompt font_green "></p>
<p align="center" class="microphon"><meter class="meter2" value="0" max="100"  optimum="1"></meter><br><textarea   placeholder="Повторите сколько успеете. Наведите мышку" id ="repeat"></textarea></p>
<p align="center" class="prompt2"></p>
<p align="center" class="prompt3"><button class="prompt_button btn btn-info btn-large">Подсказка</button></p>

 @guest
      @else
 @if (Auth::user()->id==1)
<p align="center" class="edit">
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
</div>
<iframe id="video" class="opasity_04" width="1" height="1"  allowfullscreen=""></iframe>


    <link rel="stylesheet" href="css/animate.css">
 
     <script src="js/general-data.js"></script>
     <script src="js/training-phrase.js"></script>
     <script src="js/random_voice.js"></script>
     <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
  arr_English[$number_in_array]=eng_;
  arr_Rus[$number_in_array]=rus_;
  arr_start[$number_in_array]=start_video;
  arr_end[$number_in_array]=end_video;
  $start=start_video;
  $end=end_video;

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
              // alert(data.success);

              // $(".submit2").text($(".submit2").text()+data.success);

           }

        });



    });

</script>

    @endif                             
 @endguest




   <script>
   
       $user_id={{Auth::user()->id}}; 
            
   
      $(function () {
utterance = new SpeechSynthesisUtterance("1");
utterance.volume = 0;
window.speechSynthesis.speak(utterance);

 $(".goOn" ).hide();
 $(".sound" ).hide();
for ( var i=1; i <= 12; i++){ $(".IDontknow"+i ).hide()}
     $(".training_hide" ).css("visibility","visible");

        d = new Date();
        day=d.getDate();
        month=d.getMonth()+1;
        if (day<10) {day="0"+day};
        if (month<10) {month="0"+month};  
       today = d.getFullYear() + '-' + month+ '-' + day  ;

          
          video_=0;
          max_task=0;
          test=0;
          $koef=1;
         $sentense=1
         number_video =0;
         IknowButton=0;
         $false_sent=0;
         $yes_no=0;
         $false_sent1=0;
         try_answer=0;
         $newText2=0
         $el=0
         row_arr_id_base=[]
        row_arr=[];
        row_mistake=[];
    $('#select_new option:selected').text()
 @guest
        arr_English=[];
        arr_Rus=[];
         arr_id=[];
         arr_quantity=[];
         arr_date=[];
         arr_base_course_id=[];
         $sound_type="{{$type}}";
 @else
                        
        arr_English=[@foreach ($my_table as $list)"{{$list->base_course->english}}",@endforeach] 
        arr_Rus=[@foreach ($my_table as $list)'{{$list->base_course->russian}}',@endforeach] 
         arr_id=[@foreach ($my_table as $list)'{{$list['id']}}',@endforeach]  
         arr_quantity=[@foreach ($my_table as $list)'{{$list['quantity']}}',@endforeach]
         arr_date=[@foreach ($my_table as $list)'{{$list['next_date']}}',@endforeach]
         arr_base_course_id=[@foreach ($my_table as $list)'{{$list['base_course_id']}}',@endforeach]
$sound_type="{{$type}}";

 @if ($type=="video") {
  arr_adress=[@foreach ($my_table as $list)"{{$list->youtube->path_youtube}}",@endforeach]
  arr_start=[@foreach ($my_table as $list)"{{$list->base_course->start_}}",@endforeach]
  arr_end=[@foreach ($my_table as $list)"{{$list->base_course->end_}}",@endforeach]
}
@endif;

@endguest
$video_ = $('#video');
//src = $video_.attr('src');

  $.each(arr_English, function(index, value){
        arr_English[index]=value.replace("&#039;", "'");
    });



    $(".height320").css("display","none")
  $(".speech-input, .si-btn" ).css("visibility", 'hidden');
written_yes_no();
written_letters_yes_no();
put_words_right_written();
put_letters_right_written();
audition_letters_yes_no();
audition_yes_no();
put_words_right_audition();
put_letters_right_audition();
first_letter_audition();
first_letter_written();
first_letter___written();
first_letter___audition();
four_rus_audition();
four_rus_words_audition();
dictophon___();
dictophon_word_();
try_training();
one_rus_4_eng();
one_eng_4_rus();
letter___audition();
letter___written();
prompt();
new_training();
old_training() ;
test_training() ;
quantity_new();
quantity_repeat() ;
quantity_test();
quantity_leanrt();
row_is_learned();
row_is_learned_old();
i_know_this();
IDontknow111();
sound();
GoOn_();
buttons();
        });
    </script>
    @endsection