<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
	public function index(){

		$myDay=substr(date("d"), 1,1);
		If ($myDay == "0") $codeDay = "a";
		If ($myDay == "1") $codeDay = "b";
		If ($myDay == "2") $codeDay = "c";
		If ($myDay == "3") $codeDay = "d";
		If ($myDay == "4") $codeDay = "e";
		If ($myDay == "5") $codeDay = "f";
		If ($myDay == "6") $codeDay = "g";
		If ($myDay == "7") $codeDay = "h";
		If ($myDay == "8") $codeDay = "k";
		If ($myDay == "9") $codeDay = "l";

		$myDay=date("w");
		If ($myDay == 0)  $codeWeek = "m";
		If ($myDay == 1)  $codeWeek = "n";
		If ($myDay == 2)  $codeWeek = "o";
		If ($myDay == 3)  $codeWeek = "p";
		If ($myDay == 4)  $codeWeek = "r";
		If ($myDay == 5)  $codeWeek = "s";
		If ($myDay == 6)  $codeWeek = "t";

		$all = "abcdefghijklmnopqrstuvwxy"; 

		$cnt = strlen($all) - 1; 
		$pass = "";
		for($i=0; $i<35; $i++) {
			$pass .= $all[rand(0, $cnt)];
		}
		$accessCrome=substr_replace($pass, $codeDay.$codeWeek, 3,0);
		$accessGame=substr_replace($pass, $codeDay, 1,0);
		$accessGame=substr_replace($accessGame, $codeWeek, 3,0);
		$accessGame=substr_replace($accessGame, 'z', 5,0);

		return view('layouts/welcome')->with(['accessCrome'=>$accessCrome,'accessGame'=>$accessGame]);
	}
}
