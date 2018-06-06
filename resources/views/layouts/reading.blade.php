@extends('app')
@section('content')
<div class="container">
<div class="fixed">

<br>
<form>
                    <div class="span2">
                    </div>
                    <div class="span2">
                    <label class="checkbox inline">
                        <input type="checkbox" id="humor" value="option1" checked> Юмор
                    </label>
                    </div>
                    <div class="span2">
                    <label class="checkbox inline">
                        <input type="checkbox" id="quotation" value="option2" checked> Цитаты
                    </label>
                    </div>
                    <div class="span2">
                    <label class="checkbox inline">
                        <input type="checkbox" id="advice" value="option3" checked> Советы
                    </label>
                    </div>
                    <div class="span2">
                    <label class="checkbox inline">
                        <input type="checkbox" id="ifLearned" value="option4"> Скрыть изученое
                    </label>
                    </div>
                    <div class="span2"> 
                                    
</form>
<br><br>
</div>
</div>
<br><br><br><br>
<div class="container">
<div class="row-fluid">
                    <div class="span3 centered_menu  img-sort-big">
                        <div class="Юмор"><img src="images/sort/humor_cat.jpg" class="img-sort-big"><br><br></div>
                        <div class="Цитаты"><img src="images/sort/quotation.jpg" class="img-sort-big"><br><br></div>
                        <div class="Советы"><img src="images/sort/advice.jpg" class="img-sort-big"><br><br></div>
                    </div>



                    

<div class="span9">
<div class="list-group">
    



@foreach ($article as $item)
                <button type="button" class="list-group-item list-group-item-warning height_45 {{ $item['type']}}">
                <a href="readingMore?index_id={{$item['id']}}">
                <div class="span12"><img src="images/sort/kontakti.png" class="img-sort pull-left">
                <i class="general foundicon-minus font_green padding_20 size_16 pull-right">  </i>
                <div class="naming_reading">    
                <small>{{ $item['type']}}</small>
                </small><span class="naming_reading size_20">{{ $item['name']}}</span></div></div></a></button>    
                @if ($loop->index==14)
                    @break
                @endif
@endforeach


     <button type="button" value="" class="list-group-item list-group-item-warning height_45 learned">
            <a href="readingMore.php">
            <div class="span12"> 
            <img src="images/sort/kontakti.png" class="img-sort pull-left">
            <i class="general foundicon-checkmark font_green padding_20 size_20 pull-right"></i>
            <div class="naming_reading">
            <small>Галочка </small><span class=" size_20">Ставьте себе правильные цели </span>  
            </div>
            </div>
            </a>
     </button>
    
</div>
</div>

                        

       
</div>
</div>
                <div class="pagination centered_menu">
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

 <script src="js/jquery.min.js" type="text/javascript"></script>              

                <script type="text/javascript">

$type={{ $type}}; 
console.log($type);
if ($type==1){ $("#quotation").removeAttr("checked"); $("#advice").removeAttr("checked")}
if ($type==2){ $("#humor").removeAttr("checked"); $("#advice").removeAttr("checked")}
if ($type==3){ $("#humor").removeAttr("checked"); $("#quotation").removeAttr("checked")}

show_select()


$(".checkbox").on("click", function () {
 show_select()
});


function show_select(){
    if ($('#humor').is(':checked') == true) {$('.Юмор').show();}else{$('.Юмор').hide();}
    if ($('#quotation').is(':checked') == true) {$('.Цитаты').show();}else{$('.Цитаты').hide();}
    if ($('#advice').is(':checked') == true) {$('.Советы').show();}else{$('.Советы').hide();}
    if ($('#ifLearned').is(':checked') == true) {$('.learned').hide();}else{$('.learned').show();}
    }

</script>
@endsection