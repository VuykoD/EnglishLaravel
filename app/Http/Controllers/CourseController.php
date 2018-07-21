<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Course_name;
use App\Base_course;
use App\Progress;

class CourseController extends Controller
{
	public function name(){


        // if ($course = request('course')){}
		$course = request('course');
		$id_course = Course_name::where('course_name',$course)->first()->id;
		$course = Base_course::where('id_course',$id_course)->get()->toArray();

		foreach ($course as $key => $value) {

			// array_push($value, "apple", "raspberry");

			if(Auth::user()!=null){
				$progress=Progress::where('id_users',Auth::user()->id)->where('base_course_id',$value['id'])->get();
				if (count($progress)>0) {
					$progress=$progress[0]->id_users;
				}else{
					$progress=0;
				}
				$value['progress'] = $progress;
				$course[$key]=$value;
			}
		}

		return view('layouts/course')->with(['course'=>$course,'id_course'=>$id_course]);
	}
}
