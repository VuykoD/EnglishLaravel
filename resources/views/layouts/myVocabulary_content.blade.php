<script src="js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
 
<script type="text/javascript" src="js/DataTables/datatables.min.js"></script>


<script>
$(document).ready(function() {
    $('#example').DataTable();
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
                <th>id-курса</th>
                <th>Кол.</th>
                <th>Дата</th>
            </tr>
        </thead>
        <tbody Class="rows">
        </tfoot>
        <thead>
            <tr>
                <th>№</th>
                <th>Начало</th>
                <th>Конец</th>
                <th>Английский</th>
                <th>Русский</th>
                <th>id-курса</th>
                <th>Кол.</th>
                <th>Дата</th>
            </tr>
        </thead>
    </table>
   <br>
  </div> 
</div>   
<br>

<!-- @foreach ($my_table as $list)
   {{$loop->index+1}} -
   {{$list['id']}} -
   {{$list->base_course->english}} - 
   {{$list->base_course->russian}} -
   {{$list['quantity']}} -
   {{$list['next_date']}}
   <br>
@endforeach --> 





<script type="text/javascript">

$myVocabulary = {!!$my_table!!}

console.log($myVocabulary)
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
    '<td>' +value['base_course']['id_video_name']+"</td>"+
    '<td>' +value['quantity']+"</td>"+
    '<td>' +value['next_date']+"</td>"+
    "</tr>"
    );
})
}
list() 
</script>





