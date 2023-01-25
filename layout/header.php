<!doctype html>
<html class="no-js" lang="fr">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <meta name="author" content="">
    <title>CCGIM - <?=ucfirst($page)?></title>
    <link rel="icon" type="image/png" href="<?=$cdn_domaine?>/media/house-logo.png">
    <link rel="stylesheet" href="<?=$cdn_domaine?>/assets/fonts/fonts.css">
    <link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/plugins.css">
    <link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/colors.css">
    <link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/style.css">
    <link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/widht.css">
    <link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/btn.css">
    <link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/font-size.css">
    <link rel="stylesheet" href="<?=$cdn_domaine?>/assets/css/padding.css">
    <link rel="stylesheet" href="<?=$cdn_domaine?>/assets/libs/sweetalert/sweetalert.css" type="text/css">
    <link rel="stylesheet" href="<?=$cdn_domaine?>/assets/libs/datatable/datatables.min.css">
    <link rel="stylesheet" href="<?=$cdn_domaine?>/assets/libs/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="<?=$cdn_domaine?>/assets/libs/intltelinput/css/intlTelInput.min.css"/>
    <link rel="stylesheet" href="<?=$cdn_domaine?>/assets/libs/toast/jquery.toast.min.css"/>
    <script src="<?=$cdn_domaine?>/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <style>

        .header-bottom-content.style-two .top-navigation .menu-list > li > a {
            letter-spacing: normal;
            text-transform: inherit;
            padding: 10px 10px;
            font-weight:normal;
        }

        .menu-list li:hover > a, .menu-list > li > a:hover, .menu-list > li > a.active {
            background: #0000ff12 !important;
            color: #0000ff !important;
        }
        .btn-register{
            background: blue;
            color: #fff !important;
        }
        .title1{
            position: absolute;
            left: 207px;
            top: 75px;
            font-weight: bold;
            color: #0000ff;
            font-size: 50px;
            padding: 2px 17px;
            border-radius: 6px;
            background: #ffffff96;
        }
        .form-content select {
            width: 100%;
        }
        .nice-select .nice-select-search {
            box-sizing: border-box;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 3px;
            box-shadow: none;
            color: #333;
            display: inline-block;
            vertical-align: middle;
            padding: 7px 12px;
            margin: 0 10px 0 0;
            width: 100%!important;
            min-height: 36px;
            line-height: 22px;
            height: auto;
            outline: 0!important;
        }
        .nice-select .nice-select-search-box {
            box-sizing: border-box;
            position: absolute;
            width: 100%;
            margin-top: 5px;
            top: 100%;
            left: 0;
            z-index: 8;
            padding: 5px;
            background: #FFF;
            opacity: 0;
            pointer-events: none;
            border-radius: 5px 5px 0 0;
            box-shadow: 0 0 0 1px rgb(68 88 112 / 11%);
            -webkit-transform-origin: 50% 0;
            -ms-transform-origin: 50% 0;
            transform-origin: 50% 0;
            -webkit-transform: scale(.75) translateY(-21px);
            -ms-transform: scale(.75) translateY(-21px);
            transform: scale(.75) translateY(-21px);
            -webkit-transition: all .2s cubic-bezier(.5, 0, 0, 1.25), opacity .15s ease-out;
            transition: all .2s cubic-bezier(.5, 0, 0, 1.25), opacity .15s ease-out;
        }
        .nice-select {
            line-height: 39px;
            border: solid 1px #ced4da;
            background-color: #F1F5FF;
            font-size: 14px;
            border-radius: 10px;
            transition: all ease 0.5s;
        }
        .nice-select.wide {
            width: 100%;
        }
        #quartier {
            display: block !important;
            opacity: 0;
            position: absolute;
            width: 50px;
        }
        footer li{
            list-style: none;
        }
        .pd-section{
            padding: 100px 0;
        }
        .offset-3{
            margin-left: 25%;
        }
        .offset-4{
            margin-left: 33.33%;
        }
        .cd-form {
           border-radius: 6px;
        }
        .m-0{
            margin: 0 !important;
        }
        .cd-form input.has-padding {
            padding: 7px 15px 7px 11px !important;
        }
        .cd-form input.has-border {
            border: 2px solid #d2d8d8;
        }
        .cd-form label {
            font-size: 13px;
        }
        .user-inscription{
            width: 100%;
            border: 0;
            background: #0000ff;
            border-radius: 6px;
            font-size: 17px;
            padding: 9px;
        }

        .loader-btn {
            display: inline-block;
            width: 0.9rem;
            height: 0.9rem;
            vertical-align: middle;
            border: 0.2em solid currentColor;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: spinner-border .75s linear infinite;
            animation: spinner-border .75s linear infinite;
            align-self: center;
        }
        .required:before {
            content: "*";
            color: red;
        }
        .alert-pd{
            margin-top: 10px;
            margin-bottom: 0 !important;
            padding: 9px !important;
        }
        .cd-form input.has-padding {
            padding: 7px 15px 7px 11px !important;
        }
        .cd-form input.has-border {
            border: 1px solid #d2d8d8;
            -webkit-appearance: none;
            -moz-appearance: none;
            -ms-appearance: none;
            -o-appearance: none;
            appearance: none;
        }
        input, select, textarea {
            font-size: 80% !important;
        }

        .cd-form input.has-border {
            border: 2px solid #d2d8d8 !important;
        }

        .position-relative{
            position: relative !important;
        }
        .cd-form .hide-password {
            top: 70% !important;
        }
        .d-flex{
            display: flex;
        }
        .w20{
            width: 20%;
        }
        .w30{
            width: 30%;
        }
        .w40{
            width: 40%;
        }
        .w50{
            width: 50% !important;
        }
        .w60{
            width: 60%;
        }
        .w70{
            width: 70%;
        }
        .w80{
            width: 80%;
        }
        .w100{
            width: 100%;
        }
        .text-right{
            text-align: right;
        }
        .font-15{
            font-size: 15px !important;
        }
        .header-bottom-content.style-two .top-navigation .menu-list > li > a span {
            color: #ffffff;
        }
        .header-box {
            background: #0000ff;
            color: #ffffff;
            border-radius: 6px 6px 0 0;
            padding: 15px 20px;
        }













        @media only screen and (min-width: 600px)
            .cd-form input.has-padding {
                padding: 16px 20px 16px 50px;
            }
            .cd-form input.has-padding {
                padding: 12px 20px 12px 50px;
            }
            .cd-form input.full-width {
                width: 100%;
            }
            .cd-form input {
                margin: 0;
                padding: 0;
                border-radius: 0.25em;
            }








    </style>
