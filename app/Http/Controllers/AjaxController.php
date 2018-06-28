<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Video_name;
use App\Video_time;

class AjaxController extends Controller

{

public function ajaxRequestSoundGame() {

 
  if (request('user_record')){
    $exist_row_with_user=DB::table('statistics')->where('user_id', request('user_id'))->pluck('id')->first();

    if ($exist_row_with_user==Null){
      DB::table('statistics')->where('user_id', request('user_id'))->insert(['user_id'=>request('user_id'),'record_sound_game' => request('user_record')]);
    }else{
      DB::table('statistics')->where('user_id', request('user_id'))->update(['record_sound_game' => request('user_record')]);
    }
  }

  $user_record=DB::table('statistics')->where('user_id', request('user_id'))->pluck('record_sound_game')->first();
 
  if (!$user_record){
    $user_record=0;
  }
  $site_record=DB::table('statistics')->pluck('record_sound_game')->max();

  return response()->json(['$user_record'=>$user_record,'$site_record'=>$site_record]);
} 

public function ajaxRequest()

    {
       if (request('sound_type')=="video"){
         DB::table('progresses_of_videos')->where('id', request('i1'))->update(['quantity' => request('quantity'),'next_date' => request('next_date')]);
         }else{
         DB::table('progresses')->where('id', request('i1'))->update(['quantity' => request('quantity'),'next_date' => request('next_date')]);
       }
        return response()->json(['success'=>request('i1')]);

    }


    public function ajaxRequestPost()

    {


 if (request('sound_type')=="video"){

             
          if (request('_row')=="edit"){
              DB::table('video_times')->where('id', request('arr_base_course_id_'))->update(['english' => request('eng_'),'russian' => request('rus_'),'start_' => request('start_video'),'end_' => request('end_video')]);
          }

          if (request('_row')=="new"){
             Video_time::insert([
                 'id_video_name' => request('id_base'),
                 'start_' => request('start_video'),
                 'end_' => request('end_video'),
                 'english' => request('eng_'),
                 'russian' => request('rus_'),
            ]); 
            return response()->json([Video_time::orderby('id', 'desc')->first()->id]);
          }

          if (request('_row')=="delete"){
              DB::table('video_times')->where('id', request('arr_base_course_id_'))->delete();
          }
          
 	        
          }else{
          DB::table('base_courses')->where('id', request('arr_base_course_id_'))->update(['english' => request('eng_'),'russian' => request('rus_')]);       
          }
    }

}

