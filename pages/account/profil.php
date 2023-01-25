<?php
if(!isset($_SESSION['_ccgim_201'])){
    header('location:'.$domaine.'/connexion');
    exit();

}


include_once $layout.'/header.php'?>





<?php include_once $layout.'/footer.php'?>