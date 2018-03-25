<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Reading;

class ReadingMoreController extends Controller
{
        public function text(){

        // if ($index_id = request('index_id')){}
        	$index_id = request('index_id');
        $article_text = Reading::where('id',$index_id)->value('text');
        	$article_name = Reading::where('id',$index_id)->value('name');
             //dd($article_text);
        	 return view('readingMore')->with(['article_text'=>$article_text,'article_name'=>$article_name,'index_id'=>$index_id]);

    }
}
