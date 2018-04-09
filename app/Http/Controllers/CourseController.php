<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Course_name;
use App\Base_course;

class CourseController extends Controller
{
public function name(){


        // if ($course = request('course')){}
	        $course = request('course');
        	$id_course = Course_name::where('course_name',$course)->value('id');
        	$course = Base_course::where('id_course',$id_course)->get();
        //dd($course);
        	 return view('course')->with(['course'=>$course,'id_course'=>$id_course]);
          
        


    }
}
