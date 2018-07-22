<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Video_name;
use App\Video_time;
use App\Progress;
use Carbon\Carbon;



class AjaxController extends Controller

{

  public function ajaxRequestAddOneString() {

    $max_id = DB::table('progresses')->max("id");
    $id=$max_id+10;
    $date = Carbon::today()->toDateString();

    Progress::insert([ 
      'id'              => $id, 
      'id_base'         => request('$id_course'),
      'id_users'        => Auth::user()->id, 
      'base_course_id'  => request('$id_add'),
      'quantity'        => '0',
      'next_date'       => $date
      ]);

    return response()->json(['success'=>'ok']);
  }   

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
    if (request('mistake')==0){
     $last_learn=DB::table('statistic_users')->where('id_users', Auth::id()) ->first();

     if (!$last_learn){
      DB::table('statistic_users')->insert([ 
        'id_users'        => Auth::user()->id, 
        'updated_at' => Carbon::now(),
        'created_at' => Carbon::now()
        ]);
      $last_learn=DB::table('statistic_users')->where('id_users', Auth::id()) ->first();
    }

    $day_of_last_learn=explode(" ", $last_learn->updated_at)[0];

    

    if ($day_of_last_learn!=Carbon::today()->toDateString()){
      DB::table('statistic_users')->where('id_users', Auth::id())->update(['course_new' => 0,'course_repeat'=>0,'course_test' =>0,'video_new' => 0,'video_repeat'=>0,'video_test' =>0]);
    }

    if (request('sound_type')=="course"&&request('quantity')==1){
      DB::table('statistic_users')->where('id_users', Auth::id())->update(['course_new' => 1*($last_learn->course_new)+1,'updated_at' => Carbon::now()]);
    }

    if (request('sound_type')=="course"&&request('quantity')>1&&request('quantity')<4){
      DB::table('statistic_users')->where('id_users', Auth::id())->update(['course_repeat' => 1*($last_learn->course_repeat)+1,'updated_at' => Carbon::now()]);
    }

    if (request('sound_type')=="course"&&request('quantity')>3){
      DB::table('statistic_users')->where('id_users', Auth::id())->update(['course_test' => 1*($last_learn->course_test)+1,'updated_at' => Carbon::now()]);
    }

    if (request('sound_type')=="video"&&request('quantity')==1){
      DB::table('statistic_users')->where('id_users', Auth::id())->update(['video_new' => 1*($last_learn->video_new)+1,'updated_at' => Carbon::now()]);
    }

    if (request('sound_type')=="video"&&request('quantity')>1&&request('quantity')<4){
      DB::table('statistic_users')->where('id_users', Auth::id())->update(['video_repeat' => 1*($last_learn->video_repeat)+1,'updated_at' => Carbon::now()]);
    }

    if (request('sound_type')=="video"&&request('quantity')>3){
      DB::table('statistic_users')->where('id_users', Auth::id())->update(['video_test' => 1*($last_learn->video_test)+1,'updated_at' => Carbon::now()]);
    }
  }
  if (request('sound_type')=="video"){
   DB::table('progresses_of_videos')->where('id', request('i1'))->update(['quantity' => request('quantity'),'next_date' => request('next_date')]);
 }else{
   DB::table('progresses')->where('id', request('i1'))->update(['quantity' => request('quantity'),'next_date' => request('next_date')]);
 }

// if (request('sound_type')=="video"&&request('quantity')==1){}


//       DB::table('statistic_users')->where('id_users', Auth::id())->update(['quantity' => request('quantity'),'updated_at' => Carbon::now()]);

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

