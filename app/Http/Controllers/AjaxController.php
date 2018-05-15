<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Video_name;
use App\Video_time;

class AjaxController extends Controller

{

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

