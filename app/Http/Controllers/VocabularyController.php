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

class VocabularyController extends Controller
{
    public function add_course(){

         //проверяем, есть ли что добавлять в наш словарь
        if ($id_course_add = request('id_course')){




           //записывает  в переменую сегодняшнюю дату
           $date = Carbon::today()->toDateString();
           
  
           //указываем какая именно это таблица и есть мой словарь(словарь пользователя),
           $my_table=Progress::all();
           
            
          //узнаю id первого предложение в данном курсе
          $first_id = Base_course::where('id_course',$id_course_add)->first()->value('id');
          //dd($first_id); 
           //узнаю добавлялся ли этот курс в личный словарь пользователя
            
            $exist_my_table = Progress::where('id_base',$first_id)->get();

            
            
            $exist_my_table = count($exist_my_table);
            
            
                  // если есть то выдаем сообщение что этоn курс уже был добавлен
                  if ($exist_my_table>=1){
                   $message='Этот курс уже был добавлен';
                 }// если данный курс не добавлялся то добавляем
                 else{
                  $message='Курс удачно добавлен';
          //узнаю все  предложения что нужно добавить
           $course = Base_course::where('id_course',$id_course_add)->get()->toarray();

           //запускаю цикл по добавлению каждого предложения в свой словарь
           foreach ($course as $item){
            //раскладываю предложения на слова, с удалением всех ненужных знаков.
            $words= $item['english'];
           	$words= str_replace("!","",$words);
           	$words= str_replace(",","",$words);
           	$words= str_replace(".","",$words);
           	$words= str_replace(";","",$words);
           	$words= str_replace(":","",$words);
           	$words= str_replace("?","",$words);
           	$words= str_replace("-","",$words);
           	$words = preg_replace("/(\s){2,}/",' ',$words);
           	$words=explode(' ',$words);

                //запускаю цикл по добавлению каждого слова в свой словарь
                foreach ($words as $el){
                  //узнаю есть ли такое слово в таблице Base_word 
                  $word_id = Base_word::where('english',$el)->get()->toarray();
                  $y= count($word_id);
                  // если есть то выполняется дальнешший сценарий
                  if ($y>=1){

                  // там массивы в масссиве, мне нужен первый массив
                  $word_id = $word_id[0];
                  
                    
                    //узнаю есть ли такое слово в моем словаре
                    
           	        $z = Progress::where('id_base',$word_id['id'])->get();
           	        $z = count($z);
                    
           	         // если нет то выполняется дальнешший сценарий
           	        if ($z<1){
                      // добавляем в  мой словарь текущее слово

                     Progress::insert(array(

                     'id_users'  => '1',  
                    'id_base' => $word_id['id'],
                    'quantity'   => '0',
                    'next_date' => $date
                     ));
                     }}
                }
                //конец цикла по добавлению слов на каждое предложение

            //узнаю есть ли такое предложение в моем словаре
           	$i = Progress::where('id_base',$item['id'])->get();
           	$i = count($i);
           	// если нет то выполняется дальнешший сценарий
           	if ($i<1){
            // добавляем в  мой словарь текущее слово
           Progress::insert(array(

          'id_users'  => '1', 
          'id_base' => $item['id'],
          'quantity'   => '0',
          'next_date' => $date
           ));
           }
           }
           }


     

 
           

        	 return view('vocabulary')->with(['id_course_add'=>$id_course_add,'message'=>$message]);
          
        }


    }
}
