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
                         Mes locataires
                    </div>
                    <div class="bg-white-color pb30 mes-lgts">

                        <table id="table_courses" class="table newtable">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>N° compte contribuable</th>
                                <th>Nom</th>
                                <th>Paiement</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>25/01/2023</td>
                                <td>2512</td>
                                <td>Ouattara</td>
                                <td> <span class="badge-green">A jour</span></td>
                                <td>
                                    <a href="#" class="btn-payer">Payer</a>
                                </td>
                            </tr>
                            <tr>
                                <td>0555</td>
                                <td>25/01/2023</td>
                                <td>Ouattara</td>
                                <td><span class="badge-jaune">En attente</span></td>
                                <td>
                                    <ul>
                                        <li class="dropup">
                                            <a href="#" class="dropdown-toggle font-11 btn-action" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                <span  class="font-15"> ...</span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#">Bloquer</a>
                                                </li>
                                                <li>
                                                    <a href="#">Débloquer</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>0555</td>
                                <td>25/01/2023</td>
                                <td>Ouattara</td>
                                <td><span class="badge-green">A jour</span></td>
                                <td>
                                    <ul>
                                        <li class="dropup">
                                            <a href="#" class="dropdown-toggle font-11 btn-action" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                <span  class="font-15"> ...</span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#">Bloquer</a>
                                                </li>
                                                <li>
                                                    <a href="#">Débloquer</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>0555</td>
                                <td>25/01/2023</td>
                                <td>Ouattara</td>
                                <td><span class="badge-red">Bloqué</span></td>
                                <td>
                                    <ul>
                                        <li class="dropup">
                                            <a href="#" class="dropdown-toggle font-11 btn-action" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                <span  class="font-15"> ...</span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#">Bloquer</a>
                                                </li>
                                                <li>
                                                    <a href="#">Débloquer</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php include_once $layout.'/footer.php'?>
<script>
    var table_courses;
    $(document).ready(function() {
        table_courses = $('#table_courses').DataTable({
            "ordering": false,
            "pageLength": 25,
            "oLanguage": {
                "sProcessing": "Traitement en cours ...",
                "sLengthMenu": '<h3>Liste des locataires</h3>',
                "sZeroRecords": "Aucun résultat trouvé",
                "sEmptyTable": "Aucune donnée disponible",
                "sInfo": "Lignes _START_ à _END_ sur _TOTAL_",
                "sInfoEmpty": "Aucune ligne affichée",
                "sInfoFiltered": "(Filtrer un maximum de_MAX_)",
                "sSearch": '<i class="fa fa-search table-seach"></i>',
                "sSearchPlaceholder": "Recherche",
                "sLoadingRecords": '<i class="fa fa-circle-o-notch fa-spin"></i> Chargement...',
                "oPaginate":{
                    "sPrevious": '<i class="fa fa-angle-double-left"></i>',
                    "sNext": '<i class="fa fa-angle-double-right"></i>'
                },
                "oAria": {
                    "sSortAscending": ": Trier par ordre croissant",
                    "sSortDescending": ": Trier par ordre décroissant"
                }

            }
        });



    })
</script>