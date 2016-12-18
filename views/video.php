<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>

        aside {
            display: inline-block;
            width:245px;
            height:400px;
            text-align: left;
            margin-left:7%;
            position:fixed;
            top: 164px;
            border: transparent;
            border-radius: 10px;
            opacity: 0.7;
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
            background-color: rgba(0, 0, 0, 0.5);
            min-height: 293px;
            width: 795px;
            margin-bottom: 25px;
            padding-left: 21px;
        }
        .item-full {
            z-index: 39;
            width: 206px;
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
            left: 75px;
            top: 30px;
            height: 45px;
            opacity: 1;
        }

        .menu1 , .menu2 , .menu3{
            width: 100%;
            height: 45px;
            border:1px solid white;
            -webkit-border-radius:;
            -moz-border-radius:;
            border-radius:5px 5px 5px 5px ;
            background-color: white;
            text-align: center;

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
<body>
<header>
    <?php include "header.php" ?>
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
                <li><a href="#">Стихи</a></li>
                <li><a href="#">Проза</a></li>
                <li><a href="#">Видео</a></li>
                <li><a href="#">Аудио</a></li>
                <li><a href="#">Фотографии</a></li>
            </ul>
        </div>

        <div class="menu2" style="border-radius: 0px 0px 0px 0px;    margin-bottom: 2px;">
            <a href="" style="text-decoration: none;"><h2>Личный кабинет</h2></a>
        </div>

        <div class="menu3" style="border-radius: 0px 0px 5px 5px;">
            <a href="" style="text-decoration: none;"> <h2>Правила</h2></a>
        </div>
</aside>
<section id="change-get" style="margin-top: 5%;opacity: 1;">


    <div class="container">

        <!--------------------------------------------------  -->
        <div class="row">
            <div class="col-lg-3">

            </div>
            <div class="col-lg-9">
                <div class="item-wrapper" style="min-height: 350px;
    width: 795px;
    margin-bottom: 25px;
    padding-left: 21px;">


                    <div class="block-wrapper" style="color: #FFF;padding-bottom: 15px;">
                        <div class="item-title" style=" margin-right: 15px;
    font-family: Geneva, Arial, Helvetica, sans-serif;
    padding-left: 0px;
    display: inline-block;
    position: relative;
    top: 10px;
    padding-top: 8px;
    margin-bottom: 15px;
    line-height: 29px;
    color: #FFF;
    font-size: 20px;
    text-align: left;
    width: 100%;"><a href="#" style="text-decoration: none;color: #FFF;">Название:  Мы с истекшим сроком годности</a> </div>
                        <div class="item-author" style=" display: inline-block;
    position: relative;

    margin-bottom: 10px;
    line-height: 29px;
    color: #FFF;
    font-size: 20px;
    text-align: left;">Автор:Стейс Крамер</div>
                        <div class="item-text" style="position: relative;
    top: -7px;
    line-height: 29px;
    color: #FFF;
    font-size: 17px;
    text-align: left;">Джине 17 лет, и у нее все прекрасно - любящая семья, младшая сестренка, симпатичный парень, школу она заканчивает как одна из лучших учениц и готовится...</div>
                        <div class="frame-wrapper" style="position: relative;
    top: -8px;
    margin-top: 15px;
    background-color: red;
    width: 97%;
    height: 220px;
    padding-bottom: 47px;"></div>

                    </div>
                </div>


            </div> <!-- Col-lg-9 -->
        </div><!-- row-->
        <div class="row">
            <div class="col-lg-3">

            </div>
            <div class="col-lg-9">
                <div class="item-wrapper" style="min-height: 350px;
    width: 795px;
    margin-bottom: 25px;
    padding-left: 21px;">


                    <div class="block-wrapper" style="color: #FFF;padding-bottom: 15px;">
                        <div class="item-title" style=" margin-right: 15px;
    font-family: Geneva, Arial, Helvetica, sans-serif;
    padding-left: 0px;
    display: inline-block;
    position: relative;
    top: 10px;
    padding-top: 8px;
    margin-bottom: 15px;
    line-height: 29px;
    color: #FFF;
    font-size: 20px;
    text-align: left;
    width: 100%;"><a href="#" style="text-decoration: none;color: #FFF;">Название:  Мы с истекшим сроком годности</a> </div>
                        <div class="item-author" style=" display: inline-block;
    position: relative;

    margin-bottom: 10px;
    line-height: 29px;
    color: #FFF;
    font-size: 20px;
    text-align: left;">Автор:Стейс Крамер</div>
                        <div class="item-text" style="position: relative;
    top: -7px;
    line-height: 29px;
    color: #FFF;
    font-size: 17px;
    text-align: left;">Джине 17 лет, и у нее все прекрасно - любящая семья, младшая сестренка, симпатичный парень, школу она заканчивает как одна из лучших учениц и готовится...</div>
                        <div class="frame-wrapper" style="position: relative;
    top: -8px;
    margin-top: 15px;
    background-color: red;
    width: 97%;
    height: 220px;
    padding-bottom: 47px;"></div>

                    </div>
                </div>


            </div> <!-- Col-lg-9 -->
        </div><!-- row-->
        <div class="row">
            <div class="col-lg-3">

            </div>
            <div class="col-lg-9">
                <div class="item-wrapper" style="min-height: 350px;
    width: 795px;
    margin-bottom: 25px;
    padding-left: 21px;">


                    <div class="block-wrapper" style="color: #FFF;padding-bottom: 15px;">
                        <div class="item-title" style=" margin-right: 15px;
    font-family: Geneva, Arial, Helvetica, sans-serif;
    padding-left: 0px;
    display: inline-block;
    position: relative;
    top: 10px;
    padding-top: 8px;
    margin-bottom: 15px;
    line-height: 29px;
    color: #FFF;
    font-size: 20px;
    text-align: left;
    width: 100%;"><a href="#" style="text-decoration: none;color: #FFF;">Название:  Мы с истекшим сроком годности</a> </div>
                        <div class="item-author" style=" display: inline-block;
    position: relative;

    margin-bottom: 10px;
    line-height: 29px;
    color: #FFF;
    font-size: 20px;
    text-align: left;">Автор:Стейс Крамер</div>
                        <div class="item-text" style="position: relative;
    top: -7px;
    line-height: 29px;
    color: #FFF;
    font-size: 17px;
    text-align: left;">Джине 17 лет, и у нее все прекрасно - любящая семья, младшая сестренка, симпатичный парень, школу она заканчивает как одна из лучших учениц и готовится...</div>
                        <div class="frame-wrapper" style="position: relative;
    top: -8px;
    margin-top: 15px;
    background-color: red;
    width: 97%;
    height: 220px;
    padding-bottom: 47px;"></div>

                    </div>
                </div>


            </div> <!-- Col-lg-9 -->
        </div><!-- row-->
        <div class="row">
            <div class="col-lg-3">

            </div>
            <div class="col-lg-9">
                <div class="item-wrapper" style="min-height: 350px;
    width: 795px;
    margin-bottom: 25px;
    padding-left: 21px;">


                    <div class="block-wrapper" style="color: #FFF;padding-bottom: 15px;">
                        <div class="item-title" style=" margin-right: 15px;
    font-family: Geneva, Arial, Helvetica, sans-serif;
    padding-left: 0px;
    display: inline-block;
    position: relative;
    top: 10px;
    padding-top: 8px;
    margin-bottom: 15px;
    line-height: 29px;
    color: #FFF;
    font-size: 20px;
    text-align: left;
    width: 100%;"><a href="#" style="text-decoration: none;color: #FFF;">Название:  Мы с истекшим сроком годности</a> </div>
                        <div class="item-author" style=" display: inline-block;
    position: relative;

    margin-bottom: 10px;
    line-height: 29px;
    color: #FFF;
    font-size: 20px;
    text-align: left;">Автор:Стейс Крамер</div>
                        <div class="item-text" style="position: relative;
    top: -7px;
    line-height: 29px;
    color: #FFF;
    font-size: 17px;
    text-align: left;">Джине 17 лет, и у нее все прекрасно - любящая семья, младшая сестренка, симпатичный парень, школу она заканчивает как одна из лучших учениц и готовится...</div>
                        <div class="frame-wrapper" style="position: relative;
    top: -8px;
    margin-top: 15px;
    background-color: red;
    width: 97%;
    height: 220px;
    padding-bottom: 47px;"></div>

                    </div>
                </div>


            </div> <!-- Col-lg-9 -->
        </div><!-- row-->
    </div><!-- container -->
</section>
</main>
<footer>
    <?php include "footer.php";?>
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