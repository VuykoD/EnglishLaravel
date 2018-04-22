<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Reading;

class ReadingMoreController extends Controller
{
        public function text(){

        // if ($index_id = request('index_id')){}
        	$index_id = request('index_id');
        	$article = Reading::where('id',$index_id)->first();

             //dd($article_text);
        	 return view('readingMore')->with(['article_text'=>$article->text,'article_name'=>$article->name,'index_id'=>$article->id]);

    }
}
