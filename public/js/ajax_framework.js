/* ------------------------ */
/*  XMLHTTPRequest Enable   */
/* ------------------------ */
function type_brouser() {
var request_type;
var browser = navigator.appName;
if(browser == "Microsoft Internet Explorer"){
request_type = new ActiveXObject("Microsoft.XMLHTTP");
}else{
request_type = new XMLHttpRequest();
}
return request_type;
}

var http = type_brouser();


/* ----------------------- */
/*      LOGIN              */
/* ----------------------- */
/* Переменная nocache содержит случайное число, добавляемое в запрос
   для предотвращения кеширования браузером запроса */
var nocache = 0;

function row_is_learned() {

        d = new Date();
 var text=""  
         var d1=new Date();
        d1.setDate(d1.getDate() + 1); 
        day=d1.getDate();
        month=d1.getMonth()+1;
        if (day<10) {day="0"+day};
        if (month<10) {month="0"+month};  
        next_day = d1.getFullYear() + '-' + month+ '-' + day  ;
        arr_date[row_arr[i]-1]=next_day;
for (var i=0; i<row_arr.length;i++) {


 arr_date[row_arr[i]-1]=next_day;
   arr_quantity[row_arr[i]-1]=1; 


if (i==0){
        var text ='i'+(1*i+1)+'='+row_arr_id_base[i]+'&i_session'+(1*i+1)+'='+(row_arr[i]-1)}
          else{
var text =text+'&i'+(1*i+1)+'='+row_arr_id_base[i]+'&i_session'+(1*i+1)+'='+(row_arr[i]-1)}
if (i==row_arr.length-1){var text =text+'&next_day='+next_day }       
}
row_arr=[]
row_arr_id_base=[]


http.open('get', 'base.php?'+text);
http.onreadystatechange = loginReply;
http.send(null);
}

function i_know_this() {

        d = new Date();
        var text=""  
        var d1=new Date();
        d1.setDate(d1.getDate() + 30); 
        day=d1.getDate();
        month=d1.getMonth()+1;
        if (day<10) {day="0"+day};
        if (month<10) {month="0"+month};  
        next_day = d1.getFullYear() + '-' + month+ '-' + day  ;
        arr_date[row_arr[IknowButton-1]-1]=next_day;
        arr_quantity[row_arr[IknowButton-1]-1]=4;
        
        var	text ='i1='+row_arr_id_base[IknowButton-1]+'&next_day='+next_day+'&i_session='+row_arr[IknowButton-1]
row_arr=[]
row_arr_id_base=[]


http.open('get', 'base_i_know.php?'+text);
http.onreadystatechange = loginReply;
http.send(null);
}

function row_is_learned_old() {


//console.log(arr_date);
 
        d = new Date();
 var text=""       
if (test==0) {}
   for (var i=0; i<max_task;i++) {   
   	   



        if (row_mistake[i]==0) {


        arr_quantity[row_arr[i]-1]=1*arr_quantity[row_arr[i]-1]+1
    }else{
        if ((arr_quantity[row_arr[i]-1]>=2)&&(test==0)) {arr_quantity[row_arr[i]-1]=1*arr_quantity[row_arr[i]-1]-1}
    }



           var d1=new Date();
           
       if  (arr_quantity[row_arr[i]-1]==1)   {d1.setDate(d1.getDate() + 2);} 
       if  (arr_quantity[row_arr[i]-1]==2)   {d1.setDate(d1.getDate() + 5);}
       if  (arr_quantity[row_arr[i]-1]==3)   {d1.setDate(d1.getDate() + 10);}
       if  (arr_quantity[row_arr[i]-1]==4)   {d1.setDate(d1.getDate() + 10);}
       if  (arr_quantity[row_arr[i]-1]==5)   {d1.setDate(d1.getDate() + 100);}


        day=d1.getDate();
        month=d1.getMonth()+1;
        if (day<10) {day="0"+day};
        if (month<10) {month="0"+month};  
        next_day = d1.getFullYear() + '-' + month+ '-' + day  ;
        arr_date[row_arr[i]-1]=next_day;



        if (i==0){
        	var text ='i'+(1*i+1)+'='+row_arr_id_base[i]+'&quantity'+(1*i+1)+'='+arr_quantity[row_arr[i]-1]+'&date'+(1*i+1)+'='+arr_date[row_arr[i]-1]+'&i_session'+(1*i+1)+'='+(row_arr[i]-1) }
        	else{
var text =text+'&i'+(1*i+1)+'='+row_arr_id_base[i]+'&quantity'+(1*i+1)+'='+arr_quantity[row_arr[i]-1]+'&date'+(1*i+1)+'='+arr_date[row_arr[i]-1]+'&i_session'+(1*i+1)+'='+(row_arr[i]-1) }
 } 
row_mistake=[]      
row_arr=[]
row_arr_id_base=[]


http.open('get', 'base_old.php?'+text);
http.onreadystatechange = loginReply;
http.send(null);
//console.log(arr_quantity);
}



function loginReply() {
if(http.readyState == 4){ 
var response = http.responseText;
//console.log(1)
//arr_quantity=<?php echo "['".implode("','", $_SESSION['quantity'])."']"; ?>;
//console.log(arr_quantity)
  
}
 }