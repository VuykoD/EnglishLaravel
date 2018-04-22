<?php

namespace App\Http\Controllers;

use App\Video_time;
use Illuminate\Http\Request;

class VideoTrainingController extends Controller
{
    public function video()
    {

        // if ($index_id = request('index_id')){}
        $adress = request('adress');
        $number = request('number');
        $hide_title = request('hide_title');
        $video_time = Video_time::where('id_video_name', $number)->get();
        if ($hide_title == 1) {
            $hide_title = 'hide_subtitle';
        } else {
            $hide_title = 'visible_none';
        }

        //dd($video_time->toArray());
        return view('video_training')->with([
            'video_time' => $video_time,
            'adress' => $adress,
            'hide_title' => $hide_title,
            'id_base' => $number
        ]);

    }
}
