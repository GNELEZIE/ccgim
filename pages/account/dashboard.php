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
                          Menu dashboard
                      </div>
                      <div class="link">
                          <a href="#">Mes logemenys</a>
                      </div>
                  </div>
                </div>
                <div class="col-md-9">
                    <div class="header-box">
                         Dashboard
                    </div>
                    <div class="bg-white-color pb30">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="ts-box">
                                    <div class="icon">
                                        <i class="fa fa-home myicon-home"></i>
                                    </div>
                                    <div class="nbLgt">
                                        <h2>25</h2>
                                        <p>Logements</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="ts-box">
                                    <div class="icon">
                                        <i class="fa fa-user myicon-user"></i>
                                    </div>
                                    <div class="nbLgt">
                                        <h2>13</h2>
                                        <p>Locataires</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="ts-box">
                                    <div class="icon">
                                        <i class="fa fa-money myicon-money"></i>
                                    </div>
                                    <div class="nbLgt">
                                        <h2>1 000 000</h2>
                                        <p>Solde</p>
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