<!doctype html>
<html lang="en">
<head> <meta http-equiv="Cache-Control" content="private">
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="/template/css/normalize.css">
    <link rel="stylesheet" href="/template/css/bootstrap.min.css">
    <link rel="stylesheet" href="/template/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/template/css/index.css">
    <script src="/template/js/jquery-3.1.1.min.js"></script>
    <script src="/template/js/bootstrap.min.js"></script>
    <style>

        aside {
            display: inline-block;
            width:245px;
            height:400px;
            text-align: left;
            margin-left:7%;
            position:fixed;
            /*top: 27%;*/top: 164px;
            border: transparent;
            border-radius: 10px;
            opacity: 0.7;
            /*background-color: rgba(255, 255, 255, 0.7);*/
            background: transparent;
        }
        .one {}
        .two {}
        .three {}
        #sub-aside {
            width: 130px;
            height: 35px;
            background-color: #FFE39D;
            border-radius: 15px 15px 15px 15px;
            border: transparent;
            left: 45px;
            position: relative;
            margin-top: 15px;
            opacity: 1;
        }
        .janr-list {
            list-style:none;opacity: 1;padding-top:5px;padding-right:25px;
            padding-left: 5px;
        }
        .item-wrapper {
            border: transparent;
            border-radius: 10px;
            /*opacity: 0.7;*/
            background-color: rgba(0, 0, 0, 0.5);
            min-height: 293px;
            width: 795px;
            margin-bottom: 25px;
            padding-left: 21px;
        }
        .item-full {
            z-index: 39;
            width: 135px;
            border-style: solid;
            border-width: 1px;
            color: #000;
            border-color: #000000;
            background-color: #FFFF99;
            border-radius: 10px;
            padding-bottom: 4px;
            margin-left: 263px;
            position: relative;
            line-height: 29px;
            font-size: 20px;
            text-align: center;
            font-family: lato, sans-serif;
            font-weight: 300;
            left: 321px;
            top: 27px;
            height: 45px;
            opacity: 1;
        }
        /*body {
            overflow: hidden;
        }*/

        .menu1 , .menu2 , .menu3{
            width: 100%;
            height: 45px;
            border:1px solid white;
            -webkit-border-radius:;
            -moz-border-radius:;
            /*background-image: url("images/Untitled-1_03.png");*/
            border-radius:5px 5px 5px 5px ;
            background-color: white;
            text-align: center;
            /*margin-bottom: 5px;*/

        }
        .menu1 ul li a:hover {
            opacity:0.8;
        }
        .menu1:hover , .menu2:hover , .menu3:hover {
            opacity:0.8;
        }
        .menu1 a h2 , .menu2 a h2 , .menu3 a h2{
            margin:0!important;
            color: black;
            padding-top: 11px;
            font-size: 20px;
            font-weight: bold;
            text-transform: uppercase;
            text-decoration: none;
            text-align: left;
            padding-left: 20px;
        }
        .menu2{}
        .menu2 h2{}
        .menu3{}
        .menu3 h2{}
        .menu4{
            width: 100%;

            border-radius: 5px;

            background-color: white;
            opacity: 0.7;
        }
        .menu4 ul{
            list-style:none;
        }
        .menu4 ul li{}
        .menu4 ul li:hover{
            opacity:0.8;
        }
        .menu4 ul li a{
            text-decoration: none;
            color: black;
            font-size: 19px;
            display: block;
        }
    </style>
