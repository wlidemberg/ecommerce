<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hcode Store</title>

        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="/res/site/css/bootstrap.min.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="/res/site/css/font-awesome.min.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="/res/site/css/owl.carousel.css">
        <link rel="stylesheet" href="/res/site/css/style.css">
        <link rel="stylesheet" href="/res/site/css/responsive.css">
    </head>
    <body>
        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="user-menu">
                            <ul>
                                <li><a href="#"><i class="fa fa-user">Minha Conta</i></a></li>
                                <li><a href="#"><i class="fa fa-heart">Lista de Desejos</i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart">Meu Carrinho</i></a></li>
                                <li><a href="/admin/login"><i class="fa fa-lock">Login</i></a></li>
                            </ul>
                        </div><!-- FIM DA DIV USER-MENU -->

                    </div>
                    <div class="col-md-4">
                        <div class="header-right">
                            <ul class="list-unstyled list-inline">
                                <li class="dropdown dropdown-small">
                                    <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href=""><span class="key">Moeda:</span><span class="value">BRL</span><b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">BRL</a></li>
                                        <li><a href="#">USD</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-small">
                                    <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">Linguagem:</span><span class="value">Português</span><b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Português</a></li>
                                        <li><a href="#">Inglês</a></li>
                                        <li><a href="#">Espanhol</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- FIM DA CLASSE HEADER-RIGHT -->
                    </div>                    
                </div>
            </div>
        </div><!-- FIM DIV HEADER-AREA -->
        <div class="site-branding-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="logo">
                            <h1><a href="/"><img src="res/site/img/logo.png"></a></h1>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="shopping-item">
                            <a href="/cart">Carrinho - <span class="cart-amunt">R$100</span><i class="fa fa-shopping-cart"></i><span class="product-count">5</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- FIM DIV SITE-BRANDING-AREA -->
        <div class="mainmenu-area">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div><!-- FIN DIV NAVBAR-HEADER -->
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="/">HOME</a></li>
                            <li><a href="#">PRODUTOS</a></li>
                            <li><a href="/cart">CARRINHO</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- FIM DIV MAINMENU-AREA -->
