<!doctype html>
<html lang="en">
<?php include 'layouts/top.php'?>
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
<section id="change-get" style="margin-top: 5%;opacity: 1;">


    <div class="container">

        <!--------------------------------------------------  -->
        <?php foreach ($contentItems as $item):?>
            <?php
            $img = "~[0-9 A-Z a-z А-Я а-я - _ .]+.jpg~";
            $mp3 = "~[0-9 A-Z a-z А-Я а-я - _ .]+.mp3~";
            $mp4 = "~[0-9 A-Z a-z А-Я а-я - _ .]+.mp4~";
            if (preg_match($img, $item['source'])){
            ?>
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
    width: 100%;"><a href="/<?=$item['user_id']?>" style="text-decoration: none;color: #FFF;">Название:  <?=$item['product_name']?></a> </div>
                        <div class="item-author" style=" display: inline-block;
    position: relative;

    margin-bottom: 10px;
    line-height: 29px;
    color: #FFF;
    font-size: 20px;
    text-align: left;">Автор: <?=$item['user_name'].' '.$item['user_lastname']?></div>
                        <div class="item-text" style="position: relative;
    top: -7px;
    line-height: 29px;
    color: #FFF;
    font-size: 17px;
    text-align: left;"><?=$item['short_description']?></div>
                        <div class="frame-wrapper" style="position: relative;
    top: -8px;
    margin-top: 15px;
    /*background-color: red;*/
    width: 97%;
    /*height: 220px;*/
    /*padding-bottom: 47px;*/
    ">
                            <img src="template/user_data/<?=$item['source']?>" alt="<?php?>" style="width: 100%;">
                        </div>

                    </div>
                </div>


            </div> <!-- Col-lg-9 -->
        </div><!-- row-->
        <?php }elseif(preg_match($mp4, $item['source'])){
            ?>
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
    width: 100%;"><a href="/<?=$item['user_id']?>" style="text-decoration: none;color: #FFF;">Название:  <?=$item['product_name']?></a> </div>
                                <div class="item-author" style=" display: inline-block;
    position: relative;

    margin-bottom: 10px;
    line-height: 29px;
    color: #FFF;
    font-size: 20px;
    text-align: left;">Автор: <?=$item['user_name'].' '.$item['user_lastname']?></div>
                                <div class="item-text" style="position: relative;
    top: -7px;
    line-height: 29px;
    color: #FFF;
    font-size: 17px;
    text-align: left;"><?=$item['short_description']?></div>
                                <div class="frame-wrapper" style="position: relative;
    top: -8px;
    margin-top: 15px;
    /*background-color: red;*/
    width: 97%;
    /*height: 220px;*/
    /*padding-bottom: 47px;*/
    ">
                                    <video controls="controls" type="video/mp4; codecs='avc1.42E01E, mp4a.40.2'" style="width: 100%;" poster="/template/user_data/Beyonce-Formation.jpg">
                                        <source src="/template/user_data/<?=$item['source']?>">
                                    </video>
                                </div>

                            </div>
                        </div>


                    </div> <!-- Col-lg-9 -->
                </div><!-- row-->
        <?php }elseif(preg_match($mp3, $item['source'])){
                ?>
                <div class="row">
                    <div class="col-lg-3">

                    </div>
                    <div class="col-lg-9">
                        <div class="item-wrapper" style="
    /*min-height: 350px;*/
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
    width: 100%;"><a href="/<?=$item['user_id']?>" style="text-decoration: none;color: #FFF;">Название:  <?=$item['product_name']?></a> </div>
                                <div class="item-author" style=" display: inline-block;
    position: relative;

    margin-bottom: 10px;
    line-height: 29px;
    color: #FFF;
    font-size: 20px;
    text-align: left;">Автор: <?=$item['user_name'].' '.$item['user_lastname']?></div>
                                <div class="item-text" style="position: relative;
    top: -7px;
    line-height: 29px;
    color: #FFF;
    font-size: 17px;
    text-align: left;"><?=$item['short_description']?></div>
                                <div class="frame-wrapper" style="position: relative;
    top: -8px;
    margin-top: 15px;
    /*background-color: red;*/
    width: 97%;
    /*height: 220px;*/
    /*padding-bottom: 47px;*/
    ">
                                    <audio controls="controls" type="audio/music.mpeg" style="width: 100%;" preload="metadata">
                                        <source src="/template/user_data/<?=$item['source']?>">
                                    </audio>
                                </div>

                            </div>
                        </div>


                    </div> <!-- Col-lg-9 -->
                </div><!-- row-->
            <?php }else {?>
                <div class="row">
                    <div class="col-lg-3">

                    </div>
                    <div class="col-lg-9">
                        <div class="item-wrapper" style="
                        /*min-height: 293px;*/
    width: 795px;
    /*margin-bottom: 10px;*/
    padding-left: 21px;">


                            <div class="block-wrapper" style="color: #FFF;">
                                <div class="item-image" style="margin-top: 25px;margin-bottom: 30px;float: left;margin-right: 25px;margin-left:10px;display: inline-block;background: red;">
<!--                                    <img src="template/img/item.jpg" alt="" style="    width: 160px;height: 175px;">-->
                                </div>
                                <div class="item-title" style="    margin-right: 15px;
    font-family: Geneva, Arial, Helvetica, sans-serif;
    padding-left: 0px;
    display: inline-block;
    position: relative;
    top: 10px;
    padding-top: 20px;
    margin-bottom: 15px;
    line-height: 29px;
    color: #FFF;
    font-size: 20px;
    text-align: left;">Название:  <a href="<?=$item['product_id']?>" style="text-decoration: none; color: #fff;"><?=$item['product_name']?></a></div>
                                <div class="item-author" style="    display: inline-block;
    position: relative;
    top: 10px;
    margin-bottom: 15px;
    line-height: 29px;
    color: #FFF;
    font-size: 20px;
    text-align: left;;">Автор: <a href="<?=$item['user_id']?>" style="text-decoration: none; color: #fff;"><?=$item['user_name'] . ' ' . $item['user_lastname']?></a></div>
                                <div class="item-text" style="position: relative;
    top: 10px;
    line-height: 29px;
    color: #FFF;
    font-size: 20px;
    text-align: left;"><p style="display: inline-block; margin-bottom: 15px;"><?=$item['short_description']?></p></div>
<!--                                <button class="item-full">Смотреть</button>-->
                            </div>
                        </div>


                    </div> <!-- Col-lg-9 -->
                </div><!-- row-->
                <?php
            }?>
        <?php endforeach;?>
        <!----------------------------------------- -->
    </div><!-- container -->
</section>
</main>
<footer>
    <?php include "/layouts/footer.php";?>
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
