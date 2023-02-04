<?php

if(isset($_SESSION['_ccgim_201']) and isset($_POST['userId']) and isset($_POST['libelle']) and isset($_POST['montant']) and isset($_SESSION['myformkey']) and isset($_POST['formkey']) and $_SESSION['myformkey'] == $_POST['formkey']){
    extract($_POST);

    $libelle = htmlentities(trim(addslashes(strip_tags($libelle))));
    $userId = htmlentities(trim(addslashes(strip_tags($userId))));
    $montant = htmlentities(trim(addslashes(strip_tags($montant))));
    $type_transac  = 1;

    if(is_numeric($montant)){
            $debit = $montant;
            $credit = 0;
            $save = $tresorerie->addOperation($dateGmt,$userId,$type_transac,$libelle,$debit,$credit);
            if($save > 0){
                echo 'ok';
            }
    }
}