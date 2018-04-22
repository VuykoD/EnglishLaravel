
     <script src="js/random_voice.js"></script>
     <script src="js/training-phrase.js"></script>
     <script src="js/jquery.min.js" type="text/javascript"></script>    

   <script>

        

        $(function () {
          $sound_type="course"
          $yes_no=0;
          $false_sent=0
utterance = new SpeechSynthesisUtterance("1");
utterance.volume = 0;
window.speechSynthesis.speak(utterance);

      
            

             var newText3 = $("context") // находим все параграфы
                .text()          // извлекаем текст из параграфов
                .split(" ")      // разбиваем текст по пробелам
                .join("</tran> <tran>"); // оборачиваем каждое слово в span
            newText3 = "<tran>" + newText3 + "</tran>";
            $("context").html(newText3)

            var newText3 = $("context") // находим все параграфы
                .html()          // извлекаем текст из параграфов
                .split(".")      // разбиваем текст по пробелам
                .join("</tran>.<tran>"); // оборачиваем каждое слово в span
            $("context").html(newText3)

            var newText3 = $("context") // находим все параграфы
                .html()          // извлекаем текст из параграфов
                .split("?")      // разбиваем текст по пробелам
                .join("</tran>?<tran>"); // оборачиваем каждое слово в span
            $("context").html(newText3)

             var newText3 = $("context") // находим все параграфы
                .html()          // извлекаем текст из параграфов
                .split("!")      // разбиваем текст по пробелам
                .join("</tran>!<tran>"); // оборачиваем каждое слово в span
            $("context").html(newText3)

            var newText3 = $("context") // находим все параграфы
                .html()          // извлекаем текст из параграфов
                .split(",")      // разбиваем текст по пробелам
                .join("</tran>,<tran>"); // оборачиваем каждое слово в span
            $("context").html(newText3)

            var newText3 = $("context") // находим все параграфы
                .html()          // извлекаем текст из параграфов
                .split(":")      // разбиваем текст по пробелам
                .join("</tran>:<tran>"); // оборачиваем каждое слово в span
            $("context").html(newText3)

            var newText3 = $("context") // находим все параграфы
                .html()          // извлекаем текст из параграфов
                .split(";")      // разбиваем текст по пробелам
                .join("</tran>:<tran>"); // оборачиваем каждое слово в span
            $("context").html(newText3)







     
var  takeSentence ='<span class="take-sentence"></span>';

        

   
            var newText2 = $("context") // находим все параграфы
                .html()          // извлекаем текст из параграфов
                .split(".") 
                .join('.'+takeSentence+'</bdo><br><bdo>'); // оборачиваем каждое слово в span
                newText2 = "<bdo>" + newText2 + "</bdo>";
            $("context").html(newText2)


            
            $("context").html(newText2)

            var newText2 = $("context") // находим все параграфы
                .html()          // извлекаем текст из параграфов
                .split("!") 
                .join('!'+takeSentence+'</bdo><br><bdo>'); // оборачиваем каждое слово в span
            
            $("context").html(newText2)

           var newText2 = $("context") // находим все параграфы
                .html()          // извлекаем текст из параграфов
                .split("?") 
                .join('?'+takeSentence+'</bdo><br><bdo>'); // оборачиваем каждое слово в span
            
            $("context").html(newText2)

           

            
            $('span').css('visibility', 'hidden')
$('bdo:first').wrap('<h3 class="sidebox-title"/>')
$ytuiy=$('bdo:eq(1)').text()
$ytuiy=$ytuiy.substring(0, $ytuiy.length - 1)
if ($ytuiy.length==0){$('bdo:eq(1)').text($ytuiy)}
            $('b').mouseenter(function(){
                     $(this).css('color', 'green')
            });
            $('b').mouseleave(function(){
                     $(this).css('color', '')
            });
            

            $('span').mouseenter(function(){
                     $(this).parent().css('background-color', 'rgb(150,210,150)')
            });
            $('span').mouseleave(function(){
                     $(this).parent().css('background-color', '')
            });



            $('bdo').mouseenter(function(){
                     $(this).find("span").css('visibility', 'visible')
            });

            $('bdo').mouseleave(function(){
                     $(this).find("span").css('visibility', 'hidden')
            });
            

  
            $("tran").on("click", function () {
                $getSentence= $(this).text();
   random_voice();


               // Переводчик Яндекс
  var req = new XMLHttpRequest();

  // Сохраняем ключ API, полученный со страницы https://tech.yandex.ru/keys/get/?service=trnsl
  // (с примером ниже работать не будет, нужно получить и вставить свой!)
  var API_KEY = 'trnsl.1.1.20170425T125118Z.e7c8287e553abe44.904be6c530de41a5f6b408011e6e1f7116af936e';

  // Сохраняем адрес API
  var url = 'https://translate.yandex.net/api/v1.5/tr.json/translate';

  // Формируем полный адрес запроса:
  url += '?key=' + API_KEY + '&text='+$getSentence+'&lang=en-ru'; // добавляем к запросу ключ API


  // Таким образом формируется строка вида:
  // https://translate.yandex.net/api/v1.5/tr.json/translate?key=example_api_key&text=кролики&lang=ru-en
  
  var translate = document.querySelector('.translate');

  // Назначаем обработчик события load
  req.addEventListener('load', function () {
    
    var response = JSON.parse(req.response); // парсим его из JSON-строки в JavaScript-объект

    // Проверяем статус-код, который прислал сервер
    // 200 — это ОК, остальные — ошибка или что-то другое
    if (response.code !== 200) {
      translate.innerHTML = 'Произошла ошибка при получении ответа от сервера:\n\n' + response.message;
      return;
    }

    // Проверяем, найден ли перевод для данного слова
    if (response.text.length === 0) {
      translate.innerHTML = 'К сожалению, перевод для данного слова не найден';
      return;
    }

    // Если все в порядке, то отображаем перевод на странице
    translate.innerHTML = response.text.join('<br>'); // вставляем его на страницу
  });

  // Обработчик готов, можно отправлять запрос
  // Открываем соединение и отправляем
  req.open('get', url);
  req.send();
// Конец переводчика

            });
           ////////////////////////////////////////////////////////////////////////////////////////////////////
             $("span").on("click", function () {



               $getSentence= $(this).parent().text();

               // Переводчик Яндекс
  var req = new XMLHttpRequest();

  // Сохраняем ключ API, полученный со страницы https://tech.yandex.ru/keys/get/?service=trnsl
  // (с примером ниже работать не будет, нужно получить и вставить свой!)
  var API_KEY = 'trnsl.1.1.20170425T125118Z.e7c8287e553abe44.904be6c530de41a5f6b408011e6e1f7116af936e';

  // Сохраняем адрес API
  var url = 'https://translate.yandex.net/api/v1.5/tr.json/translate';

  // Формируем полный адрес запроса:
  url += '?key=' + API_KEY + '&text='+$getSentence+'&lang=en-ru'; // добавляем к запросу ключ API


  // Таким образом формируется строка вида:
  // https://translate.yandex.net/api/v1.5/tr.json/translate?key=example_api_key&text=кролики&lang=ru-en
  
  var translate = document.querySelector('.translate');

  // Назначаем обработчик события load
  req.addEventListener('load', function () {
    var response = JSON.parse(req.response); // парсим его из JSON-строки в JavaScript-объект

    // Проверяем статус-код, который прислал сервер
    // 200 — это ОК, остальные — ошибка или что-то другое
    if (response.code !== 200) {
      translate.innerHTML = 'Произошла ошибка при получении ответа от сервера:\n\n' + response.message;
      return;
    }

    // Проверяем, найден ли перевод для данного слова
    if (response.text.length === 0) {
      translate.innerHTML = 'К сожалению, перевод для данного слова не найден';
      return;
    }

    // Если все в порядке, то отображаем перевод на странице
    translate.innerHTML = response.text.join('<br>'); // вставляем его на страницу
  });

  // Обработчик готов, можно отправлять запрос
  // Открываем соединение и отправляем
  req.open('get', url);
  req.send();
// Конец переводчика

random_voice();

            });

 
        
        });
   
    </script>
    <style>


