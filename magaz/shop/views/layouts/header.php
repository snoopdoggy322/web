<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <?php 
        if ($_SESSION["lang"]=="ru")
        include_once ROOT . '/lang/ru.php';
        else include_once ROOT . '/lang/en.php';
         ?>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Главная</title>
        <link href="/template/css/bootstrap.min.css" rel="stylesheet">
        <link href="/template/css/font-awesome.min.css" rel="stylesheet">
        <link href="/template/css/prettyPhoto.css" rel="stylesheet">
        <link href="/template/css/price-range.css" rel="stylesheet">
        <link href="/template/css/animate.css" rel="stylesheet">
        <link href="/template/css/main.css" rel="stylesheet">
        <link href="/template/css/responsive.css" rel="stylesheet">
<script src="/template/js/jquery.js"></script>
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="/template/images/logo.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/template/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/template/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/template/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/template/images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>
        <div class="page-wrapper">

            <header id="header"><!--header-->
                <div class="header_top"><!--header_top-->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="contactinfo">
                                    <ul class="nav nav-pills ">
                                                                   
                                        <li><a href="#"><i class="fa fa-phone"></i> +797877777777</a></li>
                                        <li><a href="#"><i class="fa fa-envelope"></i> mail@topc.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="social-icons pull-right">
                                    <ul class="nav navbar-nav">
                                      
                                        <li class="dropdown"><a href="#">   <?php echo $lang["Язык"]; ?>  <i class="fa fa-angle-down"></i></a>
                                            <ul role="menu" class="sub-menu">

<form action="" method="POST">
    <?php 
if($_SESSION['lang']=="ru")
    echo '<li><input type="submit" name="b1" value="RU"/></li>';
else echo '<li><input type="submit" name="b1" value="ru"/></li>';

if($_SESSION['lang']=="en")
 echo '<li><input type="submit" name="b2" value="EN"/></li>';
else
echo '<li><input type="submit" name="b2" value="en"/></li>';
?>
</form>
<?php
if(isset($_POST["b1"])) {
    $_SESSION["lang"] = "ru";
echo "<script type='text/javascript'>window.top.location='/index.php';</script>"; exit;
}

if(isset($_POST["b2"])) {
     $_SESSION["lang"] = "en";
     echo "<script type='text/javascript'>window.top.location='/index.php';</script>"; exit;
}
?>
                                                     

                                               
                                            </ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/header_top-->

                <div class="header-middle"><!--header-middle-->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="logo pull-left">
                                    <a href="/"><img width="25%" src="/template/images/logo.png" alt="" /></a>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="shop-menu pull-right">
                                    <ul class="nav navbar">
                                        <li><a href="/cart">
                                                <i class="fa fa-shopping-cart"></i>    <?php echo $lang["Корзина"]; ?>  
                                                (<span id="cart-count"><?php echo Cart::countItems(); ?></span>)
                                            </a>
                                        </li>
                                        <?php if (User::isGuest()): ?>                                        
                                            <li><a href="/user/login/"><i class="fa fa-lock"></i> <?php echo $lang["Вход"]; ?>  </a></li>
                                             <li><a href="user/register/"><i class="fa fa-lock"></i> <?php echo $lang["Регистрация"]; ?> </a></li>
                                        <?php else: ?>
                                            <li><a href="/cabinet/"><i class="fa fa-user"></i> <?php echo $lang["Аккаунт"]; ?> </a></li>
                                            <li><a href="/user/logout/"><i class="fa fa-unlock"></i> <?php echo $lang["Выход"]; ?> </a></li>
 
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/header-middle-->

                <div class="header-bottom"><!--header-bottom-->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="mainmenu ">
                                    <ul class="nav navbar-nav collapse navbar-collapse">
                                        <li><a href="/"><?php echo $lang["Главная"]; ?> </a></li>
                                        <li class="dropdown"><a href="#"><?php echo $lang["Товар"]; ?> <i class="fa fa-angle-down"></i></a>
                                            <ul role="menu" class="sub-menu">
                                                <li><a href="/catalog/"><?php echo $lang["Каталог товаров"]; ?> </a></li>
                                                <li><a href="/cart/"><?php echo $lang["Корзина"]; ?> </a></li> 
                                            </ul>
                                        </li>
                                        <li><a href="/about/"><?php echo $lang["О магазине"]; ?> </a></li>
                                        <li><a href="/contacts/"><?php echo $lang["Контакты"]; ?> </a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/header-bottom-->

            </header><!--/header-->