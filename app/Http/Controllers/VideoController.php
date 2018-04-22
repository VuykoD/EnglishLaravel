<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Video_name;

use App\Video_time;

class VideoController extends Controller
{
    //

     public function all(){

        if ($type = request('type')){

        	$video = Video_name::latest()->get();

        	 return view('video')->with(['video'=>$video,'type'=>$type]);

        	
        }

    }
}
