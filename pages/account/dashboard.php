<?php
if(!isset($_SESSION['_ccgim_201'])){
    header('location:'.$domaine.'/connexion');
    exit();

}
$annee = date('Y');
$mois = date('m');
$debitMois = $tresorerie->getPaiementMontByMonth($annee,$mois)->fetch();
$creditMois = $tresorerie->getRetraitMontByMonth($annee,$mois)->fetch();
$Allcredit = $tresorerie->getAllCredit()->fetch();
$montant = $tresorerie->getSoldeTotal()->fetch();
$my_solde = number_format($montant['solde'],0 ,' ',' ').' <small>FCFA</small>';
$token = openssl_random_pseudo_bytes(16);
$token = bin2hex($token);
$_SESSION['myformkey'] = $token;
include_once $layout.'/header.php'?>

    <div class="container-fluid py-5 bg-gray-color pd-section">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-3">
                  <div class="compte-box bg-white-color">
                      <div class="header-box">
                          Menu
                      </div>
                      <?php
                      include_once $layout.'/menu-dashboard.php';
                      ?>
                  </div>
                </div>
                <div class="col-md-9">
                    <div class="header-box">
                        Tableau de bord
                    </div>
                    <div class="bg-white-color p30">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="ts-box-red">
                                    <div class="icon">
                                        <i class="fa fa-arrow-trend-down myicon-trend my-icon-dashboard-red"></i>
                                    </div>
                                    <div class="nbLgt">
                                        <h2><?=number_format($creditMois['solde'],0,',',' ')?> <small>FCFA</small></h2>
                                        <p>Depense du mois</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="ts-box-green">
                                    <div class="icon">
                                        <i class="fa fa-arrow-trend-up myicon-trend my-icon-dashboard-green"></i>
                                    </div>
                                    <div class="nbLgt">
                                        <h2><?=number_format($debitMois['solde'],0,',',' ')?> <small>FCFA</small></h2>
                                        <p>Solde du mois</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="ts-box-red">
                                    <div class="icon">
                                        <i class="fa fa-arrow-trend-down myicon-trend my-icon-dashboard-red"></i>
                                    </div>
                                    <div class="nbLgt">
                                        <h2><?=number_format($Allcredit['solde'],0,',',' ')?> <small>FCFA</small></h2>
                                        <p>Depense total</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="ts-box-green">
                                    <div class="icon">
                                        <i class="fa fa-wallet myicon-trend my-icon-dashboard-green"></i>
                                    </div>
                                    <div class="nbLgt">
                                        <h2><?=$my_solde?></h2>
                                        <p>Solde total</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hist">
                            <h3>Les derniers versements</h3>
                            <table class="table-striped table1">
                                <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Téléphone</th>
                                    <th>Locataire</th>
                                    <th class="text-right">Montant(CFA)</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $localist = $tresorerie->getCinqPaiement();
                                while($localDat = $localist->fetch()){
                                    ?>
                                <tr>
                                    <td><?=date_time_fr($localDat['date_tresorerie'])?></td>
                                    <td><?=$localDat['phone']?></td>
                                    <td>
                                        <p class="m-0"><?=html_entity_decode(stripslashes($localDat["nom"])).' '.html_entity_decode(stripslashes($localDat["prenom"]))?></p>
                                    </td>
                                    <td class="text-right"><?=number_format($localDat['debit_transac'],0,',',' ')?></td>
                                </tr>
                                <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php include_once $layout.'/footer.php'?>
<script>
    chargeSolde();
    function chargeSolde(){
        $.ajax({
            type: 'post',
            data: {
                token: "<?=$token?>"
            },
            url: '<?=$domaine?>/controle/solde',
            dataType: 'json',
            success: function(data){
                $('.my_solde').html(data.my_solde);
            }
        });
    }
</script>