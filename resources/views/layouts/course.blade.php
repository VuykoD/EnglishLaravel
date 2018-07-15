@extends('app')
@section('content')           

<br>
@guest
@else
<div class="container">
    <div class="row-fluid">
        <div class="span5">
        </div>
        <div class="span6">

            <a class="btn btn-info btn-large centered_menu_2" href="vocabulary?id_course={{$id_course}}&id_user={{ Auth::user()->id}}&GetWords=1" >Отобрать на изучение</a>
        </div>
    </div>
</div>
@endguest                    
<br>

<div class="container">
    <div class="row-fluid">
        <div class="span2 centered_menu  img-sort-big">
            <div><img src="images/sort/school.jpg" class="img-sort-big"><br><br></div>

        </div>

        <div class="span10">
            <div class="list-group">

                @foreach ($course as $item)
                <div class="row-fluid">
                    @guest
                    @else
                    <button type="button" class="add btn @if ($item['progress']==Auth::user()->id) btn-danger  @else btn-success @endif" id="{{$item['id']}}">@if ($item['progress']==Auth::user()->id)-@else+@endif</button>
                    @endguest
                    <button type="button" value="{{ $item['english'] }}" class="list-group-item list-group-item-warning" title="{{$item['russian']}}">
                        <div class="naming_reading_3">
                         {{ $item['english'].' - '. $item['russian']}}
                     </div>
                 </button>
             </div>
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

$(".add").click(function(){
    if ($(this).text()=='+'){   
        $id_add=$(this).attr('id');
        $id_course={{$id_course}}
        $.ajax({
            type:'POST',
            url:'/ajaxRequestAddOneString',
            data:{$id_add:$id_add, $id_course:$id_course, _token: '{{csrf_token()}}'},
            success:function(data){
              $("#"+$id_add).text('-');
              $("#"+$id_add).removeClass('btn-success');
              $("#"+$id_add).addClass('btn-danger');
          }
      });
    }
});    







window.onload = function (){




    $sound_type="course"
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
@endsection