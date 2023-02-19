<?php
$my_solde ='';
if(isset($_SESSION['_ccgim_201']) and isset($_SESSION['myformkey']) and isset($_POST['token'])  and $_SESSION['myformkey'] == $_POST['token']){
 extract($_POST);

       $my_prix .= 'okkkkkk';


}
$output = array(
    'my_prix' => $my_prix
);
echo json_encode($output);