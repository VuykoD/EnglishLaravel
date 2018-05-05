<br>
   <btn class="vocabulary">
      <div class="index"></div>
      <div class="text"></div>
      <div class="text"></div>
      <div class="index"><btn class="btn sort_quantity">+</btn><btn class="btn sort_date">-</btn></div>
   </btn>
   <br>
<div class="costumer"> 

</div>

<!-- @foreach ($my_table as $list)
   {{$loop->index+1}} -
   {{$list['id']}} -
   {{$list->base_course->english}} - 
   {{$list->base_course->russian}} -
   {{$list['quantity']}} -
   {{$list['next_date']}}
   <br>
@endforeach --> 







 <script src="js/jquery.min.js" type="text/javascript"></script> 

<script type="text/javascript">

$myVocabulary = {!!$my_table!!}

$(".sort_quantity").on('click', function () {
    $(".costumer").empty();
    $myVocabulary = $myVocabulary.slice(0);
    $myVocabulary.sort(function(a,b) {
      return - a.quantity + b.quantity;
    });
    list() 
})  
$(".sort_date").on('click', function () {
    $(".costumer").empty();
    $myVocabulary = $myVocabulary.slice(0);
    $myVocabulary.sort(function(a,b) {
      return  a.next_date - b.next_date;
    });
    list() 
})

function list()   { 
$.each($myVocabulary,function(index,value) {
  var $index1=index+1
  //$(".costumer").text($text+$(this)[0]['id']+" - ");
  $(".costumer").append(
    '<btn class="vocabulary">'+
    '<div class="index">' +$index1+"</div>"+
    //value['id']+" - "+
    '<div class="text">' +value['base_course']['english']+" </div>"+
    '<div class="text">' +value['base_course']['russian']+"</div>"+
    '<div class="index">' +value['quantity']+"</div>"+
    value['next_date']+
    '</btn>'+
    "<br>"
    );
})
}
list() 
</script>





