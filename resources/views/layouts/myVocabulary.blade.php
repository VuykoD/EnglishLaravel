@extends('app')
@section('content')
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="js/DataTables/datatables.css"/>
 
<script type="text/javascript" src="js/DataTables/datatables.js"></script>


<script>
$(document).ready(function() {
    $('#example').DataTable({
      "columnDefs": [
            {
                "targets": [ 0 ],
                "searchable": false
            },
            {
                "targets": [ 1 ],
                "orderable": false,
                "searchable": false
            },
            {
               "targets": [ 2 ],
                "orderable": false,
                "searchable": false
            },
            {
               "targets": [ 7 ],
                "searchable": false
            } 
        ]
    }
      );
} );
</script> 

<br>
<div class="container">
   <div class="row-fluid">
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>№</th>
                <th>Начало</th>
                <th>Конец</th>
                <th>Английский</th>
                <th>Русский</th>
                <th>Название</th>
                <th>Кол.</th>
                <th>Дата</th>
            </tr>
        </thead>
        <tbody Class="rows">
    </table>
   <br>
  </div> 
</div>   
<br>

<!-- @foreach ($my_table as $list)
   {{$loop->index+1}} -
   {{$list['id']}} -
   {{$list->youtube->name}} - 
   {{$list->base_course->english}} - 
   {{$list->base_course->russian}} -
   {{$list['quantity']}} -
   {{$list['next_date']}}
   <br>
@endforeach --> 





<script type="text/javascript">

$myVocabulary = {!!$my_table!!}

function list()   { 
$.each($myVocabulary,function(index,value) {
  var $index1=index+1
  //$(".costumer").text($text+$(this)[0]['id']+" - ");
  $(".rows").append(
    '<tr>'+
    '<td>' +$index1+"</td>"+
    '<td>' +value['base_course']['start_']+"</td>"+
    '<td>' +value['base_course']['end_']+"</td>"+
    '<td>' +value['base_course']['english']+"</td>"+
    '<td>' +value['base_course']['russian']+"</td>"+
    '<td>' +value['youtube']['name']+"</td>"+
    '<td>' +value['quantity']+"</td>"+
    '<td>' +value['next_date']+"</td>"+
    "</tr>"
    );
})
}
list() 
</script>
@endsection




