<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Reading;

class ReadingController extends Controller
{
    //
    public function all(){

        if ($type = request('type')){

        	$article = Reading::latest()->get();

        	 return view('layouts/reading')->with(['article'=>$article,'type'=>$type]);

        	
        }

    }
        	
}
