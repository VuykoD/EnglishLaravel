<?php

namespace App\Http\Controllers;


use App\Progress;
use App\Progresses_of_video;
use App\Video_name;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TrainingController extends Controller
{
    public function general()
    {

// dd(request('user'));
        if (request('user') != "none") {
            $id_user = request('user');
            if (request('type') == "course"){
                 $my_table = Progress::where('id_users', $id_user)->get();
            }
            if (request('type') == "video"){
                 $my_table = Progresses_of_video::where('id_users', $id_user)->get();
            }  
        } else {
            $my_table = 'none';
        }
         
        return view('layouts/training') ->with(['my_table'=>$my_table,'type'=>request('type')]);

    }
}
