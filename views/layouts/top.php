<head>
<meta charset="UTF-8">
<title>Document</title>
<link rel="stylesheet" href="template/css/normalize.css">
<link rel="stylesheet" href="template/css/bootstrap.min.css">
<link rel="stylesheet" href="template/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="template/css/index.css">
<script src="template/js/jquery-3.1.1.min.js"></script>
<script src="template/js/bootstrap.min.js"></script>
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
        /*min-height: 293px;*/
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
    <?php include "/header.php" ?>
</header>