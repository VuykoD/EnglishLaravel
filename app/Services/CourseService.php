<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;

class CourseService
{

     public static function getWordsFromSentense($sentense)
     {
            $words= $sentense['english'];
           	$words= str_replace("!","",$words);
           	$words= str_replace(",","",$words);
           	$words= str_replace(".","",$words);
           	$words= str_replace(";","",$words);
           	$words= str_replace(":","",$words);
           	$words= str_replace("?","",$words);
           	$words= str_replace("-","",$words);
           	$words = preg_replace("/(\s){2,}/",' ',$words);
           	return $words=explode(' ',$words);
     }
}
