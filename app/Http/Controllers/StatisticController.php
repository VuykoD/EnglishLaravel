<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\Progress;
use App\Progresses_of_video;

class StatisticController extends Controller
{
	public function index(){

		$data_course_new = count(Progress::where('id_users', Auth::id())->where('quantity',0)->get());
		$data_course_repeat = count(Progress::where('id_users', Auth::id())->where('quantity','>',0)->where('quantity','<',3)->get());
		$data_course_exam = count(Progress::where('id_users', Auth::id())->where('quantity',3)->get());
		$data_course_learnt = count(Progress::where('id_users', Auth::id())->where('quantity','>',3)->get());
		$data_course_all = count(Progress::where('id_users', Auth::id())->get());

		$data_video_new = count(Progresses_of_video::where('id_users', Auth::id())->where('quantity',0)->get());
		$data_video_repeat = count(Progresses_of_video::where('id_users', Auth::id())->where('quantity','>',0)->where('quantity','<',3)->get());
		$data_video_exam = count(Progresses_of_video::where('id_users', Auth::id())->where('quantity',3)->get());
		$data_video_learnt = count(Progresses_of_video::where('id_users', Auth::id())->where('quantity','>',3)->get());
		$data_video_all = count(Progresses_of_video::where('id_users', Auth::id())->get());

		$last_visit =DB::table('statistic_users')->where('id_users', Auth::id())->first();

		return view('layouts/statistic_user') ->with([
			'data_course_new'=>$data_course_new,
			'data_course_repeat'=>$data_course_repeat,
			"data_course_exam"=>$data_course_exam,
			"data_course_learnt"=>$data_course_learnt,
			'data_course_all'=>$data_course_all,
			'data_video_new'=>$data_video_new,
			'data_video_repeat'=>$data_video_repeat,
			"data_video_exam"=>$data_video_exam,
			"data_video_learnt"=>$data_video_learnt,
			'data_video_all'=>$data_video_all,
			'last_visit'=>$last_visit,			
			]);
	}
}
