<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;



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
 	      DB::table('video_times')->where('id', request('arr_base_course_id_'))->update(['english' => request('eng_'),'russian' => request('rus_')]);
          }else{
          DB::table('base_courses')->where('id', request('arr_base_course_id_'))->update(['english' => request('eng_'),'russian' => request('rus_')]);       
          }
    }

}

