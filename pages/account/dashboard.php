<?php
if(!isset($_SESSION['_ccgim_201'])){
    header('location:'.$domaine.'/connexion');
    exit();

}

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
                    <div class="bg-white-color pb30">
                        <div class="row p30">
                            <div class="col-md-3">
                                <div class="ts-box-red">
                                    <div class="icon">
                                        <i class="fa fa-arrow-trend-down myicon-trend my-icon-dashboard-red"></i>
                                    </div>
                                    <div class="nbLgt">
                                        <h2>1 000 000</h2>
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
                                        <h2>10 003</h2>
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
                                        <h2>1 000 000</h2>
                                        <p>Depense total</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="ts-box-green">
                                    <div class="icon">
                                        <i class="fa fa-arrow-trend-up myicon-trend my-icon-dashboard-green"></i>
                                    </div>
                                    <div class="nbLgt">
                                        <h2>1 000 000</h2>
                                        <p>Solde total</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hist m30">
                            <h3>Les derniers versements</h3>
                            <table class="table-striped table1">
                                <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Locataire</th>
                                    <th class="text-right">Montant</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>26/01/2023</td>
                                    <td>
                                        <p class="m-0">Ouattara Gnelezie Arouna</p>
                                    </td>
                                    <td class="text-right">150 000</td>
                                </tr>
                                <tr>
                                    <td>26/01/2023</td>
                                    <td>Ouattara Gnelezie Arouna
                                    </td>
                                    <td class="text-right">150 000</td>
                                </tr>
                                <tr>
                                    <td>26/01/2023</td>
                                    <td>Ouattara Gnelezie Arouna</td>
                                    <td class="text-right">150 000</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php include_once $layout.'/footer.php'?>