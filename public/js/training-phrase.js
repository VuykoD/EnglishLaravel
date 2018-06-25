
function buttons(){
  $(document).keyup(function(e){
    if (e.which == 13) { $(".si-btn").click();}  
    if (e.which == 37) { $("#No").click();} 
    if (e.which == 39) { $("#Yes").click();} 
  });  
}

function select_type_training_(){
  if (number_video>=arr_English.length) {$("#new_training1").show();$(".height320").css("display","none") ;$(".over").css("display","none");return}

  if (arr_English[number_video].indexOf(' ') > 0 ) {$sentense=1} else{$sentense=0}
   $getSentence=arr_English[number_video].toUpperCase();
 $getSentence=$getSentence.replace(/\./g, "");
 $getRus=arr_Rus[number_video].toUpperCase();
 $start=start_video[number_video]
 $end=end_video[number_video]
 $get_base_course_id=arr_base_course_id[number_video]
    //$(".input2").show()
    if ($("#type_training_button").text()=='Сложить слова') {put_words_right_written_cod();}
    if ($("#type_training_button").text()=='Первые буквы (...)') {first_letter___written_cod();}
    if ($("#type_training_button").text()=='Первые буквы') {first_letter_written_cod();}
    if ($("#type_training_button").text()=='3 руссских варианта') {four_rus_audition_cod();}
    if ($("#type_training_button").text()=='Микрофон') {dictophon___cod2();}
    translation_hide()

  }

  function translation_hide()   { 
    if(($("#rus1").prop('checked') == true)){
      $(".rus").hide()
    }else{$(".rus").show()}
    if ($("#type_training_button").text()=='3 руссских варианта'){ $(".rus").show()} 
  }

function meter_()   { 
 if (show_training==0) {
  $("#meter2").val($("#meter2").val()+1)
  $("#meter").text($("#meter2").val()+" из "+$meter_max)

  if ($("meter").val()>$meter_max-max_task) { 
    if (row_mistake[task_new]==1) {$getQuantity=1*$getQuantity} else {$getQuantity=1*$getQuantity+1};
    if ($getQuantity==0) {$getQuantity=1};
    polygon();
    if ($getQuantity==1) {var $polygon_number=".polygon_1"};
    if ($getQuantity==2) {var $polygon_number=".polygon_2"};
    if ($getQuantity==3) {var $polygon_number=".polygon_3"};
    if ($getQuantity==4) {var $polygon_number=".polygon_4"} ;
    if ($getQuantity==5) {var $polygon_number=".polygon_5"}; 
    if ($getQuantity==6) {var $polygon_number=".polygon_6"} ;

    $($polygon_number).css("opacity","0.01");
    $($polygon_number).css("fill","rgb(150,150,250)");
    $($polygon_number).animate({opacity: "1"},500 );
    $($polygon_number).animate({opacity: "0.5"},500 );

  }
}
}

function sound()   {    

  $(".sound").on("click", function () {
    random_voice();  
  });
};

function try_training()   {  

  $(".training").on("click", function () {
    try_training_cod()
  });
};

