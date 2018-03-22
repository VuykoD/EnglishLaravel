        
            
   
function start() {
utterance = new SpeechSynthesisUtterance("1");
utterance.volume = 0;
window.speechSynthesis.speak(utterance);

 $(".goOn" ).hide();
 $(".sound" ).hide();
for ( var i=1; i <= 12; i++){ $(".IDontknow"+i ).hide()}
     $(".training_hide" ).css("visibility","visible");
    


 if (<?php echo $_SESSION['id_uder']; ?>==2) {$("#Sentence23_4").removeAttr("checked");}


        d = new Date();
        day=d.getDate();
        month=d.getMonth()+1;
        if (day<10) {day="0"+day};
        if (month<10) {month="0"+month};  
       today = d.getFullYear() + '-' + month+ '-' + day  ;
      
          video_=0;
  
         $sentense=1
         number_video =0;
         IknowButton=0;
         $false_sent=0;
         $yes_no=0;
         $false_sent1=0;
         try_answer=0;
         row_arr_id_base=[]
        row_arr=[];
        row_mistake=[];
    $('#select_new option:selected').text()
         arr_id=<?php echo '["'.implode('","', $_SESSION['id']).'"]'; ?>;
         arr_English=<?php echo '["'.implode('","', $_SESSION['english_']).'"]'; ?>;

        arr_Rus=<?php echo "['".implode("','", $_SESSION['russian_'])."']"; ?>;
 
        arr_quantity=<?php echo "['".implode("','", $_SESSION['quantity'])."']"; ?>;
        if (arr_quantity.length>arr_English.length){arr_quantity.length=arr_quantity.length-1}
        arr_date=<?php echo "['".implode("','", $_SESSION['next_date'])."']"; ?>;
       if (arr_date.length>arr_English.length){arr_date.length=arr_date.length-1}


         

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
quantity_new();
quantity_repeat() ;
row_is_learned();
row_is_learned_old();
i_know_this();
IDontknow111();
sound();
GoOn_();
buttons();
        }