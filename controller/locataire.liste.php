<?php

$arr_list = array('data' => array());
if(isset($_SESSION['_ccgim_201'])  and isset($_SESSION['myformkey']) and isset($_POST['token']) and $_SESSION['myformkey'] == $_POST['token']){

$liste = $locataire->getAllLocataire();
while($dats = $liste->fetch()){

    $stat = '<span class="badge-jaune">En attente</span>';
    $action = '<a href="#" class="btn-payer" data-toggle="modal"  data-id="'.$dats["id_locataire"].'" data-name="'.html_entity_decode(stripslashes($dats["nom"])).'" data-target="#payerModalCenter"> <i class="fa fa-money"></i> Payer</a>
                <a href="'.$domaine.'/logement/locataires/'.$dats['slug'].'" class="btn-voir"> <i class="fa fa-eye"></i> Voir</a>';
    $numbers = $dats['dial_phone'].' '.$dats['phone'];
    $arr_list['data'][] = array(
        date_time_fr($dats['date_locataire']),
        html_entity_decode(stripslashes($dats["nom"])),
        $numbers,
        $stat,
        $action

    );
}



}
echo json_encode($arr_list);