function try_training_cod()   {        
  $(".costumer").hide();
  $(".height320").css("display","block");
  $(".rus" ).show();
  $(".input" ).show();
               //$(".input2" ).css("opacity","0.01")
               $(".prompt").css("opacity","0.01")
               $(".prompt2" ).css("opacity","1");
               $("input").focus();         
             };
             function hide_training()   {    

               $(".rus" ).hide();
               $(".input" ).hide();
               $(".prompt2" ).empty();
               $(".costumer").show();
               $(".prompt2").children("button:first").remove();
               $(".height320").css("display","none")           
             };

             function clear_table()   {  
              $false_sent=0
              $(".prompt3" ).show();      
              $(".rus" ).empty(); 
              $(".input").empty();
              $(".input2" ).css("opacity","0.01")
              $(".btn_input2" ).text(' ');
              $(".prompt2").empty();
              //$(".prompt2").children("button:first").remove();
              $(".speech-input, .si-btn" ).css("visibility", 'hidden');
              $(".sound" ).hide();
              $(".microphon" ).hide();
              edit_base();
            };

            function edit_base() {

              if ($sound_type=="video") {
                $(".start_video" ).val($start); 
                $(".end_video" ).val($end);
              }

              $(".start_video" ).hide(); 
              $(".end_video" ).hide();
              $(".rus_" ).val($getRus).hide(); 
              $(".eng_" ).val($getSentence).hide();
              $(".arr_base_course_id_" ).val($get_base_course_id).hide();
              $(".edit_button" ).hide();
              $(".edit_password" ).hide();


              $("body").on("dblclick", function () {

                if ($sound_type=="video") {
                  $(".start_video" ).show();
                  $(".end_video" ).show();
                }

                $(".rus_" ).show();
                $(".eng_" ).show();
                $(".edit_button" ).show();
              })
            }



            function prompt()   {
              $(".prompt_button").on("click", function () {
               $mistake=2;
               mistake();
             });
            };            

            function mistake()   {   
             $mistake++
             $("#firstLetter").attr("placeholder","неправильно");
             $("#firstLetter").css("background","rgb(250,250,100)");


             if ($mistake==3) {
              $('#time_game').text(1*$('#time_game').text()-5)
              $mistake=0
              if(try_answer==1) {

                setTimeout(try_answer1, 300);
                
                return;}
                if (repeat_training>=1){row_mistake[task_new]=1; }

                if (try_answer==0) {random_voice()};
                $(".prompt").empty().append('<button class="btn btn-secondary btn-large  height_25 Iknow">'+ $getSentence+'</button>');
                $(".prompt").animate({opacity: "1"},700 );
                $(".prompt").animate({opacity: "0.01"},2300 );
              }
            }

            function random_selelect_sentense()   {
             for (var i = 0; i < 100; i++) {

               randIndex1 = Math.floor(Math.random() * arr_English.length);
               $getSentence= arr_English[randIndex1].toUpperCase();
               $getSentence=$getSentence.replace(/\./g, "");
               $getRus=arr_Rus[randIndex1].toUpperCase();
               $get_base_course_id=arr_base_course_id[randIndex1];
               $number_in_array=i    
               if ($sound_type=="video") {
                $start=arr_start[randIndex1]
                $end=arr_end[randIndex1]
                $adress=arr_adress[randIndex1]

              }
              if ($sentense==1){if (arr_English[randIndex1].indexOf(' ') > 0 )  {break;}} 
              if ($sentense==0){if (arr_English[randIndex1].indexOf(' ') <= 0 )  {break;}}         



            }
          }

          function random_selelect_false_sentense()   {
           for (var i = 0; i < 1000; i++) {
             randIndex1 = Math.floor(Math.random() * arr_English.length);
             $falseSentence= arr_English[randIndex1].toUpperCase().replace(/\./g, "");  
             $falseRus= arr_Rus[randIndex1].toUpperCase().replace(/\./g, "");
             if ($sound_type=="video") {
              $start=arr_start[randIndex1]
              $end=arr_end[randIndex1]
              $adress=arr_adress[randIndex1]
            } 
            $get_base_course_id=arr_base_course_id[randIndex1];
                  //console.log($sentense)
                  if ($sentense==1){
                    if (arr_English[randIndex1].indexOf(' ') > 0 && arr_English[randIndex1].toUpperCase().replace(/\./g, "")!=$getSentence){ break;}}
                    if ($sentense==0){
                     if (arr_English[randIndex1].indexOf(' ') <= 0 && arr_English[randIndex1].toUpperCase().replace(/\./g, "")!=$getSentence){break;}}

                   }

                 }


                 function select_sentense()   {

                   for (var i = row_new; i < 60000; i++) {

                     if ((arr_English[i].indexOf(' ') > 0 )&&(arr_quantity[i]==0)&&($meter_max>0)){$sentense=1;
                       $getSentence= arr_English[i].toUpperCase()
                       $getSentence=$getSentence.replace(/\./g, "");
                       $getRus=arr_Rus[i].toUpperCase();
                       $getQuantity=arr_quantity[i];
                       $get_base_course_id=arr_base_course_id[i];
                       $number_in_array=i
                       if ($sound_type=="video") {
                        $start=arr_start[i]
                        $end=arr_end[i]
                        $adress=arr_adress[i]
                      }
                    // $id_arr=arr_id[i]
                    setTimeout(polygon,1500);
                    row_new=i
                    if  (new_task==1){ 
                     row_arr.push(i+1)
                     row_arr_id_base.push(arr_id[i]*1)
                   }

                      // console.log(row_arr)
                      break;
                    }         
                    if ((arr_English[i].indexOf(' ') == -1 )&&(arr_quantity[i]==0)&&($meter_max>0)){$sentense=0;
                     $getSentence= arr_English[i].toUpperCase()
                     $getSentence=$getSentence.replace(/\./g, "");
                     $getRus=arr_Rus[i].toUpperCase();
                     $getQuantity=arr_quantity[i];
                     $get_base_course_id=arr_base_course_id[i];

                     if ($sound_type=="video") {
                      $start=arr_start[i]
                      $end=arr_end[i]
                      $adress=arr_adress[i]
                    }
                    $number_in_array=i
                     //$id_arr=arr_id[i]
                     setTimeout(polygon,1500);
                     row_new=i
                     if  (new_task==1){ 
                       row_arr.push(i+1)
                       row_arr_id_base.push(arr_id[i]*1)

                     }

                     break;
                   }




                 }
       //console.log($getSentence)      
       //console.log(row_arr)
       //console.log(row_arr2)
       //console.log(arr_id[i])
     }

     function write_in_memory(){

      $getSentence=$getSentence.replace(/\./g, "");
      $getRus=arr_Rus[i].toUpperCase();
      $getQuantity=arr_quantity[i];
      console.log("1")
      if ($sound_type=="video") {
        $start=arr_start[i]
        $end=arr_end[i]
        $adress=arr_adress[i]

      }
      setTimeout(polygon,1500);
      row_new=i
      if  (new_task==1){ 
        row_arr_id_base.push(arr_id[i]*1)
        row_arr.push(i+1)
      }

      break;
    }

    function polygon()   {
      $(".polygon_1").css("fill","none")
      $(".polygon_2").css("fill","none")
      $(".polygon_3").css("fill","none")
      $(".polygon_4").css("fill","none")
      $(".polygon_5").css("fill","none")
      $(".polygon_6").css("fill","none")
      if ($getQuantity>=1 ){$(".polygon_1").css("fill","rgb(150,150,250)")};
      if ($getQuantity>=2 ){$(".polygon_2").css("fill","rgb(150,150,250)")}
        if ($getQuantity>=3 ){$(".polygon_3").css("fill","rgb(150,150,250)")}
          if ($getQuantity>=4 ){$(".polygon_4").css("fill","rgb(150,150,250)")}
            if ($getQuantity>=5 ){$(".polygon_5").css("fill","rgb(150,150,250)");$(".polygon_6").css("fill","rgb(150,150,250)")}
        }



        function select_old_sentense()   {

         for (var i = row_new; i < 60000; i++) {
           if ((arr_English[i].indexOf(' ') > 0 )&&(arr_quantity[i]>=1) && (arr_quantity[i]<=3) && (today>=arr_date[i])&&($meter_max>0)){$sentense=1;
            $getSentence= arr_English[i].toUpperCase();
            $getSentence=$getSentence.replace(/\./g, "");
            $getRus=arr_Rus[i].toUpperCase();
            $getQuantity=arr_quantity[i];
            $get_base_course_id=arr_base_course_id[i];

            if ($sound_type=="video") {
              $start=arr_start[i]
              $end=arr_end[i]
              $adress=arr_adress[i]
            }

            $number_in_array=i
            setTimeout(polygon,1500);
            row_new=i
            if  (new_task==1){ 
             row_arr.push(i+1)
             row_arr_id_base.push(arr_id[i]*1)
             row_mistake.push(0)

           }

           break;
         }
         if ((arr_English[i].indexOf(' ') == -1 )&&(arr_quantity[i]>=1) && (arr_quantity[i]<=3) && (today>=arr_date[i])&&($meter_max>0)){$sentense=0;
          $getSentence= arr_English[i].toUpperCase();
          $getSentence=$getSentence.replace(/\./g, "");
          $getRus=arr_Rus[i].toUpperCase();
          $getQuantity=arr_quantity[i];
          $get_base_course_id=arr_base_course_id[i];
          if ($sound_type=="video") {
            $start=arr_start[i]
            $end=arr_end[i]
            $adress=arr_adress[i]
          }
          $number_in_array=i
          setTimeout(polygon,1500);
          row_new=i
          if  (new_task==1){ 
           row_arr.push(i+1)
           row_arr_id_base.push(arr_id[i]*1)
           row_mistake.push(0)

         }


         break;
       }



     }


   }



   function select_test_sentense()   {

     for (var i = row_new; i < 60000; i++) {
       if ((arr_English[i].indexOf(' ') > 0 )&&(arr_quantity[i]==4)&& (today>=arr_date[i])&&($meter_max>0)){$sentense=1;
        $getSentence= arr_English[i].toUpperCase();
        $getSentence=$getSentence.replace(/\./g, "");
        $getRus=arr_Rus[i].toUpperCase();
        $getQuantity=arr_quantity[i];
        $get_base_course_id=arr_base_course_id[i];
        console.log("4")
        if ($sound_type=="video") {
          console.log("4")
          $start=arr_start[i]
          $end=arr_end[i]
          $adress=arr_adress[i]
        }
        $number_in_array=i
        setTimeout(polygon,1500);
        row_new=i
        if  (new_task==1){ 
         row_arr.push(i+1)
         row_arr_id_base.push(arr_id[i]*1)
         row_mistake.push(0)

       }

                      // console.log(row_arr)
                      break;
                    }
                    if ((arr_English[i].indexOf(' ') == -1 )&&(arr_quantity[i]==4)  && (today>=arr_date[i])&&($meter_max>0)){$sentense=0;
                      $getSentence= arr_English[i].toUpperCase();
                      $getSentence=$getSentence.replace(/\./g, "");
                      $getRus=arr_Rus[i].toUpperCase();
                      $getQuantity=arr_quantity[i];
                      $get_base_course_id=arr_base_course_id[i];
                      if ($sound_type=="video") {
                        $start=arr_start[i]
                        $end=arr_end[i]
                        $adress=arr_adress[i]
                      }
                      $number_in_array=i
                      setTimeout(polygon,1500);
                      row_new=i
                      if  (new_task==1){ 
                       row_arr.push(i+1)
                       row_arr_id_base.push(arr_id[i]*1)
                       row_mistake.push(0)

                     }


                     break;
                   }



                 }


               }






               function quantity_new()   {
                $quantity_new=0

                for (var iii=0; iii<= row_arr.length;iii++){

                  arr_quantity[row_arr[iii]-1]=1
                }


                for (var i = 0; i <= arr_quantity.length; i++) {


                 if (arr_quantity[i]==0){
                  $quantity_new++
                }

              }

              $("#new_training").text("Изучить новое ("+$quantity_new+")");
            }

            function quantity_repeat()   {
              $quantity_repeat=0
              $quantity_repeat_All=0

              for (var i = 0; i <= arr_quantity.length; i++) {


               if ((arr_quantity[i]>=1) && (arr_quantity[i]<=3) && (today>=arr_date[i])){ $quantity_repeat++}
                 if ((arr_quantity[i]>=1) && (arr_quantity[i]<=3)){ $quantity_repeat_All++} 

               }

             $("#old").text("Повторить ("+$quantity_repeat+" из "+$quantity_repeat_All+")");
           }

           function quantity_test()   {
            $quantity_test=0
            $quantity_test_All=0

            for (var i = 0; i <= arr_quantity.length; i++) {


             if ((arr_quantity[i]==4) && (today>=arr_date[i])){
              $quantity_test++
            }
            if ((arr_quantity[i]==4)){
              $quantity_test_All++
            }
          }

          $("#test").text("Экзамен ("+$quantity_test+" из "+$quantity_test_All+")");
        }
        function quantity_leanrt()   {
          $quantity_learnt=0


          for (var i = 0; i <= arr_quantity.length; i++) {


           if ((arr_quantity[i]>=5)){
            $quantity_learnt++
          }

        }

        $("#learnt").text("Изучено ("+$quantity_learnt+")");
      }


      function training()   { 
        $("meter").val(0)
        row_arr=[];
        row_new=0;
        task_new=0;
        new_task=1;
        cycle=1
        training_sentense_1=0;
        training_sentense_2=0;
        training_sentense_3=0;
        training_sentense_4=0;
        training_sentense_5=0;
        training_sentense_6=0;
        training_sentense_7=0;
        training_sentense_8=0;
        training_sentense_9=0;
        training_sentense_10=0;
      }


      function try_answer1()   {

        $(".try_answer" ).show();
        $(".height320").css("display","none")
        show_training=0;
        try_answer=1;
        $getSentence1=[];
        $getRus1=[];
        $start1=[];
        $end1=[];
        $adress1=[];

        $(".costumer").hide();


        for ( var i=1; i <= max_task; i++){
          select_sentense()
          $getSentence1[i]=$getSentence
          $getRus1[i]=$getRus
          if ($sound_type=="video") {
            $start1[i]=$start
            $end1[i]=$end
            $adress1[i]=$adress
          }
          $(".try_answer"+i ).show()
          $(".IDontknow"+i ).show()
          if (first_time==0){
           $(".try_answer"+i ).append('<button class="btn btn-secondary btn-large height_25 Iknow">'+ $getRus+'</button><button class="btn btn-info btn-large height_25 Iknow'+i+'">Знаю</button><br>' );
         }
         row_new++

       }

       first_time=1
       row_new=0

       if (IknowButton==1){$(".IDontknow1").click()} 
        if (IknowButton==2){$(".IDontknow2").click()} 
          if (IknowButton==3){$(".IDontknow3").click()} 
            if (IknowButton==4){$(".IDontknow4").click()}
              if (IknowButton==5){$(".IDontknow5").click()} 
                if (IknowButton==6){$(".IDontknow6").click()} 
                  if (IknowButton==7){$(".IDontknow7").click()} 
                    if (IknowButton==8){$(".IDontknow8").click()}
                      if (IknowButton==9){$(".IDontknow9").click()} 
                        if (IknowButton==10){$(".IDontknow10").click()} 
                          if (IknowButton==11){$(".IDontknow11").click()} 
                            if (IknowButton==12){$(".IDontknow12").click()}


                              IknowButton=0

                            $(".Iknow1").on("click", function () { IknowButton=1; $getSentence=$getSentence1[1];  $getRus=$getRus1[1]; if ($sound_type=="video") {$start=$start1[1];$end=$end1[1];$adress=$adress1[1]};   Iknow();})
                            $(".Iknow2").on("click", function () { IknowButton=2; $getSentence=$getSentence1[2];  $getRus=$getRus1[2]; if ($sound_type=="video") {$start=$start1[2];$end=$end1[2];$adress=$adress1[2]};  Iknow();})
                            $(".Iknow3").on("click", function () { IknowButton=3; $getSentence=$getSentence1[3];  $getRus=$getRus1[3]; if ($sound_type=="video") {$start=$start1[3];$end=$end1[3];$adress=$adress1[3]};  Iknow();})
                            $(".Iknow4").on("click", function () { IknowButton=4; $getSentence=$getSentence1[4];  $getRus=$getRus1[4]; if ($sound_type=="video") {$start=$start1[4];$end=$end1[4];$adress=$adress1[4]};  Iknow();})
                            $(".Iknow5").on("click", function () { IknowButton=5; $getSentence=$getSentence1[5];  $getRus=$getRus1[5]; if ($sound_type=="video") {$start=$start1[5];$end=$end1[5];$adress=$adress1[5]};  Iknow();})
                            $(".Iknow6").on("click", function () { IknowButton=6; $getSentence=$getSentence1[6];  $getRus=$getRus1[6]; if ($sound_type=="video") {$start=$start1[6];$end=$end1[6];$adress=$adress1[6]};  Iknow();})
                            $(".Iknow7").on("click", function () { IknowButton=7; $getSentence=$getSentence1[7];  $getRus=$getRus1[7]; if ($sound_type=="video") {$start=$start1[7];$end=$end1[7];$adress=$adress1[7]};  Iknow();})
                            $(".Iknow8").on("click", function () { IknowButton=8; $getSentence=$getSentence1[8];  $getRus=$getRus1[8]; if ($sound_type=="video") {$start=$start1[8];$end=$end1[8];$adress=$adress1[8]};  Iknow();})
                            $(".Iknow9").on("click", function () { IknowButton=9; $getSentence=$getSentence1[9];  $getRus=$getRus1[9]; if ($sound_type=="video") {$start=$start1[9];$end=$end1[9];$adress=$adress1[9]};  Iknow();})
                            $(".Iknow10").on("click", function () { IknowButton=10; $getSentence=$getSentence1[10];  $getRus=$getRus1[10]; if ($sound_type=="video") {$start=$start1[10];$end=$end1[10];$adress=$adress1[10]};  Iknow();})
                            $(".Iknow11").on("click", function () { IknowButton=11; $getSentence=$getSentence1[11];  $getRus=$getRus1[11]; if ($sound_type=="video") {$start=$start1[11];$end=$end1[11];$adress=$adress1[11]};  Iknow();})
                            $(".Iknow12").on("click", function () { IknowButton=12; $getSentence=$getSentence1[12];  $getRus=$getRus1[12]; if ($sound_type=="video") {$start=$start1[12];$end=$end1[12];$adress=$adress1[12]};  Iknow();})
                          }

                          function GoOn_() {
                            $(".goOn").on("click", function () {
                              $meter_max=(training_sentense_1+training_sentense_2+training_sentense_3+training_sentense_4+training_sentense_5+training_sentense_6+training_sentense_7+training_sentense_8+training_sentense_9+training_sentense_10)*max_task  
                              $("meter").val(0)
                              $("#meter").text($("meter").val()+" из "+$meter_max)
                              $("meter").attr("max", $meter_max)
                              try_answer=0
                              for ( var i=1; i <= 12; i++){$(".try_answer"+i).empty();}
                                $(".try_answer").hide();
                              cycle_for_training();
                            })
                          }

                          function IDontknow111() {

                            $(".IDontknow1").on("click", function () {  $(this).text($getSentence1[1]).removeClass("btn-info").addClass("btn-success");$(".Iknow1").hide();$getSentence=$getSentence1[1];if ($sound_type=="video") {$start=$start1[1];$end=$end1[1];$adress=$adress1[1]};random_voice();})
                            $(".IDontknow2").on("click", function () {  $(this).text($getSentence1[2]).removeClass("btn-info").addClass("btn-success");$(".Iknow2").hide();$getSentence=$getSentence1[2];if ($sound_type=="video") {$start=$start1[2];$end=$end1[2];$adress=$adress1[2]};random_voice();})
                            $(".IDontknow3").on("click", function () {  $(this).text($getSentence1[3]).removeClass("btn-info").addClass("btn-success");$(".Iknow3").hide();$getSentence=$getSentence1[3];if ($sound_type=="video") {$start=$start1[3];$end=$end1[3];$adress=$adress1[3]};random_voice();})
                            $(".IDontknow4").on("click", function () {  $(this).text($getSentence1[4]).removeClass("btn-info").addClass("btn-success");$(".Iknow4").hide();$getSentence=$getSentence1[4];if ($sound_type=="video") {$start=$start1[4];$end=$end1[4];$adress=$adress1[4]};random_voice();})
                            $(".IDontknow5").on("click", function () {  $(this).text($getSentence1[5]).removeClass("btn-info").addClass("btn-success");$(".Iknow5").hide();$getSentence=$getSentence1[5];if ($sound_type=="video") {$start=$start1[5];$end=$end1[5];$adress=$adress1[5]};random_voice();})
                            $(".IDontknow6").on("click", function () {  $(this).text($getSentence1[6]).removeClass("btn-info").addClass("btn-success");$(".Iknow6").hide();$getSentence=$getSentence1[6];if ($sound_type=="video") {$start=$start1[6];$end=$end1[6];$adress=$adress1[6]};random_voice();})
                            $(".IDontknow7").on("click", function () {  $(this).text($getSentence1[7]).removeClass("btn-info").addClass("btn-success");$(".Iknow7").hide();$getSentence=$getSentence1[7];if ($sound_type=="video") {$start=$start1[7];$end=$end1[7];$adress=$adress1[7]};random_voice();})
                            $(".IDontknow8").on("click", function () {  $(this).text($getSentence1[8]).removeClass("btn-info").addClass("btn-success");$(".Iknow8").hide();$getSentence=$getSentence1[8];if ($sound_type=="video") {$start=$start1[8];$end=$end1[8];$adress=$adress1[8]};random_voice();})
                            $(".IDontknow9").on("click", function () {  $(this).text($getSentence1[9]).removeClass("btn-info").addClass("btn-success");$(".Iknow9").hide();$getSentence=$getSentence1[9];if ($sound_type=="video") {$start=$start1[9];$end=$end1[9];$adress=$adress1[9]};random_voice();})
                            $(".IDontknow10").on("click", function () {  $(this).text($getSentence1[10]).removeClass("btn-info").addClass("btn-success");$(".Iknow10").hide();$getSentence=$getSentence1[10];if ($sound_type=="video") {$start=$start1[10];$end=$end1[10];$adress=$adress1[10]};random_voice();})
                            $(".IDontknow11").on("click", function () {  $(this).text($getSentence1[11]).removeClass("btn-info").addClass("btn-success");$(".Iknow11").hide();$getSentence=$getSentence1[11];if ($sound_type=="video") {$start=$start1[11];$end=$end1[11];$adress=$adress1[11]};random_voice();})
                            $(".IDontknow12").on("click", function () {  $(this).text($getSentence1[12]).removeClass("btn-info").addClass("btn-success");$(".Iknow12").hide();$getSentence=$getSentence1[12];if ($sound_type=="video") {$start=$start1[12];$end=$end1[12];$adress=$adress1[12]};random_voice();})
                          }


                          function replaceButton() {
                            for ( var i=2; i <= 11; i++){

                              if (i >number_button ) {

                                var i_1=i-1
                                $(".IDontknow"+i_1).text($(".IDontknow"+i).text());



                              }}
                              for ( var i=1; i <= 12; i++){
                                if ($(".IDontknow"+i).text()!="English") {
                                  $(".IDontknow"+i).removeClass("btn-info").addClass("btn-success");
                                  $(".Iknow"+i).hide();
                                }else{$(".IDontknow"+i).removeClass("btn-success").addClass("btn-info");}
                              }}

                              function Iknow() {
                                $(".try_answer" ).hide();
                                try_training_cod();
                                if ($getSentence.indexOf(' ') > 0 ) {$sentense=1} else{$sentense=0}
                                 if ($sentense==0){letter___written_cod()}
                                   if ($sentense==1){first_letter___written_cod()}
                                 }



                               function new_training()   { 
                                $("#new_training").on("click", function () {
                                  test=0
                                  $koef=2
                                  for ( var i=1; i <= 12; i++){ $(".try_answer"+i ).hide() ;$(".IDontknow"+i ).hide();$(".IDontknow"+i).removeClass("btn-success").addClass("btn-info");$(".IDontknow"+i).text("English")}
                                   training();
                                 $(".goOn" ).show();
                                 $(".progress_").css("opacity","1")
                                 repeat_training=0;

                                 max_task=$('#select_new option:selected').text()

                                 for (var i = 0; i < 60000; i++) {
                                   if ((arr_quantity[i]==0)){
                                     first_row=i
                                     break;
                                   }
                                 }

       //max_task++
       if(($("#Sentence1_1").prop('checked') == true)){training_sentense_1=1;}
       if(($("#Sentence1_2").prop('checked') == true)){training_sentense_2=1;}
       if(($("#Sentence1_3").prop('checked') == true)){training_sentense_3=1;}
       if(($("#Sentence1_4").prop('checked') == true)){training_sentense_4=1;}
       if(($("#Sentence1_5").prop('checked') == true)){training_sentense_5=1;}
       if(($("#Sentence1_6").prop('checked') == true)){training_sentense_6=1;}
       if(($("#Sentence1_7").prop('checked') == true)){training_sentense_7=1;}
       if(($("#Sentence1_8").prop('checked') == true)){training_sentense_8=1;}      
       if(($("#Sentence1_9").prop('checked') == true)){training_sentense_9=1;}
       if(($("#Sentence1_10").prop('checked') == true)){training_sentense_10=1;}



       $meter_max=max_task
       $("#meter").text($("meter").val()+" из "+$meter_max)
       $("meter").attr("max", $meter_max)
       IknowButton=0
       first_time=0
       try_answer1()       

     });
                              }


                              function test_training()   { 
                                $("#test").on("click", function () {
                                  test=1
                                  $koef=1
                                  $(".try_answer" ).hide();
                                  try_answer=0
                                  training();
                                  $(".progress_").css("opacity","1")
                                  repeat_training=2;
                                  row_mistake=[];

                                  max_task=$('#select_test option:selected').text()
                                  for (var i = 0; i < 60000; i++) {
                                   if ((arr_quantity[i]==4) && (today>=arr_date[i])){
                                     first_row=i
                                     break;
                                   }
                                 }
       //max_task++

       training_sentense_test=1



       $meter_max=1*max_task
       $("#meter").text($("meter").val()+" из "+$meter_max)
       $("meter").attr("max", $meter_max)
       cycle_for_test_training();
     });
                              }

                              function old_training()   { 
                                $("#old").on("click", function () {
                                  test=0
                                  $koef=1
                                  $(".try_answer" ).hide();
                                  try_answer=0
                                  training();
                                  $(".progress_").css("opacity","1")
                                  repeat_training=1;
                                  row_mistake=[];

                                  max_task=$('#select_repeat option:selected').text()
                                  for (var i = 0; i < 60000; i++) {
                                   if ((arr_quantity[i]>=1) && (arr_quantity[i]<=3) && (today>=arr_date[i])){
                                     first_row=i
                                     break;
                                   }
                                 }
       //max_task++


       if(($("#Sentence23_1").prop('checked') == true)){training_sentense_1=1;}
       if(($("#Sentence23_2").prop('checked') == true)){training_sentense_2=1;}
       if(($("#Sentence23_3").prop('checked') == true)){training_sentense_3=1;}
       if(($("#Sentence23_4").prop('checked') == true)){training_sentense_4=1;}
       if(($("#Sentence23_5").prop('checked') == true)){training_sentense_5=1;}
       if(($("#Sentence23_6").prop('checked') == true)){training_sentense_6=1;}
       if(($("#Sentence23_7").prop('checked') == true)){training_sentense_7=1;}
       if(($("#Sentence23_8").prop('checked') == true)){training_sentense_8=1;}      
       if(($("#Sentence23_9").prop('checked') == true)){training_sentense_9=1;}
       if(($("#Sentence23_10").prop('checked') == true)){training_sentense_10=1;}



       $meter_max=(training_sentense_1+training_sentense_2+training_sentense_3+training_sentense_4+training_sentense_5+training_sentense_6+training_sentense_7+training_sentense_8+training_sentense_9+training_sentense_10)*max_task
       $("#meter").text($("meter").val()+" из "+$meter_max)
       $("meter").attr("max", $meter_max)
       cycle_for_old_training();
     });
                              }



                              function cycle_for_test_training(){

                               show_training=0; 
                               select_test_sentense() ;


                               if(training_sentense_test==1){
                                try_training_cod();
                                if ($sentense==0){letter___written_cod();return;}
                                if ($sentense==1){first_letter_written_cod();return ;}
                              }


                              row_is_learned_old()
                              quantity_test()
                              quantity_leanrt() 
                              new_task=0
                              setTimeout(hide_training, 1000)

                            }


                            function cycle_for_old_training(){

                             show_training=0; 
                             select_old_sentense() ;
                             if(($("#Sentence23_1").prop('checked') == true) && (training_sentense_1==1)) {try_training_cod(); put_words_right_written_cod();return;}
                             if(($("#Sentence23_2").prop('checked') == true) && (training_sentense_2==1)) {try_training_cod(); written_yes_no_cod();return;}
                             if(($("#Sentence23_3").prop('checked') == true) && (training_sentense_3==1)) {try_training_cod(); put_words_right_audition_cod();return;}
                             if(($("#Sentence23_4").prop('checked') == true) && (training_sentense_4==1)) {try_training_cod(); audition_yes_no_cod();return;}

                             if(($("#Sentence23_5").prop('checked') == true) && (training_sentense_5==1)) {
                               try_training_cod();
                               if ($sentense==0){letter___written_cod();return;}
                               if ($sentense==1){first_letter___written_cod();return;}
                             }

                             if(($("#Sentence23_6").prop('checked') == true) && (training_sentense_6==1)) {
                              try_training_cod();
                              if ($sentense==0){one_rus_4_eng_cod();return;}
                              if ($sentense==1){first_letter_written_cod();return ;}
                            }
                            if(($("#Sentence23_7").prop('checked') == true) && (training_sentense_7==1)) {
                              try_training_cod();
                              if ($sentense==0){letter___audition_cod();return;}
                              if ($sentense==1){ first_letter___audition_cod();return;}
                            }
                            if(($("#Sentence23_8").prop('checked') == true) && (training_sentense_8==1)) {
                              try_training_cod();
                              if ($sentense==0){one_eng_4_rus_cod();return;}
                              if ($sentense==1){ first_letter_audition_cod();return;}
                            }

                            if(($("#Sentence23_9").prop('checked') == true) && (training_sentense_9==1)) {try_training_cod(); four_rus_audition_cod();return;}
                            if(($("#Sentence23_10").prop('checked') == true) && (training_sentense_10==1)) {try_training_cod(); dictophon___cod2();return;}

                            row_is_learned_old()
                            quantity_repeat()
                            quantity_test()
                            quantity_leanrt() 
                            new_task=0
                            setTimeout(hide_training, 1000)

                          }


                          function cycle_for_training(){

                           show_training=0; 
                           select_sentense() ;
                           if(($("#Sentence1_10").prop('checked') == true) && (training_sentense_10==1)) {try_training_cod(); dictophon___cod2();return;}  
                           if(($("#Sentence1_1").prop('checked') == true) && (training_sentense_1==1)) {try_training_cod(); put_words_right_written_cod();return;}
                           if(($("#Sentence1_2").prop('checked') == true) && (training_sentense_2==1)) {try_training_cod(); written_yes_no_cod();return;}
                           if(($("#Sentence1_3").prop('checked') == true) && (training_sentense_3==1)) {try_training_cod(); put_words_right_audition_cod();return;}
                           if(($("#Sentence1_4").prop('checked') == true) && (training_sentense_4==1)) {try_training_cod(); audition_yes_no_cod();return;}

                           if(($("#Sentence1_5").prop('checked') == true) && (training_sentense_5==1)) {
                             try_training_cod();
                             if ($sentense==0){letter___written_cod();return;}
                             if ($sentense==1){first_letter___written_cod();return;}
                           }
                           if(($("#Sentence1_6").prop('checked') == true) && (training_sentense_6==1)) {
                            try_training_cod();
                            if ($sentense==0){one_rus_4_eng_cod();return;}
                            if ($sentense==1){first_letter_written_cod();return ;}
                          }
                          if(($("#Sentence1_7").prop('checked') == true) && (training_sentense_7==1)) {
                            try_training_cod();
                            if ($sentense==0){letter___audition_cod();return;}
                            if ($sentense==1){ first_letter___audition_cod();return;}
                          }
                          if(($("#Sentence1_8").prop('checked') == true) && (training_sentense_8==1)) {
                           try_training_cod();
                           if ($sentense==0){letter___audition_cod();return;}
                           if ($sentense==1){ first_letter___audition_cod();return;}
                         }

                         if(($("#Sentence1_9").prop('checked') == true) && (training_sentense_9==1)) {try_training_cod(); four_rus_audition_cod();return;}
                         if(($("#Sentence1_10").prop('checked') == true) && (training_sentense_10==1)) {try_training_cod(); dictophon___cod2();return;}






                         row_is_learned()
                         quantity_new()
                         quantity_repeat()
                         quantity_test()
                         new_task=0
                         setTimeout(hide_training, 1000)
                       }


                       function show_training1()   {     
                         $(".progress_").css("opacity","0.01")
                         $getQuantity=0
                         cycle=0
                         row_new=0
                         max_task=0
                         task_new=0
                         show_training=1;
                         repeat_training=0;
                         random_selelect_sentense();
                       }

                       function put_words_right_written()   {        
                        $("#put_words_right_written").on("click", function () {
                          $sentense=1
                          show_training1() 
                          put_words_right_written_cod() 
                        });
                      };
                      function put_letters_right_written()   {        
                        $("#put_letters_right_written").on("click", function () {
                          $sentense=0
                          show_training1() 
                          put_words_right_written_cod() 
                        });
                      };


                      function put_words_right_written_cod()   {

                       training_type=1
                       clear_table()   
                       $el=0;
                       $mistake=0;


                       $(".rus" ).append('<button class="btn btn-info btn-large">'+ $getRus+'</button>')

                // $(".rus" ).show(); 
                
                if ($sentense==1) {var $newText3=   $getSentence.split(" ");
              }else{
                var $newText3=   $getSentence.split("");
              }

              var $RightLenght=$newText3.length
              //иногда добавлять левое слово из базы
              var randIndex = Math.floor(Math.random() * 4);
              if (randIndex==2) {
               if ($sentense==0) {$newText3.push(arr_false_letters[Math.floor(Math.random() * arr_false_letters.length)].toUpperCase())  }            
                 if ($sentense==1) {$newText3.push(arr_false_words[Math.floor(Math.random() * arr_false_words.length)].toUpperCase())}
               }; 
             if (randIndex==3) {
              if ($sentense==0) {$newText3.push(arr_false_letters[Math.floor(Math.random() * arr_false_letters.length)].toUpperCase())  }            
               if ($sentense==1) {$newText3.push(arr_false_words[Math.floor(Math.random() * arr_false_words.length)].toUpperCase())}
                if ($sentense==0) {$newText3.push(arr_false_letters[Math.floor(Math.random() * arr_false_letters.length)].toUpperCase())}            
                 if ($sentense==1) {$newText3.push(arr_false_words[Math.floor(Math.random() * arr_false_words.length)].toUpperCase())}
               };      

                    $newText3 = $newText3.sort(function(a, b) { return Math.random() - 0.5; });//перетасовка массива


                    if ($sentense==1) {$newText2=$getSentence.split(" ")}else{$newText2=$getSentence.split("")}

                      jQuery.each($newText3, function(i, value) {
                        var value1=value.replace('?','').replace("'",'').replace(',','').replace('(','').replace(')','')

                        $(".input" ).append( '<button class="press btn btn-info size_20 btn_white" id='+ value1+'>'+ value+'</button>' );

                      });


                    addClass_animated()
                    setTimeout(removeClass_animated,500)

                    $(".press").on("click", function () {

                     var word=$(this).text();


                     if ($newText2[$el]==word) {

                       $(this).remove();
                       $el++;
                       $(".input2" ).css("opacity","1")
                       if ($sentense==1) {$(".btn_input2" ).text($(".btn_input2" ).text()+word+' ' )}else{$(".btn_input2" ).append($(".btn_input2" ).text($(".btn_input2" ).text()+ word))}

                        if ($el==$RightLenght) {
                          $('#time_game').text(1*$('#time_game').text()+25*$koef)

                          meter_()
                          if (video_==1) { number_video++;if (number_video<arr_English.length) {$video_.attr('src', src + '?autoplay=1&rel=0&start='+start_video[number_video]+'&end='+end_video[number_video]+'&rel=0');} setTimeout(select_type_training_, 1000);  return;}
                          if (cycle==0){random_voice();setTimeout(hide_training, 1300);return;}

                          if (task_new>=max_task-1){   show_training=1  }
                            if(show_training==1){

                              row_new=first_row
                              console.log(row_new)

                              random_voice()
                              task_new=0;
                              training_sentense_1=0;
                              training_word_1=0;
                              if (cycle==1){
                                if  (repeat_training==0){ setTimeout(cycle_for_training,2000) ;} else{setTimeout(cycle_for_old_training,2000) ;} }

                                return;

                              }

                              if(show_training==0){
                                task_new++

                                random_voice();                
                                row_new++
                                console.log(row_new)
                                if  (repeat_training==0){ select_sentense() ;} else{select_old_sentense();}

                                setTimeout(put_words_right_written_cod,1500);
                              }



                            }; 
                          }else{

                            $(this).addClass('animated jello')
                            setTimeout(removeClass_animated,500)
                            mistake()
                          };
                        });
                  }

                  function addClass_animated()   {
  //polygon();
  $(".height320").addClass('animated fadeIn')
}

