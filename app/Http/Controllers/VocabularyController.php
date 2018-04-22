<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Schema\Blueprint;

use Carbon\Carbon;
use App\Base_course;
use App\Base_word;
use App\Progress;
use App\Progresses_of_video;
use App\Video_time;
use App\Services\CourseService;

class VocabularyController extends Controller
{
    public function add_course(){

         //проверяем, есть ли что добавлять в наш словарь
        if ($id_course_add = request('id_course')){




           //записывает  в переменую сегодняшнюю дату
           $date = Carbon::today()->toDateString();
           
  
           //указываем какая именно это таблица и есть мой словарь(словарь пользователя),
           //$my_table=Progress::all();
           $i=0;
            
          //узнаю id первого предложение в данном курсе
           if ($id_course_add>100000){
          $first_id = Base_course::where('id_course',$id_course_add)->first()->id;
          }else{
            $first_id = Video_time::where('id_video_name',$id_course_add)->first()->id;
          }

          //dd($first_id); 
           //узнаю добавлялся ли этот курс в личный словарь пользователя
            if ($id_course_add>100000){   
             $exist_table = Progress::where('id_base',$id_course_add)->where('id_users',request('id_user'))->count();
             $max_id = DB::table('progresses')->max("id");
            }else{
               $exist_table =  Progresses_of_video::where('id_base',$id_course_add)->where('id_users',request('id_user'))->count();
               $max_id = DB::table('progresses_of_videos')->max("id");
            }
            
     
            
                  // если есть то выдаем сообщение что этоn курс уже был добавлен
                  if ($exist_table>=1){
                   $message='Этот курс/видео уже был добавлен';
                 }// если данный курс не добавлялся то добавляем
                 else{
                  $message='Курс/видео удачно добавлен';
          //узнаю все  предложения что нужно добавить
          if ($id_course_add>100000){
           $sentenses = Base_course::where('id_course',$id_course_add)->get()->toarray();
           }else{
            $sentenses = Video_time::where('id_video_name',$id_course_add)->get()->toarray();
           }
           //dd($sentenses);

           //запускаю цикл по добавлению каждого предложения в свой словарь
           foreach ($sentenses as $sentense){
            
           if (request('GetWords')==1) {
            //раскладываю предложения на слова, с удалением всех ненужных знаков.
            $words = CourseService::getWordsFromSentense($sentense);

                //запускаю цикл по добавлению каждого слова в свой словарь
                foreach ($words as $el){
                  //узнаю есть ли такое слово в таблице Base_word 
                  $word_id = Base_course::where('english',$el)->get()->toarray();
                  $y= count($word_id);
                  // если есть то выполняется дальнешший сценарий
                  if ($y>=1){

                  // там массивы в масссиве, мне нужен первый массив
                  $word_id = $word_id[0];
                  
                    
                    //узнаю есть ли такое слово в моем словаре
                    
           	        $z = Progress::where('base_course_id',$word_id['id'])->where('id_users',request('id_user'))->count();
           	        
                    
           	         // если нет то выполняется дальнешший сценарий
           	        if ($z<1){
                      // добавляем в  мой словарь текущее слово
                    $i++;
                    $id=$max_id+$i*10;
                   
                     Progress::insert([
                     'id' => $id, 
                    'id_base'  => request('id_course'),
                     'id_users'  => request('id_user'),  
                    'base_course_id' => $word_id['id'],
                    'quantity'   => '0',
                    'next_date' => $date
                     ]);
                     }}
                }
             }
                //конец цикла по добавлению слов на каждое предложение

             
                $i++; 
 
           //$sentense_id = Base_course::where('english',$sentense)->first()->id;	
            // добавляем в  мой словарь текущее предложение
             $id=$max_id+$i*10;
          if ($id_course_add>100000){   
           Progress::insert([
          'id' => $id, 
          'id_base'  => $id_course_add,
          'id_users'  => request('id_user'), 
          'base_course_id' => $sentense['id'],
          'quantity'   => '0',
          'next_date' => $date
           ]);
           }else{
           Progresses_of_video::insert([
          'id' => $id, 
          'id_base'  => $id_course_add,
          'id_users'  => request('id_user'), 
          'base_course_id' => $sentense['id'],
          'quantity'   => '0',
          'next_date' => $date
           ]);
           }
           }
           }


     

 
           

        	 return view('welcome')->with(['message'=>$message]);;
          
        }


    }
}
