@extends('app')
@section('content')


<br>
<center>
  <h5>Пользаватель <b style="color:green">{{ strtoupper(Auth::user()->name) }}</b> зарегестрирован/а {{Auth::user()->created_at->toDateString()}}</h5><hr>
</center>
<div class="container">
 <div class="row-fluid">
  @if ($last_visit)
  <h5>Последний раз заходил/а: {{explode(" ", $last_visit->updated_at)[0]}}</h5>
  <div>Изучено: видео новое - {{1*($last_visit->video_new)}}</div>
  <div style="padding-left:62px">видео повтор - {{1*($last_visit->video_repeat)}}</div>
  <div style="padding-left:62px">видео екзамен - {{1*($last_visit->video_test)}}</div>
  <div style="padding-left:62px">курсы новое - {{1*($last_visit->course_new)}}</div>
  <div style="padding-left:62px">курсы повтор - {{1*($last_visit->course_repeat)}}</div>
  <div style="padding-left:62px">курсы екзамен - {{1*($last_visit->course_test)}}</div>
  <hr>
  @endif  

  <center>
    Cтатистика
  </center>
  <table id="example" class="display" style="width:100%">
    <thead>
      <tr>
        <th></th>
        <th></th>
        <th></th>
        <th>Видео</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th>Курсы</th>
        <th></th>
        <th></th>
      </tr>
      <tr>
        <th></th>
        <th>новое</th>
        <th>повтор</th>
        <th>екзамен</th>
        <th>изучено</th>
        <th>сумма</th>
        <th>новое</th>
        <th>повтор</th>
        <th>екзамен</th>
        <th>изучено</th>
        <th>сумма</th>
      </tr>
      <tr>
        <th>Всего</th>
        <th>{{$data_video_new}}</th>
        <th>{{$data_video_repeat}}</th>
        <th>{{$data_video_exam}}</th>
        <th>{{$data_video_learnt}}</th>
        <th>{{$data_video_all}}</th>
        <th>{{$data_course_new}}</th>
        <th>{{$data_course_repeat}}</th>
        <th>{{$data_course_exam}}</th>
        <th>{{$data_course_learnt}}</th>
        <th>{{$data_course_all}}</th>

      </tr>
    </thead>
    <tbody Class="rows">
    </table>
    <br>
  </div> 
</div>   
<br>







<script type="text/javascript">

</script>
@endsection