function removeClass_animated()   {
  $(".btn_white").removeClass('animated jello')
  $(".height320").removeClass('animated fadeIn')
}



function written_yes_no()   {        
  $("#written_yes_no").on("click", function () {
    $sentense=1
    show_training1() 
    written_yes_no_cod() 
  });
};

function written_letters_yes_no()   {        
  $("#written_letters_yes_no").on("click", function () {
    $sentense=0
    show_training1() 
    written_yes_no_cod() 
  });
};


function written_yes_no_cod()   { 

  training_type=2
  clear_table()
              //$(".input2" ).css("opacity","1")
              //$(".input2" ).css("opacity","1")
              var $el=0;
              $mistake=0;
              

              var randIndex = Math.floor(Math.random() * 2);


              $(".rus" ).append('<button class="btn btn-info btn-large">'+ $getRus+'</button>')
              if ($getSentence.indexOf(' ') > 0 ) {$sentense=1} else{$sentense=0}

                if (randIndex==1) { $(".btn_input2" ).text($getSentence)}else{$false_sent=1;random_selelect_false_sentense();$(".btn_input2" ).text($falseSentence)}
              $(".input2").css("opacity","0.99")
              
              $(".prompt3" ).hide();
              $(".prompt2" ).empty().append('<button class="prompt_button btn btn-info btn-large" id="No">&lArr; Нет</button> <button class="prompt_button btn btn-info btn-large" id="Yes">Да &rArr;</button>')

              $(".input2" ).css("opacity","1");

              $(".height320").addClass('animated fadeIn')
              setTimeout(removeClass_animated,300)

              $("#No").on("click", function () {



                if (randIndex==0){

                  meter_();

           $yes_no=1; $(this).removeClass("btn-info").addClass("btn-success"); $('#time_game').text(1*$('#time_game').text()+25*$koef) //random_voice(); $falseSentence1= 'right'; $falseSentence1= 'right'; random_voice()
           if (video_==1) { number_video++;if (number_video<arr_English.length) {$video_.attr('src', src + '?autoplay=1&rel=0&start='+start_video[number_video]+'&end='+end_video[number_video]+'&rel=0');} setTimeout(select_type_training_, 1000);  return;}  
           if (cycle==0){setTimeout(hide_training, 500);return;}
           if (task_new>=max_task-1){   show_training=1  }
            if(show_training==1){
              row_new=first_row;
              task_new=0;
              if ($sentense==0) {training_word_2=0;}
              if ($sentense==1) {training_sentense_2=0;}
              if (cycle==1){if  (repeat_training==0){ setTimeout(cycle_for_training,1500) ;} else{setTimeout(cycle_for_old_training,1500) ;} }


              return;

            }

            if(show_training==0){
              task_new++              
              row_new++
              if  (repeat_training==0){ select_sentense() ;} else{select_old_sentense();}
              written_yes_no_cod();
            }


          }else{
           $yes_no=1; $(this).removeClass("btn-info").addClass("btn-warning");  $mistake++;mistake()


         };


       });

              $("#Yes").on("click", function () {

                if (randIndex==1){
                  meter_();

            $yes_no=1; $false_sent=0; $(this).removeClass("btn-info").addClass("btn-success");  $('#time_game').text(1*$('#time_game').text()+25*$koef) //random_voice(); $falseSentence1= 'right';
            if (video_==1) { number_video++;if (number_video<arr_English.length) {$video_.attr('src', src + '?autoplay=1&rel=0&start='+start_video[number_video]+'&end='+end_video[number_video]+'&rel=0');} setTimeout(select_type_training_, 1000);  return;}
            if (cycle==0){setTimeout(hide_training, 500);return;}
            if (task_new>=max_task-1){   show_training=1}
              if(show_training==1){
                row_new=first_row;
                task_new=0;
                training_sentense_2=0;
                if (cycle==1){if  (repeat_training==0){ setTimeout(cycle_for_training,1500) ;} else{setTimeout(cycle_for_old_training,1500) ;} }
                
                return;

              }

              if(show_training==0){
                task_new++

                row_new++
                if  (repeat_training==0){ select_sentense() ;} else{select_old_sentense();}
                written_yes_no_cod();
              }

            }else{
             $yes_no=1; $(this).removeClass("btn-info").addClass("btn-warning");  $mistake++;mistake()

           };


         });

            }



            function put_words_right_audition()   {        
              $("#put_words_right_audition").on("click", function () {
                $sentense=1
                show_training1() ;
                put_words_right_audition_cod() ;
              });
            };



            function put_letters_right_audition()   {        
              $("#put_letters_right_audition").on("click", function () {
                $sentense=0
                show_training1() ;
                put_words_right_audition_cod() ;
              });
            };



            function put_words_right_audition_cod()   { 

              training_type=3  
              clear_table()
              $(".sound" ).show();
              $(".rus" ).append('<button class="btn btn-info btn-large">'+ $getRus+'</button>')

              $el=0;
              $mistake=0;
              random_voice();
              if ($sentense==1) {var $newText3=   $getSentence.split(" ");
            }else{
              var $newText3=   $getSentence.split("");
            }

            var $RightLenght=$newText3.length
              //иногда добавлять левое слово из базы
              var randIndex = Math.floor(Math.random() * 4);
              if (randIndex==2) {
               if ($sentense==0) {$newText3.push(arr_false_letters[Math.floor(Math.random() * arr_false_letters.length)].toUpperCase())  }            
                 if ($sentense==1) {$newText3.push(arr_false_words[Math.floor(Math.random() * arr_false_words.length)].toUpperCase())}
               }; 
             if (randIndex==3) {
              if ($sentense==0) {$newText3.push(arr_false_letters[Math.floor(Math.random() * arr_false_letters.length)].toUpperCase())  }            
               if ($sentense==1) {$newText3.push(arr_false_words[Math.floor(Math.random() * arr_false_words.length)].toUpperCase())}
                if ($sentense==0) {$newText3.push(arr_false_letters[Math.floor(Math.random() * arr_false_letters.length)].toUpperCase())}            
                 if ($sentense==1) {$newText3.push(arr_false_words[Math.floor(Math.random() * arr_false_words.length)].toUpperCase())}
               };      

                    $newText3 = $newText3.sort(function(a, b) { return Math.random() - 0.5; });//перетасовка массива


                    if ($sentense==1) { $newText2=$getSentence.split(" ")}else{ $newText2=$getSentence.split("")}
               //$(".input" ).children().remove();
               //$(".input2" ).empty();
               jQuery.each($newText3, function(i, value) {
                var value1=value.replace('?','').replace("'",'').replace(',','').replace('(','').replace(')','')
                $(".input" ).append( '<button class="press btn btn-info size_20 btn_white"  id='+ value1+'>'+ value+'</button>' );
              });
               
               $(".height320").addClass('animated fadeIn')
               setTimeout(removeClass_animated,500)

               $(".press").on("click", function () {

                 var word=$(this).text();

                 if ($newText2[$el]==word) {

                   $(this).remove();
                   $el++;
                   $(".input2" ).css("opacity","1")
                   if ($sentense==1) {$(".btn_input2" ).text($(".btn_input2" ).text()+word+' ' )}else{$(".btn_input2" ).append($(".btn_input2" ).text($(".btn_input2" ).text()+ word))}
                    if ($el==$RightLenght) {
                     $('#time_game').text(1*$('#time_game').text()+25*$koef)
                     meter_();

                 //$(".rus" ).append('<button class="btn btn-secondary btn-large">'+ $getRus+'</button>');
                 if (cycle==0){setTimeout(hide_training, 500);return;} 
                 if (task_new>=max_task-1){   show_training=1  }


                  if(show_training==1){
                    row_new=first_row;
                    task_new=0;
                    training_sentense_3=0;
                    if (cycle==1){if  (repeat_training==0){ setTimeout(cycle_for_training,1500) ;} else{setTimeout(cycle_for_old_training,1500) ;} }

                    return;
                  }

                  if(show_training==0){
                    task_new++
                    row_new++
                    if  (repeat_training==0){ select_sentense() ;} else{select_old_sentense();}


                    setTimeout(put_words_right_audition_cod, 1500);


                  }
                }; 
              }else{
               $(this).addClass('animated jello')
               setTimeout(removeClass_animated,500)
               mistake()
             };
           });
             };

             function audition_yes_no()   {        
              $("#audition_yes_no, #sound_yes_no").on("click", function () {
                $game=$(this).attr('name');

                if ($game=="sound_yes_no"){
                  sound_yes_no_game();
                }
                $sentense=1
                show_training1() 

                audition_yes_no_cod() 
              });
            };

            function timer_sound_game() {

              MyIntervalID =  setInterval (function(){
                $myTimer=$myTimer+100;
                $(".meter3").val($myTimer) 
                if ($myTimer>=$Time_sound_game){
                  clearInterval(MyIntervalID);
                  clearInterval(timer_60_sec);
                }
              }, 100);

              timer_60_sec =  setInterval (function(){

                $("#time_for_sound_game").text($sec_left--);

              }, 1000);
            }

            function sound_yes_no_game()   { 

              $Time_sound_game=60000;

              leader_sound_game();

              $(".meter3").val(0);
              $("#time_for_sound_game").text(60);
              $(".timer_sound_game").css("display","block");
              $(".timer_sound_game").show();
              $(".meter3").attr('max',$Time_sound_game);

              $myTimer=0;
              timer_sound_game();

              setTimeout(function(){

                if ($result_sound_game>$user_record){
                  $user_record=$result_sound_game;
                  insert_statistics_sound_game();
                }

                $game="";
                hide_training();
                $(".timer_sound_game").css("display","none");
              }, $Time_sound_game);

              $add_sound_game=$Time_sound_game/1000;
              $result_sound_game=0;
              $sec_left=60;
              $add_sound_game=1;
              print_result_for_sound_game();


            }

            function right_answer_sound_yes_no_game()   {
              $result_sound_game=$result_sound_game+$add_sound_game;
              $add_sound_game++;
              print_result_for_sound_game();
              random_selelect_sentense();
              setTimeout(audition_yes_no_cod, 500);
            }

            function false_answer_sound_yes_no_game()   {
              $add_sound_game=0;
              print_result_for_sound_game();
            }

            function print_result_for_sound_game(){
              $("#result_for_sound_game").text($result_sound_game);
              $("#add_for_sound_game").text($add_sound_game);
            }

            function audition_letters_yes_no()   {        
              $("#audition_letters_yes_no").on("click", function () {
                $sentense=0
                show_training1() 
                audition_yes_no_cod() 
              });
            };



            function audition_yes_no_cod()   { 

              training_type=4
              clear_table()

              $(".sound" ).show();

              var $el=0;
              $mistake=0;



              $(".rus" ).append('<button class="btn btn-info btn-large">'+ $getRus+'</button>')
              var randIndex = Math.floor(Math.random() * 2);


              if ($getSentence.indexOf(' ') > 0 ) {$sentense=1} else{$sentense=0}
                if (randIndex==1) {$false_sent=1;random_selelect_false_sentense()}
              random_voice()
              $(".prompt3" ).hide();

              $(".prompt2" ).empty().append('<button class="prompt_button btn btn-info btn-large" id="No">&lArr; Нет</button> <button class="prompt_button btn btn-info btn-large" id="Yes">Да &rArr;</button>')

              $(".prompt2" ).css("opacity","1");

              $(".height320").addClass('animated fadeIn')
              setTimeout(removeClass_animated,300)

              $("#No").on("click", function () {



                if ($false_sent==1){
                  meter_();
          $yes_no=1;  $yes_no=0; $false_sent=0;$(this).removeClass("btn-info").addClass("btn-success");  $('#time_game').text(1*$('#time_game').text()+25*$koef)//random_voice(); $falseSentence1= 'right';

          if ($game=="sound_yes_no"){right_answer_sound_yes_no_game();return;}

          if (cycle==0){setTimeout(hide_training, 500);return;}
          if (task_new>=max_task-1){   show_training=1  }
            if(show_training==1){
              row_new=first_row
              task_new=0;
              training_sentense_4=0;
              if (cycle==1){;if  (repeat_training==0){ setTimeout(cycle_for_training,1500) ;} else{setTimeout(cycle_for_old_training,1500) ;} }
              return;
            }
            if(show_training==0){

              task_new++              
              row_new++
              if  (repeat_training==0){ select_sentense() ;} else{select_old_sentense();}

              setTimeout(audition_yes_no_cod,500)
            }
          }else{
              $yes_no=1; $(this).removeClass("btn-info").addClass("btn-warning");  $mistake++;mistake() //$falseSentence1= 'no';
              if ($game=="sound_yes_no"){false_answer_sound_yes_no_game();return;}
            };
          });
              $("#Yes").on("click", function () {       
                if ($false_sent==0){
                  meter_();
           $yes_no=1; $yes_no=0;$(this).removeClass("btn-info").addClass("btn-success");  $('#time_game').text(1*$('#time_game').text()+25*$koef)// random_voice(); $falseSentence1= 'right'
           if ($game=="sound_yes_no"){right_answer_sound_yes_no_game();return;}
           if (cycle==0){setTimeout(hide_training, 500);return;}
           if (task_new>=max_task-1){   show_training=1  }
            if(show_training==1){
              row_new=first_row;
              task_new=0;
              training_sentense_4=0;
              if (cycle==1){if  (repeat_training==0){ setTimeout(cycle_for_training,1500) ;} else{setTimeout(cycle_for_old_training,1500) ;} }
              return;
            }
            if(show_training==0){
              task_new++              
              row_new++
              if  (repeat_training==0){ select_sentense() ;} else{select_old_sentense();}
              setTimeout(audition_yes_no_cod,500)
            }
          }else{
               $yes_no=1; $(this).removeClass("btn-info").addClass("btn-warning");  $mistake++;mistake()//$falseSentence1= 'no';
               if ($game=="sound_yes_no"){false_answer_sound_yes_no_game();return;}
             };
           });
            }


            function letter___written()   {        
              $("#letter___written").on("click", function () {
                $sentense=0
                show_training1() 
                letter___written_cod() ;
              });
            };


            function letter___written_cod()   { 

             training_type=5
             clear_table()
             edit_base()
             var $el=0;
             $mistake=0;
             $(".rus" ).append('<button class="btn btn-info btn-large">'+ $getRus+'</button>')

             var $RightLenght=$getSentence.length;

             var $newText3=$getSentence.replace(/[a-zA-Z]/g,".")


             $(".prompt2" ).append( '<button class="press btn_green">'+ $newText3+'</button>' );


             $(".prompt2" ).css("opacity","1");

             $(".btn_input2" ).text(' ')
             $(".input" ).append('<textarea class="press" id="firstLetter" value="" placeholder="напишите первую букву слова"></textarea>' );


             $(".height320").addClass('animated fadeIn')
             setTimeout(removeClass_animated,500)
             $("#firstLetter").focus();

             $(".press").on('input', function () {

               letter=$(this).val().toUpperCase();
               changeLan();
               if ($getSentence.substr($el, 1)=="(") {var firstLetter_=$getSentence.substr($el+1, 1)}else{var firstLetter_=$getSentence.substr($el, 1)}
                //console.log(firstLetter_)
              if (firstLetter_==letter) {
                $("#firstLetter").attr("placeholder","молодец");
                $("#firstLetter").css("background","white");
                $(".input2" ).css("opacity","1")
                $(".btn_input2" ).text($(".btn_input2" ).text()+letter )
                $(".prompt2").children("button:first").remove();
                $("#firstLetter").val("");
                $el++;
                if ($el==$RightLenght) {
                 $('#time_game').text(1*$('#time_game').text()+25*$koef)
                 if(try_answer!=1){meter_();}
                 $(".prompt2" ).append( '<button class="press btn_green">1</button>' ).css("opacity","0.01");
                 if (video_==1) { number_video++;if (number_video<arr_English.length) {$video_.attr('src', src + '?autoplay=1&rel=0&start='+start_video[number_video]+'&end='+end_video[number_video]+'&rel=0');} setTimeout(select_type_training_, 1000);  return;}
                 if (cycle==0){random_voice();setTimeout(hide_training, 1300);return;}
                 if (task_new>=max_task-1){   show_training=1  }          
                  if(show_training==1){
                    row_new=first_row;
                    task_new=0;
                    training_sentense_5=0;
                    training_sentense_test=0;
                    random_voice();
                    if (cycle==1){
                      if  (repeat_training==0){setTimeout(cycle_for_training,1500) ;}
                      if  (repeat_training==1){setTimeout(cycle_for_old_training,1500) ;}
                      if  (repeat_training==2){setTimeout(cycle_for_test_training,1500) ;}
                    }
                    return;
                  }
                  if(try_answer==1) {

                    i_know_this();
                    first_time=0;
                    number_button=IknowButton
                    IknowButton=0;
                    $getQuantity=3;
                    meter_();
                    for ( var i=1; i <= 12; i++){ $(".try_answer"+i ).empty() }
                      random_voice();
                    setTimeout(try_answer1, 1500);
                    setTimeout(replaceButton, 1500);
                    return;}
                    if(show_training==0){
                      task_new++    
                      row_new++
                      random_voice(); 
                      if  (repeat_training==0){ select_sentense() ;}
                      if  (repeat_training==1){select_old_sentense();}
                      if  (repeat_training==2){select_test_sentense();}



                      if ($sentense==0){setTimeout(letter___written_cod, 1500);}  
                      if (($sentense==1)&&(test==0)){setTimeout(first_letter___written_cod, 1500);} 
                      if (($sentense==1)&&(test==1)){setTimeout(first_letter_written_cod, 1500);}           
                    }
                  };
                }else{
                 $("#firstLetter").val("");
               //$(".input2").children("button").remove();
               for(var i = $el; i < $getSentence.length; i++) 
               {
                str_v=$getSentence.replace(/[a-zA-Z]/g,"&#8226");
                $(".input3" ).append( '<button class="btn_white">'+ str_v+' </button>' );
              } 
              mistake();
            };
          });
           };

           function first_letter___written()   {        
            $("#first_letter___written").on("click", function () {
              $sentense=1
              show_training1() 
              first_letter___written_cod() ;

            });
          };


          function first_letter___written_cod()   { 

           training_type=6 
           clear_table()

           var $el=0;
           $mistake=0;
           $(".rus" ).append('<button class="btn btn-info btn-large">'+ $getRus+'</button>')

           var $newText2=   $getSentence.split(" ");
           var $RightLenght=$newText2.length;

           var $newText3=$getSentence.replace(/[a-zA-Z]/g,".")
           var $newText3=  $newText3.split(" ");
           jQuery.each($newText3, function(i, value) {

             $(".prompt2" ).append( '<button class="press btn_green">'+ value+'</button>' );
           });

           $(".prompt2" ).css("opacity","1");

           $(".input" ).append('<textarea class="press" id="firstLetter" value="" placeholder="напишите первую букву слова"></textarea>' );


           $(".height320").addClass('animated fadeIn')
           setTimeout(removeClass_animated,500)
           $("#firstLetter").focus();

           $(".press").on('input', function () {

             letter=$(this).val().toUpperCase();
             changeLan();
             if ($newText2[$el].substr(0, 1)=="(") {var firstLetter_=$newText2[$el].substr(1, 1)}else{var firstLetter_=$newText2[$el].substr(0, 1)}
                //console.log(firstLetter_)
              if (firstLetter_==letter) {
                $("#firstLetter").attr("placeholder","молодец");
                $("#firstLetter").css("background","white");
                $(".input2" ).css("opacity","1")
                $(".btn_input2" ).text($(".btn_input2" ).text()+$newText2[$el]+' ' );
                $(".prompt2").children("button:first").remove();
                $("#firstLetter").val("");
                $el++;
                if ($el==$RightLenght) {
                 $('#time_game').text(1*$('#time_game').text()+25*$koef)
                 if(try_answer!=1){meter_();}

                 $(".prompt2" ).append( '<button class="press btn_green">1</button>' ).css("opacity","0.01");
                 if (video_==1) { number_video++;if (number_video<arr_English.length) {$video_.attr('src', src + '?autoplay=1&rel=0&start='+start_video[number_video]+'&end='+end_video[number_video]+'&rel=0');} setTimeout(select_type_training_, 1000);  return;}
                 if (cycle==0){random_voice();setTimeout(hide_training, 1300);return;}

                 if (task_new>=max_task-1){   show_training=1  }          

                  if(show_training==1){
                    row_new=first_row;
                    task_new=0;
                    training_sentense_5=0;
                    random_voice();


                    if (cycle==1){if  (repeat_training==0){ setTimeout(cycle_for_training,1500) ;} else{setTimeout(cycle_for_old_training,1500) ;} }

                    return;
                  }
                  if(try_answer==1) {

                    i_know_this();
                    first_time=0;
                    number_button=IknowButton
                    IknowButton=0;
                    $getQuantity=3;
                    meter_();
                    for ( var i=1; i <= 12; i++){ $(".try_answer"+i ).empty() }
                      random_voice();
                    setTimeout(try_answer1, 1500);
                    setTimeout(replaceButton, 1500);
                    return;}
                    if(show_training==0){
                      task_new++    
                      row_new++
                      random_voice(); 
                      if  (repeat_training==0){ select_sentense() ;} else{select_old_sentense();}   
                      if ($sentense==0){setTimeout(letter___written_cod, 1500);}  
                      if ($sentense==1){setTimeout(first_letter___written_cod, 1500);}            
                    }

                  };
                }else{
                 $("#firstLetter").val("");
               //$(".input2").children("button").remove();
               for(var i = $el; i < $newText2.length; i++) 
               {
                str_v=$newText2[i].replace(/[a-zA-Z]/g,"&#8226");
                $(".input3" ).append( '<button class="btn_white">'+ str_v+' </button>' );
              } 
              mistake();
            };
          });
         };

         function first_letter_written()   {        
          $("#first_letter_written").on("click", function () {
            $sentense=1
            show_training1() 
            first_letter_written_cod() ;
          });
        };

        function first_letter_written_cod()   {  

          training_type=7
          clear_table()
          var $el=0;
          $mistake=0;
          $(".rus" ).append('<button class="btn btn-info btn-large">'+ $getRus+'</button>')

          var $newText2=   $getSentence.split(" ");
          var $RightLenght=$newText2.length;

          var $newText3=$getSentence.replace(/[a-zA-Z]/g,".")
          var $newText3=  $newText3.split(" ");


          $(".btn_input2" ).text(' ' )
          $(".input" ).append('<textarea class="press" id="firstLetter" value="" placeholder="напишите первую букву слова"></textarea>' );

          $(".height320").addClass('animated fadeIn')
          setTimeout(removeClass_animated,500)

          $("#firstLetter").focus();

          $(".press").on('input', function () {

           letter=$(this).val().toUpperCase();
           changeLan();
           if ($newText2[$el].substr(0, 1)==letter) {
            $("#firstLetter").attr("placeholder","молодец");
            $("#firstLetter").css("background","white");
            $(".input2" ).css("opacity","1")
            $(".btn_input2" ).text($(".btn_input2" ).text()+$newText2[$el]+' ' )

            $("#firstLetter").val("");
            $el++;
            if ($el==$RightLenght) {
             $('#time_game').text(1*$('#time_game').text()+25*$koef)
             meter_();
             if (video_==1) { number_video++;if (number_video<arr_English.length) {$video_.attr('src', src + '?autoplay=1&rel=0&start='+start_video[number_video]+'&end='+end_video[number_video]+'&rel=0');} setTimeout(select_type_training_, 1000);  return;}
             if (cycle==0){random_voice();setTimeout(hide_training, 1300);return;}
             if (task_new>=max_task-1){   show_training=1  }          

              if(show_training==1){
                row_new=first_row; task_new=0;
                training_sentense_6=0;
                training_sentense_test=0;
                random_voice();
                if (cycle==1){
                  if  (repeat_training==0){ setTimeout(cycle_for_training,1500) ;} 
                  if  (repeat_training==1){setTimeout(cycle_for_old_training,1500) ;}
                  if  (repeat_training==2){setTimeout(cycle_for_test_training,1500) ;}
                }

                return;
              }

              if(show_training==0){
                task_new++    
                row_new++
                random_voice(); 
                if  (repeat_training==0){ select_sentense() ;}
                if  (repeat_training==1){select_old_sentense();}
                if  (repeat_training==2){select_test_sentense();}
                 //$(".input2" ).empty();    
                 if (($sentense==0)&&(test==0)){setTimeout(one_rus_4_eng_cod, 300);} 
                 if (($sentense==0)&&(test==1)){setTimeout(letter___written_cod, 300);} 
                 if ($sentense==1){setTimeout(first_letter_written_cod, 1500);}   




                 if ($sentense==0){setTimeout(letter___written_cod, 1500);}  
                 if (($sentense==1)&&(test==0)){setTimeout(first_letter___written_cod, 1500);} 
                 if (($sentense==1)&&(test==1)){setTimeout(first_letter_written_cod, 1500);}
               }

             };
           }else{
             $("#firstLetter").val("");
               //$(".input2").children("button").remove();
               for(var i = $el; i < $newText2.length; i++) 
               {
                str_v=$newText2[i].replace(/[a-zA-Z]/g,"&#8226");
                $(".input3" ).append( '<button class="btn_white">'+ str_v+' </button>' );
              } 
              mistake();
            };
          });
        };

        function first_letter___audition()   {        
          $("#first_letter___audition").on("click", function () {
            $sentense=1
            show_training1() ;
            first_letter___audition_cod()
          });
        };

        function first_letter___audition_cod()   { 

          training_type=8
          clear_table()
          $(".sound" ).show();
          var $el=0;
          $mistake=0;

          random_voice();
          var $newText2=   $getSentence.split(" ");
          var $RightLenght=$newText2.length;

          var $newText3=$getSentence.replace(/[a-zA-Z]/g,".")
          var $newText3=  $newText3.split(" ");
          jQuery.each($newText3, function(i, value) {
           $(".prompt2" ).append( '<button class="press btn_green">'+ value+'</button>' );
         });
          $(".prompt2" ).css("opacity","1");
          $(".btn_input2" ).text(' ' )
          $(".input" ).append('<textarea class="press" id="firstLetter" value="" placeholder="напишите первую букву слова"></textarea>' );

          $("#firstLetter").focus();

          $(".press").on('input', function () {

           letter=$(this).val().toUpperCase();
           changeLan();
           if ($newText2[$el].substr(0, 1)==letter) {
            $("#firstLetter").attr("placeholder","молодец");
            $("#firstLetter").css("background","white");
            $(".input2" ).css("opacity","1")
            $(".btn_input2" ).text($(".btn_input2" ).text()+$newText2[$el]+' ' )
            $(".prompt2").children("button:first").remove();
            $("#firstLetter").val("");
            $el++;
            if ($el==$RightLenght) {
             $('#time_game').text(1*$('#time_game').text()+25*$koef)
             meter_();

             $(".rus" ).append('<button class="btn btn-info btn-large">'+ $getRus+'</button>');
             $(".prompt2" ).append( '<button class="press btn_green">1</button>' ).css("opacity","0.01");
             if (cycle==0){setTimeout(hide_training, 500);return;}
             if (task_new>=max_task-1){   show_training=1  }           

              if(show_training==1){
                row_new=first_row; task_new=0;
                training_sentense_7=0;

                if (cycle==1){if  (repeat_training==0){ setTimeout(cycle_for_training,1500) ;} else{setTimeout(cycle_for_old_training,1500) ;} }

                return;
              }

              if(show_training==0){
                task_new++    
                row_new++

                if  (repeat_training==0){ select_sentense() ;} else{select_old_sentense();} 
                if ($sentense==0){setTimeout(letter___audition_cod, 1500);}  
                if ($sentense==1){setTimeout(first_letter___audition_cod, 1500);}   

              }
            };
          }else{
           $("#firstLetter").val("");
               //$(".input2").children("button").remove();
               for(var i = $el; i < $newText2.length; i++) 
               {
                str_v=$newText2[i].replace(/[a-zA-Z]/g,"&#8226");
                $(".input3" ).append( '<button class="btn_white">'+ str_v+' </button>' );
              } 
              mistake();          
            };
          });
        }


        function letter___audition()   {        
          $("#letter___audition").on("click", function () {
            $sentense=0
            show_training1() ;
            letter___audition_cod()
          });
        };

        function letter___audition_cod()   { 

          training_type=9
          clear_table()
          $(".sound" ).show();
          var $el=0;
          $mistake=0;

          random_voice();
               //var $newText2=   $getSentence.split(" ");
               var $RightLenght=$getSentence.length;

               var $newText3=$getSentence.replace(/[a-zA-Z]/g,".")

               //var $newText3=  $newText3.split(" ");
               //jQuery.each($getSentence, function(i, value) {
                 $(".prompt2" ).append( '<button class="press btn_green">'+ $newText3+'</button>' );
             // });
             $(".prompt2" ).css("opacity","1");
             $(".btn_input2" ).text(' ' )
             $(".input" ).append('<textarea class="press" id="firstLetter" value="" placeholder="напишите первую букву слова"></textarea>' );

             $("#firstLetter").focus();

             $(".press").on('input', function () {

               letter=$(this).val().toUpperCase();
               changeLan();
               if ($getSentence.substr($el, 1)=="(") {var firstLetter_=$getSentence.substr($el+1, 1)}else{var firstLetter_=$getSentence.substr($el, 1)}
                 if (firstLetter_==letter) {
                  $("#firstLetter").attr("placeholder","молодец");
                  $("#firstLetter").css("background","white");
                  $(".input2" ).css("opacity","1")
                  $(".btn_input2" ).text($(".btn_input2" ).text()+letter )
                  $(".prompt2").children("button:first").remove();
                  $("#firstLetter").val("");
                  $el++;
                  if ($el==$RightLenght) {
                   $('#time_game').text(1*$('#time_game').text()+25*$koef)
                   meter_();
                   $(".rus" ).append('<button class="btn btn-info btn-large">'+ $getRus+'</button>');
                   $(".prompt2" ).append( '<button class="press btn_green">1</button>' ).css("opacity","0.01");
                   if (cycle==0){setTimeout(hide_training, 500);return;}
                   if (task_new>=max_task-1){   show_training=1  }           

                    if(show_training==1){
                      row_new=first_row; task_new=0;
                      training_sentense_7=0;

                      if (cycle==1){if  (repeat_training==0){ setTimeout(cycle_for_training,1500) ;} else{setTimeout(cycle_for_old_training,1500) ;} }

                      return;
                    }

                    if(show_training==0){
                      task_new++    
                      row_new++

                      if  (repeat_training==0){ select_sentense() ;} else{select_old_sentense();} 
                      if ($sentense==0){setTimeout(letter___audition_cod, 1500);}  
                      if ($sentense==1){setTimeout(first_letter___audition_cod, 1500);}          
                    }
                  };
                }else{
                 $("#firstLetter").val("");
               //$(".input2").children("button").remove();
               for(var i = $el; i < $getSentence.length; i++) 
               {
                str_v=$getSentence.replace(/[a-zA-Z]/g,"&#8226");
                $(".input3" ).append( '<button class="btn_white">'+ str_v+' </button>' );
              } 
              mistake();          
            };
          });
           }




           function first_letter_audition()   {        
            $("#first_letter_audition").on("click", function () {
              $sentense=1
              show_training1() ;
              first_letter_audition_cod()
            });
          };




          function first_letter_audition_cod()   {

           training_type=10 
           clear_table()
           $(".sound" ).show();
           var $el=0;
           $mistake=0;
           random_voice();
           var $newText2=   $getSentence.split(" ");
           var $RightLenght=$newText2.length;
           $(".input" ).children().remove();
           $(".btn_input2" ).text(' ' )
           $(".input" ).append('<textarea class="press" id="firstLetter" value="" placeholder="напишите первую букву слова"></textarea>' );
           $("#firstLetter").focus();     
           $(".height320").addClass('animated fadeIn')
           setTimeout(removeClass_animated,500)

           $(".press").on('input', function () {

             letter=$(this).val().toUpperCase();
             changeLan();
             if ($newText2[$el].substr(0, 1)==letter) {
               $(".input2" ).css("opacity","1")
               $(".btn_input2" ).text($(".btn_input2" ).text()+$newText2[$el]+' ' )
               //$(".input2").children("text:last").after('<text>'+$newText2[$el] +' </text>');
               //$(".input2").children("button:first").remove();
               $("#firstLetter").val("");
               $el++;
               if ($el==$RightLenght) {
                 $('#time_game').text(1*$('#time_game').text()+25*$koef)
                 meter_();

                 $(".rus" ).append('<button class="btn btn-info btn-large">'+ $getRus+'</button>')

                 if (cycle==0){setTimeout(hide_training, 500);return;}
                 if (task_new>=max_task-1){   show_training=1  }           

                  if(show_training==1){
                    row_new=first_row; task_new=0;
                    training_sentense_8=0;
                    if (cycle==1){if  (repeat_training==0){ setTimeout(cycle_for_training,1500) ;} else{setTimeout(cycle_for_old_training,1500) ;} }

                    return;
                  }

                  if(show_training==0){
                    task_new++    
                    row_new++
                    if  (repeat_training==0){ select_sentense() ;} else{select_old_sentense();} 


                    if ($sentense==0){setTimeout(one_eng_4_rus_cod, 300);}  
                    if ($sentense==1){setTimeout(first_letter_audition_cod, 1500);}        
                  };

                };
              }else{
               $("#firstLetter").val("");
               //$(".input2").children("button").remove();
               for(var i = $el; i < $newText2.length; i++) 
               {
                str_v=$newText2[i].replace(/[a-zA-Z]/g,"&#8226");
                $(".input3" ).append( '<button class="btn_white">'+ str_v+' </button>' );
              } 
              mistake()
            };
          });
         }

         function one_rus_4_eng()   {        
          $("#one_rus_4_eng").on("click", function () {
            $sentense=0
            show_training1() ;
            one_rus_4_eng_cod()
          });
        };

        function one_rus_4_eng_cod()   { 

         training_type=11
         clear_table()
         var $el=0;
         $mistake=0;
         $(".rus" ).append('<button class="btn btn-info btn-large">'+ $getRus+'</button>')
         $(".input" ).children().remove();
               // $(".microphon" ).css("display","none");
               var random_number=4
               if (video_==1) {random_number=3}
                var randIndex2 = Math.floor(Math.random() * (random_number-1));
              for (var i=1; i<=random_number; i++){
                if (i==1*randIndex2+1){ $(".input" ).append('<button class="btn btn-info btn-large height_25 answer">' +$getSentence+'</button><br>' )}else{
                 random_selelect_false_sentense() ;
                 $(".input" ).append('<button class="btn btn-info btn-large height_25 answer">' +$falseSentence+'</button><br>' );}}  
                 $(".height320").addClass('animated fadeIn')
                 setTimeout(removeClass_animated,500)
                 $(".answer").on("click", function () {
                  var word=$(this).text();
                  if ( $(this).text()==$getSentence) {
                   $('#time_game').text(1*$('#time_game').text()+25*$koef)
                   meter_();
                   if (video_==1) { number_video++;if (number_video<arr_English.length) {$video_.attr('src', src + '?autoplay=1&rel=0&start='+start_video[number_video]+'&end='+end_video[number_video]+'&rel=0');} setTimeout(select_type_training_, 1000);  return;}
                   if (cycle==0){random_voice();setTimeout(hide_training, 500);return;}
                   if (task_new>=max_task-1){ show_training=1  }           
                    if(show_training==1){
                      row_new=first_row; task_new=0;
                      training_sentense_6=0;
                      if (cycle==1){if (repeat_training==0){ setTimeout(cycle_for_training,1500) ;} else{setTimeout(cycle_for_old_training,1500) ;} }
                      return;
                    }
                    if(show_training==0){
                      task_new++    
                      row_new++
                      if  (repeat_training==0){ select_sentense() ;} else{select_old_sentense();}             
                      if ($sentense==0){setTimeout(one_rus_4_eng_cod, 300);}  
                      if ($sentense==1){setTimeout(first_letter_written_cod, 1500);}             
                    };
                  }else{            
                   mistake()
                 };
               });
               }

               function one_eng_4_rus()   {        
                $("#one_eng_4_rus").on("click", function () {
                  $sentense=0
                  show_training1() ;
                  one_eng_4_rus_cod()
                });
              };

              function one_eng_4_rus_cod()   { 

               training_type=12
               clear_table()
               var $el=0;
               $mistake=0;

               $(".input" ).children().remove();
               // $(".microphon" ).css("display","none");
               $(".rus" ).append('<button class="btn btn-info btn-large">'+ $getSentence+'</button>')
               var random_number=4
               if (video_==1) {random_number=3}
                var randIndex2 = Math.floor(Math.random() * (random_number-1));
              for (var i=1; i<=random_number; i++){
                if (i==1*randIndex2+1){ $(".input" ).append('<button class="btn btn-info btn-large height_25 answer">' +$getRus+'</button><br>' )
                  console.log($getRus)
              }else{
               random_selelect_false_sentense() ;
               $(".input" ).append('<button class="btn btn-info btn-large height_25 answer">' +$falseRus+'</button><br>' );
               console.log($falseRus)
             }}  
             $(".height320").addClass('animated fadeIn')
             setTimeout(removeClass_animated,500)
             $(".answer").on("click", function () {
              var word=$(this).text();
              if ( $(this).text()==$getRus) {
               $('#time_game').text(1*$('#time_game').text()+25*$koef)
               meter_();
               if (video_==1) { number_video++;if (number_video<arr_English.length) {$video_.attr('src', src + '?autoplay=1&rel=0&start='+start_video[number_video]+'&end='+end_video[number_video]+'&rel=0');} setTimeout(select_type_training_, 1000);  return;}
               if (cycle==0){random_voice();setTimeout(hide_training, 500);return;}
               if (task_new>=max_task-1){ show_training=1  }           
                if(show_training==1){
                  row_new=first_row; task_new=0;
                  training_sentense_8=0;
                  if (cycle==1){if (repeat_training==0){ setTimeout(cycle_for_training,1500) ;} else{setTimeout(cycle_for_old_training,1500) ;} }
                  return;
                }
                if(show_training==0){
                  task_new++    
                  row_new++
                  if  (repeat_training==0){ select_sentense() ;} else{select_old_sentense();}             
                  if ($sentense==0){setTimeout(one_eng_4_rus_cod, 300);}  
                  if ($sentense==1){setTimeout(first_letter_audition_cod, 1500);}          
                };
              }else{            
               mistake()
             };
           });
           }
           function four_rus_audition()   {        
            $("#sound_4_rus").on("click", function () {
              $sentense=1
              show_training1() ;
              four_rus_audition_cod()
            });
          };

          function four_rus_words_audition()   {        
            $("#sound_4_words_rus").on("click", function () {
              $sentense=0
              show_training1() ;
              four_rus_audition_cod()
            });
          };


          function four_rus_audition_cod()   { 

            training_type=13
            clear_table()
            $(".sound" ).show();
            var $el=0;
            $mistake=0;
            if (video_==0) {random_voice();}
            var $newText2=   $getSentence.split(" ");
            var $RightLenght=$newText2.length;
            $(".input" ).children().remove();
               // $(".microphon" ).css("display","none");

               var random_number=4
               if (video_==1) {random_number=3}
                var randIndex2 = Math.floor(Math.random() * (random_number-1));



              for (var i=1; i<=random_number; i++){
                if (i==1*randIndex2+1){ $(".rus" ).append('<button class="btn btn-info btn-large height_25 answer">' +$getRus+'</button><br>' )}else{
                 random_selelect_false_sentense() ;
                 $(".rus" ).append('<button class="btn btn-info btn-large height_25 answer">' +$falseRus+'</button><br>' );}}

                 $(".height320").addClass('animated fadeIn')
                 setTimeout(removeClass_animated,500)
                 $(".answer").on("click", function () {
                  var word=$(this).text();

                  if ( $(this).text()==$getRus) {
                    $('#time_game').text(1*$('#time_game').text()+25*$koef)
                    meter_();
                    if (video_==1) { number_video++;if (number_video<arr_English.length) {$video_.attr('src', src + '?autoplay=1&rel=0&start='+start_video[number_video]+'&end='+end_video[number_video]+'&rel=0');} setTimeout(select_type_training_, 1000);  return;}
                    if (cycle==0){setTimeout(hide_training, 500);return;}
                    console.log(task_new)

                    if (task_new>=max_task-1){ show_training=1  }           

                      if(show_training==1){
                        row_new=first_row; task_new=0;
                        training_sentense_9=0;
                        if (cycle==1){if (repeat_training==0){ setTimeout(cycle_for_training,1500) ;} else{setTimeout(cycle_for_old_training,1500) ;} }

                        return;
                      }

                      if(show_training==0){
                        task_new++    
                        row_new++
                        if  (repeat_training==0){ select_sentense() ;} else{select_old_sentense();}             
                        setTimeout(four_rus_audition_cod, 300);          
                      };


                    }else{ 
                     $mistake++           
                     mistake()
                   };
                 });
               }



               function myInterval2(){$("#microphon2").change()};
               setInterval(myInterval2, 2000)
               yy=0;


               function dictophon___()   {    
                $("#dictophon___").on("click", function () {
                  $sentense=1
                  first_row=0;
                  show_training1() 

                  dictophon___cod2()  
                });
              };

              function dictophon_word_()   {    
                $("#dictophon_word_").on("click", function () {
                  $sentense=0
                  first_row=0;
                  show_training1() 
                  dictophon___cod2()  
                });
              };

              function stripe()   { 
                $('#dictophon_karaoke').animate({width : $width,},$animation_time,'linear');
              }
              function karaoke()   {  
               $top= $("#dictophon_english").position()['top'];
               $left=  $("#dictophon_english").position()['left'];
               $width= $("#dictophon_english").width()+40;
               if ($sound_type=="video"){
                 $animation_time= 1000*($end-$start);
               }else{
                $animation_time=$getSentence.length*100
              }
              $(".prompt2" ).append( '<span  id="dictophon_karaoke">&nbsp </span>' );
              $("#dictophon_karaoke").css('top',$top);
              $("#dictophon_karaoke").css('left',$left);
              if ($sound_type=="video"){
               $('#video').load(function () {
                setTimeout(stripe,500);
              });
             }else{
              stripe();
            }


          }

          function dictophon___cod2()   {    
            clear_table();
            stop_dictophon=0;
            $(".microphon" ).css("display","block");
            $newText2=0;
            $el=0;
            $(".meter2").val(0);
            $(".microphon" ).show();
            $(".sound" ).show();
            $(".prompt3" ).hide(); 
            $(".rus" ).append('<button class="btn btn-info btn-large">'+ $getRus+'</button>');
            $(".prompt2" ).append( '<span class="btn btn-large" id="dictophon_english">'+ $getSentence+'</span>' );

            $(".prompt2" ).css("opacity","1");

            setTimeout(karaoke,300);

            if (video_==0) {random_voice()};
            $('#time_game').text(1*$('#time_game').text()+25*$koef)
            var $newText3=$getSentence.replace(/[a-zA-Z]/g,".")
            var $newText3=  $newText3.split(" ");
            $(".title_sound" ).attr("title", $getSentence)
            $(".microphon" ).attr("title", $getSentence)
            myTime=$getSentence.length*300

            if ($sound_type=="video" ){myTime=myTime*1.5}
             if (video_==1 ){myTime=myTime*1.5}
              if (myTime<3000) {myTime=3000}
                $(".meter2").attr('max',myTime)

              var MyIntervalID =  setInterval (function(){ $(".meter2").val($(".meter2").val()+10) }, 10);

              setTimeout(function(){ clearInterval (MyIntervalID )},myTime)
              var myTime2=myTime-2000
              setTimeout( meter_,myTime2)



              setTimeout(function(){

                if (video_==1) {
                  console.log( start_video[number_video]+', '+end_video[number_video]);
                  number_video++;
                  if (number_video<arr_English.length) {
                    $video_.attr('src', src + '?autoplay=1&rel=0&start='+start_video[number_video]+'&end='+end_video[number_video]+'&rel=0');
                    console.log( start_video[number_video]+', '+end_video[number_video]);
                  } 
                  setTimeout(select_type_training_, 1000);  return;}
                  if (task_new>=max_task-1){   show_training=1  } 



                    if(show_training==1){

                      row_new=first_row; task_new=0;
                      training_sentense_10=0;

                      if (cycle==1){
                       if  (repeat_training==0){ cycle_for_training()} else{cycle_for_old_training()} 


                     }
                   if (cycle==0){
                    hide_training()

                  }
                  return;
                }

                if(show_training==0){


                  task_new++    
                  row_new++
                  if  (repeat_training==0){ select_sentense() ;} else{select_old_sentense();} 
                  if (video_==1) { number_video++}
                    dictophon___cod2()


                //stop_dictophon=1
                return;         
              };},myTime)



            };


            function dictophon___cod()   {    
             clear_table()
             stop_dictophon=0
             $(".microphon" ).css("display","block");


             $(".si-btn").click();

             clear_table()
             $(".rus" ).append('<button class="btn btn-info btn-large">'+ $getRus+'</button>');
             var $newText3=$getSentence.replace(/[a-zA-Z]/g,".")
             var $newText3=  $newText3.split(" ");
             if (video_==0) {jQuery.each($newText3, function(i, value) {

               $(".prompt2" ).append( '<button class="press btn_green">'+ value+'</button>' );
             });
               $(".prompt2" ).css("opacity","1");}
               y=0;

               $(".speech-input, .si-btn" ).css("visibility", 'visible');
               $(".speech-input").val("")
               $("#firstLetter2").focus();

               if (yy!=1){$("#microphon2").change(function () {
                 var letter=$(this).val();
                 if (letter.length>=$getSentence.length*1.2) {
                  meter_();
                  stop__dictophon() 
                  if (video_==1) { number_video++;

                    if (number_video<arr_English.length) {
                      $video_.attr('src', src + '?autoplay=1&rel=0&start='+start_video[number_video]+'&end='+end_video[number_video]+'&rel=0');$(".si-btn").click(); } setTimeout(select_type_training_, 1000); 
                      return;}
                      $(".speech-input, .si-btn" ).css("visibility", 'hidden')

                      if (y==0){

                       $(".input2" ).append( $getSentence)
                       if (task_new>=max_task-1){   show_training=1  } 
                        if (stop_dictophon==1) {stop_dictophon=0;$("#microphon2").val(""); return}          

                      random_voice();
                      if(show_training==1){

                        row_new=first_row; task_new=0;
                        training_sentense_10=0;

                        if (cycle==1){
                          stop__dictophon() 
                          if  (repeat_training==0){ setTimeout(cycle_for_training,1500) ;} else{setTimeout(cycle_for_old_training,1500) ;} 

                        }
                        if (cycle==0){

                          stop__dictophon() 

                          setTimeout(hide_training, 1500);
                        }
                        stop_dictophon=1
                        return;
                      }
                      if(show_training==0){
                        task_new++    
                        row_new++
                        if  (repeat_training==0){ select_sentense() ;} else{select_old_sentense();} 
                        $(".si-btn").click(); 
                        setTimeout(dictophon___cod, 1500);
                //stop_dictophon=1
                return;         
              };

              y++;
              yy=1;
              return;
            }  
          }
        });
             };
           };


           function changeLan()   {
            if (letter=="Й"){letter="Q"};
            if (letter=="Ц"){letter="W"};
            if (letter=="У"){letter="E"};
            if (letter=="К"){letter="R"};
            if (letter=='Е'){letter="T"};
            if (letter=="Н"){letter="Y"};
            if (letter=="Г"){letter="U"};
            if (letter=="Ш"){letter="I"};
            if (letter=="Щ"){letter="O"};
            if (letter=="З"){letter="P"};
            if (letter=="Ф"){letter="A"};
            if (letter=="І"){letter="S"};
            if (letter=="Ы"){letter="S"};
            if (letter=="В"){letter="D"};
            if (letter=="А"){letter="F"};
            if (letter=="П"){letter="G"};
            if (letter=="Р"){letter="H"};
            if (letter=="О"){letter="J"};
            if (letter=="Л"){letter="K"};
            if (letter=="Д"){letter="L"};
            if (letter=="Я"){letter="Z"};
            if (letter=="Ч"){letter="X"};
            if (letter=="С"){letter="C"};
            if (letter=="М"){letter="V"};
            if (letter=="И"){letter="B"};
            if (letter=="Т"){letter="N"};
            if (letter=="Ь"){letter="M"};
            if (letter=="Э"){letter="'"};
          };
