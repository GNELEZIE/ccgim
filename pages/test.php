<?php
$numbers = $dataLoc['dial_phone'].' '.$dataLoc['phone'];
$stat = '<span class="badge-jaune">En attente</span>';
$action = '<a href="#" class="btn-payer" data-toggle="modal"  data-id="1" data-name="Ouattara" data-target="#payerModalCenter"> <i class="fa fa-money"></i> Payer</a>
                <a href="'.$domaine.'/logement/locataires/show" class="btn-voir"> <i class="fa fa-eye"></i> Voir</a>';
$arr_list['data'][] = array(
    date_time_fr($dataLoc['date_locataire']),
    html_entity_decode(stripslashes($dataLoc["nom"])),
    $numbers,
    $stat,
    $action
);