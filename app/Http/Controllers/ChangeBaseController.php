<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Base_course;

class ChangeBaseController extends Controller
{
    //

    public function ChangeSentenseOrWord() {



DB::table('base_courses')->where('id', request('arr_base_course_id_'))->update(['english' => request('eng_'),'russian' => request('rus_')]);
return back();

    	//dd(request()->all());

    }
}
