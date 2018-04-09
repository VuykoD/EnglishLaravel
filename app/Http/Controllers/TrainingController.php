<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use App\Progress;


class TrainingController extends Controller
{
         public function general(){  
         	if (request('user')!='none'){
 
          $id_user = request('user');
 
           //указываем какая именно это таблица и есть мой словарь(словарь пользователя),
           //$my_table = Progress::where('id_users',$id_user)->base_course->get();
           $my_table = Progress::where('id_users',$id_user);
          $my_table=$my_table->get();

          }
           
           else {$my_table='none';}
            
         	 //$name=Auth::user()->name ;
         	//$name=explode('@',$data['email']);
        	//$id_course = Course_name::where('course_name',$course)->value('id');
        	//$course = Base_course::where('id_course',$id_course)->get();
            //dd($course);
        	 return view('training',compact('my_table'));

        }	 
}
