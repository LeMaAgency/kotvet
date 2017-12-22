<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?><!DOCTYPE html>
<html lang="ru">

<head>
    <? $APPLICATION->ShowHead(); ?>

    <title><? $APPLICATION->ShowTitle(); ?></title>

    <?php
    //init js & css
    $assetManager = new \Lema\Common\AssetManager();

    $assetManager
        ->addCssArray(array(
            'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&amp;subset=cyrillic',
            '/assets/css/fonts/fonts.css',
            '/assets/css/normalize.css',
            '/assets/css/bootstrap.min.css',
            '/assets/css/owl.carousel.min.css',
            '/assets/css/nouislider.css',
            '/assets/css/main.css',
            '/assets/css/media.css',
        ))
        ->init(array('fx'))
        ->addJsArray(array(
            '/assets/js/jquery-3.2.1.min.js',
            '/assets/js/selectFx.js',
            '/assets/js/classie.js',
            '/assets/js/jquery.fancybox.min.js',
            '/assets/js/owl.carousel.min.js',
            '/assets/js/nouislider.min.js',
            '/assets/js/slick.min.js',
            '/assets/js/main.js',
        ));
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
</head>

<body class="catalog">
<? $APPLICATION->ShowPanel(); ?>
<header class="header">
    <div class="header-top-line">
        <div class="container">
            <nav class="header-top-menu">
                <a href="#" class="header-top-menu-link">Контакты</a>
                <a href="#" class="header-top-menu-link">Акции</a>
                <a href="#" class="header-top-menu-link">Вакансии</a>
            </nav>
        </div>
    </div>
    <div class="header-contacts container-index">
        <div class="header-logo"><img alt="img" src="img/logo.png"></div>
        <div class="header-contacts-block">
            <div class="header-phone">+7 (4242) 399-199</div>
            <div class="header-account">
                <a href="#" class="header-account-link signin-link link-hvr">Вход</a>
                <span class="header-account-border"></span>
                <a href="#" class="header-account-link signup-link link-hvr">Регистрация</a>
            </div>
        </div>
    </div>
    <div class="header-main-menu">
        <div class="container">
            <div class="mobile-menu"></div>
            <nav class="header-menu">
                <a href="#" class="header-menu-link hvr-sweep-to-top">Главная</a>
                <a href="#" class="header-menu-link hvr-sweep-to-top">Каталог квартир</a>
                <a href="#" class="header-menu-link hvr-sweep-to-top">Загородная недвижимость</a>
                <a href="#" class="header-menu-link hvr-sweep-to-top">Аренда</a>
                <a href="#" class="header-menu-link hvr-sweep-to-top">Ипотека</a>
                <a href="#" class="header-menu-link hvr-sweep-to-top">Продавцу</a>
                <a href="#" class="header-menu-link hvr-sweep-to-top">Покупателю</a>
            </nav>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <ol class="breadcrumb breadcrumb-catalog">
                <li><a href="index.html">Главная</a></li>
                <li><a href="#" class="breadcrumb-active">Каталог квартир</a></li>
            </ol>
        </div>
    </div>
</div>
