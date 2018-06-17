function leader_sound_game() {
  $.ajax({        
    type:'get',
    url:'/ajaxRequestSoundGame',
    data:{user_id:$user_id,  _token: '{{csrf_token()}}'},

    success:function(data){
      $user_record=data['$user_record'];
      $site_record=data['$site_record'];
      $("#site_record").text($site_record);
      $("#user_record").text($user_record);
    }
  });   
}

function insert_statistics_sound_game() {
  $.ajax({        
    type:'get',
    url:'/ajaxRequestSoundGame',
    data:{user_id:$user_id, user_record:$user_record, _token: '{{csrf_token()}}'},
  });   
}

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
   if (row_arr_id_base[i]==row_arr_id_base[0]){
         if (i>=1){return;}
   }

$.ajax({        
           type:'get',
           url:'/ajaxRequest',
           data:{i1:row_arr_id_base[i], next_date:next_day, quantity:'1',  sound_type:$sound_type,  _token: '{{csrf_token()}}'},
           success:function(success){
           }
        });
       
}
row_arr=[]
row_arr_id_base=[]



}

function i_know_this() {


        d = new Date();
        var text=""  
        var d1=new Date();
        d1.setDate(d1.getDate() + 5); 
        day=d1.getDate();
        month=d1.getMonth()+1;
        if (day<10) {day="0"+day};
        if (month<10) {month="0"+month};  
        next_day = d1.getFullYear() + '-' + month+ '-' + day  ;
        arr_date[row_arr[IknowButton-1]-1]=next_day;
        arr_quantity[row_arr[IknowButton-1]-1]=4;
        
         
      $.ajax({        
           type:'get',
           url:'/ajaxRequest',
           data:{i1:row_arr_id_base[IknowButton-1], next_date:next_day, quantity:'4', sound_type:$sound_type, _token: '{{csrf_token()}}'},
           success:function(success){
           }
        });

row_arr=[]
row_arr_id_base=[]

}



function row_is_learned_old() {


 
        d = new Date();
       var text=""       

   for (var i=0; i<max_task;i++) {   
   	   



        if (row_mistake[i]==0) {


        arr_quantity[row_arr[i]-1]=1*arr_quantity[row_arr[i]-1]+1
    }else{
        if ((arr_quantity[row_arr[i]-1]>=2)&&(test==0)) {arr_quantity[row_arr[i]-1]=1*arr_quantity[row_arr[i]-1]-1}
    }



           var d1=new Date();
           
       if  (arr_quantity[row_arr[i]-1]==1)   {d1.setDate(d1.getDate() + 2);} 
       if  (arr_quantity[row_arr[i]-1]==2)   {d1.setDate(d1.getDate() + 5);}
       if  (arr_quantity[row_arr[i]-1]==3)   {d1.setDate(d1.getDate() + 7);}
       if  (arr_quantity[row_arr[i]-1]==4)   {d1.setDate(d1.getDate() + 3);}
       if  (arr_quantity[row_arr[i]-1]==5)   {d1.setDate(d1.getDate() + 100);}


        day=d1.getDate();
        month=d1.getMonth()+1;
        if (day<10) {day="0"+day};
        if (month<10) {month="0"+month};  
        next_day = d1.getFullYear() + '-' + month+ '-' + day  ;
        arr_date[row_arr[i]-1]=next_day;

        if (row_arr_id_base[i]==row_arr_id_base[0]){
             if (i>=1){return;}
         }
         console.log(row_arr_id_base[i])
         $.ajax({        
           type:'get',
           url:'/ajaxRequest',
           data:{i1:row_arr_id_base[i], next_date:arr_date[row_arr[i]-1], quantity:arr_quantity[row_arr[i]-1],  sound_type:$sound_type, _token: '{{csrf_token()}}'},
           success:function(success){
           }
        });
 } 
row_mistake=[]      
row_arr=[]
row_arr_id_base=[]



}



