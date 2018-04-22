function random_voice()   { 
if ($sound_type=="course"){
var $getSentence1=$getSentence.toLowerCase();
if($false_sent==1) {var $getSentence1=$falseSentence.toLowerCase()}
if(	$yes_no==1) {return;}

utterance = new SpeechSynthesisUtterance($getSentence1);

voices = window.speechSynthesis.getVoices();

for (var i=0;i<=200;i++){
  var $random_voice= Math.floor(Math.random() * voices.length)
utterance.voice = voices[$random_voice];
utterance.voice.lang = voices[$random_voice].lang

if(utterance.voice.lang.substr(0,2)=="en"){
speechSynthesis.speak(new SpeechSynthesisUtterance(""));
window.speechSynthesis.speak(utterance);

return;}
}
}
if ($sound_type=="video"){
	src="http://www.youtube.com/embed/" + $adress
	
$video_.attr('src', src + '?autoplay=1&rel=0&start='+$start+'&end='+$end+'&rel=0');
}
}