.take-sentence {
    border: 1px solid black;
    border-radius: 2px;
    display: inline-block;
    margin-bottom: -3px;
    width: 13px;
    height: 18px;
    background-color:  rgb(150,210,150); /* Цвет фона */ 
}

        tran:hover {
  background-color: rgb(150,210,150);
}

 

        bdo:hover {
  background-color: rgb(230,230,230);
}
context {
  line-height: 1.8;
}

    </style>







<br><br><br><br>

                    <div class="span2 centered_menu  img-sort-big">
                      <div><img src="images/sort/humor_cat.jpg" class="img-sort-big"><br><br></div>
                    </div>



                    <!--  index=_GET[index];
                     name=_SESSION['lists'][$index]['name'].'.';
                     text=_SESSION['lists'][$index]['text_'];         -->            
                  

<div class="span7 sidebar">
    <div class="sidebox minHeight">

       <!--  < $text = str_replace("\\","", $text); >
        < $text = str_replace("a.m.","a:m.", $text); >
        < $text = str_replace('"',"", $text); >
        < $text = str_replace('“',"", $text); >
        < $text = str_replace('”',"", $text); >
        < $text = str_replace('_',"", $text); > -->
           <font size="4" face="Verdana"><context><!-- < echo $name;> < echo $text;> -->{{ $article_name}}. {{ $article_text}}

              </context></font>

<br>
<div class="like font_grey">
    <b class="social foundicon-thumb-up size_20 padding_20" title="Понравилось:)"></b>
    <i><sup>210</sup></i>
    <b class="general foundicon-mail size_20 padding_20" title="Поделиться"></b>
</div>    
<br><br>


                    <div class="span4">
                    </div>
                    <div class="span4">
                    <a class="btn btn-success centered_menu_2 margin_top_20" href="#">Изучил</a>
                    </div>
                    <div class="span4">
                    </div>
                                    
<br><br><br>


     </div>


</div>



                        

       

 <div class="span3 sidebar">               
   <div class="sidebox">
    <h4 class="sidebox-title">Подсказка:</h4>
    <div class="translate">Если Вам не понятно какое-либо слово или предложение, нажмите на него и здесь выскочит перевод:)</div>
    </div>
 </div>

   </div>
 </div>

