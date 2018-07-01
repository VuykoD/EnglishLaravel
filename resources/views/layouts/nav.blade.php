<!DOCTYPE HTML>
<html>
<head>
    <meta https-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>English Is Fun - Welcome</title>
    <meta name="description" content="">
    <meta name="author" content="">  
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="js/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" /> 
    <link href="js/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" /> 
    <link href="css/custom.css" rel="stylesheet" type="text/css" />

    <script src="js/jquery.min.js"></script>


   </script>
</head>


<body id="pageBody">
<div id="decorative2">
    <div class="container">

        <div class="divPanel topArea notop nobottom">
            <div class="row-fluid">
                <div class="span12">

                    <div id="divLogo" class="pull-left absolute">
                        <a href="index.php" id="divSiteTitle">English Is Fun</a><br />
                        <a href="index.php" id="divTagLine">Это будет легко</a>
                    </div>

                    <div class="pull-left absolute2">
                    <div class="navbar "> <!-- echo htmlspecialchars($_SESSION['visible_user'], ENT_QUOTES, 'UTF-8' -->
                         @guest

                        @else

                        
                        <div>
                            <ul class="nav nav-pills ddmenu">
                               <li class="dropdown">
                                    <a href="#about.html" class="dropdown-toggle">{{ Auth::user()->name }}<br><b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                                        <li disabled><a href="myvocabulary?user=@guest none @else{{Auth::user()->id}}@endguest&type=video">Мой словарь</a></li>
                                                        <li><a href="#" class="disabled" >История</a></li>
                                                        <li><a href="#2-column.html" class="disabled">Настройки</a></li>
                                                        <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                               {{ __('Выход') }}
                                                             </a>
                                                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                       @csrf
                                                             </form>
                                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                         @endguest
                    </div>
                    </div>

                    <div id="divMenuRight" class="pull-right">
                    <div class="navbar ">
                        <button type="button" class="btn btn-navbar-highlight btn-large btn-primary margin_top" data-toggle="collapse" data-target=".nav-collapse">
                            NAVIGATION <span class="icon-chevron-down icon-white"></span>
                        </button>
                        <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu">
                                 <li class="dropdown ">
                                    <a href="index.php" class="dropdown-toggle">Home</b></a>
                                </li>
                                <li class="dropdown ">
                                    <a class="dropdown-toggle">Курсы<br><b class="caret"></b></a>
                                    <ul class="dropdown-menu ">
                                                        <li><a href="course?course=English_before_school">Раннее развитие</a></li>
                                                        <li><a href="#full.html">1-ый класс</a></li>
                                                        <li class="dropdown">
                                                          <a href="#" class="dropdown-toggle">2-ой класс &nbsp;&raquo;</a>
                                                              <ul class="dropdown-menu sub-menu">
                                                                 <li><a href="#">Украина</a></li>
                                                                 <li><a href="#">Россия</a></li>
                                                            </ul>
                                                          </li>  
                                                        <li class="dropdown">
                                                          <a class="dropdown-toggle">3-ий класс &nbsp;&raquo;</a>
                                                              <ul class="dropdown-menu sub-menu">
                                                                 <li><a href="courses?course=3_Ukraine_2017">Украина</a></li>
                                                                 <li><a href="#">Россия</a></li>
                                                            </ul>
                                                        </li> 
                                                        <li><a href="#3-column.html">4-ый</a></li>
                                                        <li><a href="#3-column.html">5-ый</a></li>
                                                        <li><a href="#3-column.html">6-ой</a></li>
                                                        <li><a href="#3-column.html">7-ой</a></li>
                                                        <li><a href="#3-column.html">8-ой</a></li>
                                                        <li><a href="#3-column.html">9-ый</a></li>
                                                        <li><a href="#3-column.html">10-ый</a></li>
                                                        <li><a href="#3-column.html">11-ый</a></li>
                                                          <li class="dropdown">
                                                          <a href="#" class="dropdown-toggle">Курсы &nbsp;&raquo;</a>
                                                              <ul class="dropdown-menu sub-menu">
                                                                 <li><a href="#">Beginer</a></li>
                                                                 <li><a href="#">Elementary</a></li>
                                                                 <li><a href="course?course=Intermediate_Murphy_Unit_3_Present_continuous_and_present_simple">Pre-intermediate</a></li>
                                                                 <li><a href="#">Intermediate</a></li>
                                                                 <li><a href="#">Upper-intermediate</a></li>
                                                                 <li><a href="#">Advanced</a></li>
                                                            </ul>
                                                          </li> 
                                                          <li><a href="#3-column.html">Грамматика</a></li>
                                                          <li class="dropdown">
                                                          <a class="dropdown-toggle">Разговорник &nbsp;&raquo;</a>
                                                              <ul class="dropdown-menu sub-menu">

                                                                 <li><a href="courses.php?course=1000_popular_phrases">1000 популярных фраз</a></li>
                                                                 <li><a href="courses.php?course=tourist_phrases">Фразы для туриста</a></li>
                                                            </ul>
                                                        </li> 
                                    </ul>
                                </li>
                                <li class="dropdown ">
                                    <a href="reading?type=9" class="dropdown-toggle">Чтение<br><b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                                        <li><a href="reading?type=1">Юмор</a></li>
                                                        <li><a href="reading?type=2">Цитаты</a></li>
                                                        <li><a href="reading?type=3">Советы</a></li>
                                                        <!-- <li><a href="#2-column.html">Занимательные картинки</a></li> -->
                                    </ul>
                                </li>
                                <li class="dropdown ">
                                    <a href="video?user=@guest none @else{{Auth::user()->id}}@endguest&type=9" class="dropdown-toggle">Видео<br><b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                                        <li><a href="video?user=@guest none @else{{Auth::user()->id}}@endguest&type=9">Все видео</a></li>
                                                        <li><a href="video?user=@guest none @else{{Auth::user()->id}}@endguest&type=1">Мультфильмы</a></li>
                                                        <li><a href="video?user=@guest none @else{{Auth::user()->id}}@endguest&type=2">Интересное</a></li>
                                                        <li><a href="video?user=@guest none @else{{Auth::user()->id}}@endguest&type=3">Видеоуроки</a></li>
                                                        <li><a href="video?user=@guest none @else{{Auth::user()->id}}@endguest&type=4">Музыка</a></li>
                                                        <li><a href="video?user=@guest none @else{{Auth::user()->id}}@endguest&type=5">Фильмы</a></li>
                                    </ul>

                                </li>
                                <li class="dropdown ">
                                    <a  class="dropdown-toggle">Игры<br><b class="caret"></b></a>
                                    <ul class="dropdown-menu">

                                                        <li><a href="star_war">Star wars</a></li>
                                                        <li><a href="#game.php">Иследователи</a></li>
                                                        <li><a href="@guest # @else training?user={{Auth::user()->id}}&type=video @endguest">ЗвукоДанетка</a></li>
                                                        <li><a href="#2-column.html" disabled>Тесты</a></li>
                                                        <li><a href="@guest # @else training?user={{Auth::user()->id}}&type=video @endguest">Тренажеры</a></li>
                                                          
                                                          
         
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
<script>
      $('.disabled').attr('title',"на стадии разработки");
</script>