</head>

<body>
<header class="mobile-header-area bg-gray-color hidden-md hidden-lg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 tb">
                <div class="mobile-header-block">
                    <div class="menu-area tb-cell">
                        <div class="mobile-menu-main hidden-md hidden-lg">
                            <div class="menucontent overlaybg"></div>
                            <div class="menuexpandermain slideRight">
                                <a id="navtoggole-main" class="animated-arrow slideLeft menuclose">
                                    <span></span>
                                </a>
                                <span id="menu-marker"></span>
                            </div>
                            <div id="mobile-main-nav" class="main-navigation slideLeft">
                                <div class="menu-wrapper">
                                    <div id="main-mobile-container" class="menu-content clearfix"></div>
                                    <div class="left-content">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-phone-square"></i>Call Us - 01623 030020</a>
                                            </li>
                                            <li>
                                                <a href="#" class="cd-signin"><i class="fa fa-address-book"></i>Login / Register</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="logo-area tb-cell">
                        <div class="site-logo">
                            <a href="<?=$domaine?>">
                                <img src="<?=$cdn_domaine?>/media/logo.png" alt="Logo" />
                            </a>
                        </div>
                    </div>
                    <div class="search-block tb-cell">
                        <a href="#" class="main-search"><i class="fa fa-search"></i></a>
                    </div>
                    <div class="additional-content tb-cell">
                        <a href="#" class="trigger-overlay"><i class="fa fa-sliders"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php
include_once $layout.'/menu.php';
?>
<div class="header-overlay-content">
    <div class="overlay overlay-hugeinc gradient-transparent overlay-menu-item">
        <button type="button" class="overlay-close">Close</button>
        <nav>
            <ul class="overlay-menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a>
                    <ul class="sub-menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Work</a></li>
                        <li><a href="#">Clients</a>
                            <ul class="sub-menu">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Work</a></li>
                                <li><a href="#">Clients</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </li>
                <li><a href="#">Work</a></li>
                <li><a href="#">Clients</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div>
    <div class="gradient-transparent overlay-search">
        <button type="button" class="overlay-close">Close</button>
        <div class="header-search-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form action="#" method="get" class="searchform">
                            <div class="input-group" id="adv-search">
                                <input type="text" class="form-controller" placeholder="Search for snippets" />
                                <div class="input-group-btn">
                                    <div class="btn-group" role="group">
                                        <div class="dropdown dropdown-lg">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <span class="fa fa-caret-down"></span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                <div class="form-horizontal">
                                                    <div class="checkbox">
                                                        <label><input type="checkbox"> From Blog</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox">Find Your Apartment</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">
                                            <span class="fa fa-search" aria-hidden="true"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
