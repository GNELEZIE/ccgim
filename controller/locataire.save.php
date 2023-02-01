<?php

if(isset($_SESSION['_ccgim_201']) and isset($_POST['lgt']) and isset($_POST['noms']) and isset($_POST['prenom']) and isset($_POST['phone']) and isset($_POST['bail']) and isset($_SESSION['myformkey']) and isset($_POST['formkey']) and $_SESSION['myformkey'] == $_POST['formkey']){
    extract($_POST);

    $slug = create_slug($_POST['prenom']);
    $lgt = htmlentities(trim(addslashes(strip_tags($lgt))));
    $noms = htmlentities(trim(addslashes(strip_tags($noms))));
    $prenom = htmlentities(trim(addslashes(strip_tags($prenom))));
    $bail = htmlentities(trim(addslashes(strip_tags($bail))));
    $phone = htmlentities(trim(addslashes(strip_tags($phone))));
    $isoPhone = htmlentities(trim(addslashes(strip_tags($isoPhone))));
    $dialPhone = htmlentities(trim(addslashes(strip_tags($dialPhone))));

    $propriety = 'prenom';
    $verifSlug = $locataire->verifLocataire($propriety,$prenom);
    $rsSlug = $verifSlug->fetch();
    $nbSlug =$verifSlug->rowCount();
    if($nbSlug > 0 ){
        $slug = $slug.'-'.$nbSlug;
    }

    $save = $locataire->addLocataire($dateGmt,$noms,$prenom,$slug,$bail,$isoPhone,$dialPhone,$phone,$lgt);
    if($save > 0){
        echo 'ok';
    }
}
