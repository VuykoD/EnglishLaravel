           

<br>
                  @guest
@else

                    <div class="span5">
                    </div>
                    <div class="span6">

                    <a class="btn btn-info btn-large centered_menu_2" href="vocabulary?id_course={{$id_course}}&user={{ Auth::user()->email }}" >Отобрать курс на изучение</a>
                    </div>
{{ Auth::user()->email }}
{{$id_course}}
@endguest                    

<br><br><br><br>
<div class="container">
<div class="row-fluid">
<div class="span2 centered_menu  img-sort-big">
                        <div><img src="images/sort/school.jpg" class="img-sort-big"><br><br></div>
                        
</div>

<div class="span3">
<div class="list-group">

@foreach ($course as $item)
                <button type="button" value="{{ $item['english'] }}" class="list-group-item list-group-item-warning">
                    <div class="naming_reading_3">
                         {{ $item['english'].' - '. $item['russian']}}
                    </div>
                </button>
                
                @if ($loop->index==14)
                    @break
                @endif
@endforeach
</div>
</div>

<div class="span4">
<div class="list-group">

@foreach ($course as $item)
               @if ($loop->index>14)
                <button type="button" value="{{ $item['english'] }}" class="list-group-item list-group-item-warning">
                    <div class="naming_reading_3">
                         {{ $item['english'].' - '. $item['russian']}}
                    </div>
                </button>
                @endif
                @if ($loop->index==29)
                    @break
                @endif
@endforeach
</div>
</div>

<div class="span3">
<div class="list-group">

@foreach ($course as $item)
               @if ($loop->index>29)
                <button type="button" value="{{ $item['english'] }}" class="list-group-item list-group-item-warning">
                    <div class="naming_reading_3">
                         {{ $item['english'].' - '. $item['russian']}}
                    </div>
                </button>
                @endif
                @if ($loop->index==44)
                    @break
                @endif
@endforeach

</div>
</div>

</div>
</div>


                <div class="pagination centered_menu ">
                    <ul>
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>


  <script src="js/random_voice.js"></script>
 <script type="text/javascript">



window.onload = function (){

    utterance = new SpeechSynthesisUtterance("1");
utterance.volume = 0;
window.speechSynthesis.speak(utterance);

     var k = document.getElementsByTagName("button");
     for(var i = 0; i < k.length; i++)
          k[i].onclick = function (){
            $getSentence=this.value;
            $false_sent=0;
            $yes_no=0;
            random_voice() ;
            }
}
    </script>