</head>
<body style="background-attachment: fixed;">
<header>
    <div class="container">
        <div class="row">
            <div class="header-wrapper" style="    margin-top: 2%;">
                <div class="logo-wrapper">
                    <div class="logo">
                        <img src="" alt="">
                    </div>
                </div>
                <div class="menu-wrapper">
                    <div class="menu">
                        <nav class="navbar navbar-default"  style="background: transparent; border: transparent;-webkit-box-shadow:none;box-shadow:none;">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="/" style="padding-left: 0px;"><img src="/template/img/logonew.png" alt="" style="position: relative;top: -10px;    width: 259px;"></a>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="padding-right: 53px;">

                                    <ul class="nav navbar-nav pull-right">
                                        <!-- <li class="dropdown" style="height: 45px;">
                                             <a href="#" id="d1" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Обмен книг<span class="caret"></span></a>
                                             <ul class="dropdown-menu">
                                                 <li><a href="change-get.php">Взять</a></li>
                                                 <li><a href="#">Отдать</a></li>
                                             </ul>
                                         </li>
                                         <li class="dropdown" style="height: 45px;">
                                             <a href="#" id="d2" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Обмен книг<span class="caret"></span></a>
                                             <ul class="dropdown-menu">
                                                 <li><a href="#">Взять</a></li>
                                                 <li><a href="#">Отдать</a></li>
                                             </ul>
                                         </li>
                                         <li class="icon">
                                             <a href="#" class="glyphicon glyphicon-log-in" style="    color: white;"></a>
                                         </li>
                                         <li class="icon">
                                             <a href="#" class="glyphicon glyphicon-plus" style="    color: white;"></a>
                                         </li>-->

                                        <li class="icon">
                                            <a href="#" id="vhod" onclick=" return login(e);" style="color: white;font-size: 18px;">Вход<img src="/template/img/icon%20vhod.png" style="position: relative;left: 20px;width: 25px;" alt=""></a>
                                        </li>
                                        <div id="icon-form" style="
                                width: 350px;
    height: 75px;
    z-index: 9999;
    display: none;
    position: absolute;
    top: 45px;
    background-color:transparent;">
                                            <form action="#" method="post">
                                                <input type="text" name="login" placeholder="login" id="icon-login" style="border-radius: 10px;
    width: 100px;
    height: 40px;
    position: relative;
    top: 10px;
    left: 0px;">
                                                <input type="text"  name="pass" placeholder="pass" id="icon-pass" style="border-radius: 10px;
    width: 100px;
    height: 40px;
    position: relative;
    top: 10px;
    left: 0px;">
                                                <input type="submit" id="icon-submit" style="
    width: 100px;
    height: 40px;
    position: relative;
    top: 10px;
    left: 0px;
    background: white;
    border-radius: 10px;">
                                            </form>
                                        </div>
                                        <li class="icon" style="margin-left: 20px;margin-right: 10px;">
                                            <a href="#" style="color: white;font-size: 18px;">Регистрация<img src="/template/img/icon%20reg.png" style="position: relative;left: 20px;width: 25px;" alt=""></a>
                                        </li>
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <section class="asside">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12"></div>
            </div>
        </div>
    </section>
    <aside style="">
        <div class="menu1" style="    border-radius: 5px 5px 0px 0px;"><a href="" style="text-decoration: none;"><h2>ТВОРЧЕСТВО</h2></a></div>
        <div class="menu4" style="border-radius: 0px 0px 0px 0px;">
            <ul style="margin-bottom: 0px;    border-radius: 5px 5px 0px 0px;" id="asside-menu">
                <li><a href="/stihi">Стихи</a></li>
                <li><a href="/prose">Проза</a></li>
                <li><a href="#">Видео</a></li>
                <li><a href="#">Аудио</a></li>
                <li><a href="#">Фотографии</a></li>
            </ul>
        </div>

        <div class="menu2" style="border-radius: 0px 0px 0px 0px;    margin-bottom: 2px;">
            <a href="" style="text-decoration: none;"><h2>Личный кабинет</h2></a>
        </div>

        <div class="menu3" style="border-radius: 0px 0px 5px 5px;">
            <a href="/rules" style="text-decoration: none;"> <h2>Правила</h2></a>
        </div>
    </aside>
