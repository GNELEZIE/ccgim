<?php
ini_set("session.cookie_httponly", True);
session_start();



$cdn = 'cdn';
$class = 'class';
$mail = 'mail';
$controller = 'controller';
$function = 'function';
$layout = 'layout';
$pages = 'pages';




//Include Connexion
include_once $class.'/Db.connect.php';
// appelle des class

include_once $function."/detectdevice/Mobile_Detect.php";
include_once $function."/detectdevice/detect.php";
// include function

include_once $function."/domaine.php";
include_once $function."/mailing.php";
include_once $function."/function.php";





/*
if(isset($_COOKIE['_ccgim_cookie']) AND !isset($_SESSION['_ccgim_201'])){
    $user = my_decrypt($_COOKIE['_ccgim_cookie']);
    $userPhone = explode('-',$user);
    $result = $utilisateur->getUtilisateurByPhone($userPhone[0],$userPhone[1]);
    if($data = $result->fetch()){
        if($data['bloquer'] == 0){
            $_SESSION['_ccgim_201'] = $data;
        }else{
            setcookie('_ccgim_cookie',null,time()-60*60*24*30,'/',$cookies_domaine,true,true);
        }
    }else{
        setcookie('_ccgim_cookie',null,time()-60*60*24*30,'/',$cookies_domaine,true,true);
    }
}

if(isset($_SESSION['_ccgim_201'])){
    $data = $utilisateur->getUtilisateurById($_SESSION['_ccgim_201']['id_utilisateur'])->fetch();
    if($data['bloquer'] != 0){
        if(isset($_COOKIE['_ccgim_cookie'])) {
            setcookie('_ccgim_cookie',null,time()-60*60*24*30,'/',$cookies_domaine,true,true);
        }
        unset($_SESSION['_ccgim_201']);
    }
}*/