</aside>
<section id="change-get" style="margin-top: 5%;opacity: 1;">


    <div class="container">
        <div class="row">
            <div class="col-lg-3">

            </div>
            <div class="col-lg-9">
                <div class="item-wrapper" style="min-height: 670px;
    width: 795px;
    margin-bottom: 25px;
    padding-left: 21px;">
                    <h2 style="color: #FFF;">Правила пользования сайтом</h2>
                    <p style="color: #FFF;">
                        Уважаемые читатели, мы рады приветствовать Вас на сайте Scarbnica.by.<br/>
                        На сайте можно бесплатно ознакомиться с творчеством талантливых опытных и только начинающих свой творческий путь ребят, женщин и мужчин. Рады приветствовать Вашему вниманию имеющийся материал по рубрикам: стихи, проза, музыка, видео, фото.<br/>

                        Чтобы выбрать интересный материал, нажмите на главной странице в меню сайта пункт «Творчество» из раскрывающегося списка выберите необходимую рубрику.<br/>

                        На каждой странице раздела отображается краткое описание материалов этой рубрики. Чтобы прочитать материал полностью нажмите на ссылку «читать дальше..» под кратким описанием материала.<br/>
                        Чтобы оставить комментарий и оценить материалы или добавить запись в гостевую книгу нужно зарегистрироваться.<br/>

                        Но наш сайт не только для реализации в себе потенциала критика, хотя это тоже безусловно заслуживающая уважения роль.<br/>
                        Но не менее важно реализовать на сайте лучшие проявления Вашего таланта. Регистрируйтесь и добавляйте свое творчество из личного кабинета. Поля при регистрации "Имя" и "Фамилия" не обязательные для заполнения, а значит Вы можете инкогнито размещать свои материалы и получать обратный отклик от широкой аудитории.<br/>

                        Обращаем Ваше внимание, все размещенные на сайте материалы являются собственностью размещающих эти материалы авторов и охраняются Законом об авторском праве Республики Беларусь. Полное или частичное копирование материалов сайта без согласования с редакцией запрещено.<br/>
                    </p>


                </div>


            </div> <!-- Col-lg-9 -->
        </div><!-- row-->

        <!--------------------------------------------------  -->
<!--        <div class="row">-->
<!--            <div class="col-lg-3">-->
<!---->
<!--            </div>-->
<!--            <div class="col-lg-9">-->
<!--                <div class="item-wrapper" style="min-height: 350px;-->
<!--    width: 795px;-->
<!--    margin-bottom: 25px;-->
<!--    padding-left: 21px;">-->
<!---->
<!---->
<!--                    <div class="block-wrapper" style="color: #FFF;padding-bottom: 15px;">-->
<!--                        <div class="item-title" style=" margin-right: 15px;-->
<!--    font-family: Geneva, Arial, Helvetica, sans-serif;-->
<!--    padding-left: 0px;-->
<!--    display: inline-block;-->
<!--    position: relative;-->
<!--    top: 10px;-->
<!--    /* padding-bottom: 20px; */-->
<!--    padding-top: 8px;-->
<!--    margin-bottom: 15px;-->
<!--    line-height: 29px;-->
<!--    color: #FFF;-->
<!--    font-size: 20px;-->
<!--    text-align: left;-->
<!--    width: 100%;"><a href="#" style="text-decoration: none;color: #FFF;">Название:  Мы с истекшим сроком годности</a> </div>-->
<!--                        <div class="item-author" style=" display: inline-block;-->
<!--    position: relative;-->
<!---->
<!--    margin-bottom: 10px;-->
<!--    line-height: 29px;-->
<!--    color: #FFF;-->
<!--    font-size: 20px;-->
<!--    text-align: left;">Автор:Стейс Крамер</div>-->
<!--                        <div class="item-text" style="position: relative;-->
<!--    top: -7px;-->
<!--    line-height: 29px;-->
<!--    color: #FFF;-->
<!--    font-size: 17px;-->
<!--    text-align: left;">Джине 17 лет, и у нее все прекрасно - любящая семья, младшая сестренка, симпатичный парень, школу она заканчивает как одна из лучших учениц и готовится...</div>-->
<!--                        <div class="frame-wrapper" style="position: relative;-->
<!--    top: -8px;-->
<!--    margin-top: 15px;-->
<!--    background-color: red;-->
<!--    width: 97%;-->
<!--    height: 220px;-->
<!--    padding-bottom: 47px;"></div>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!--            </div> <!-- Col-lg-9 -->-->
<!--        </div><!-- row-->-->

        <!----------------------------------------- -->
    </div><!-- container -->
</section>
</main>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="copyright" style="text-align: center;">
                    <h6 style="color: white;font-size: 15px;">ВСЕ ПРАВА ЗАЩИЩЕНЫ</h6>
                </div>
            </div>
        </div>
    </div>



    <script src="/template/js/script.js"></script>
</footer>
<script>
    $(document).ready(function(){

        function login() {
            if ($("icon-form").css("display" == 'none') Element.css("display" == 'block');
            //else Element.style.color = 'green';
            return false;
        }
            console.log("dfsfd");
        $("#vhod").onclick(function(){
            $("icon-form").show();
            console.log("11");
        })
    });
</script>
</body>
</html>

<!--
-->


