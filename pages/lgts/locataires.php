<?php
if(!isset($_SESSION['_ccgim_201'])){
    header('location:'.$domaine.'/connexion');
    exit();

}

include_once $layout.'/header.php'?>

<div class="container-fluid py-5 bg-gray-color pd-section">
    <div class="container py-5">
        <?php
        if(isset($doc[1]) and !isset($doc[2])){
         ?>
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

                        <table id="table_locataire" class="table newtable">
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
                                <td> <span class="badge-jaune">En attente</span></td>
                                <td>
                                    <a href="#" class="btn-payer" data-toggle="modal"  data-id="1" data-name="Ouattara" data-target="#payerModalCenter"> <i class="fa fa-money"></i> Payer</a>
                                    <a href="<?=$domaine?>/logement/locataires/show" class="btn-voir"> <i class="fa fa-eye"></i> Voir</a>
                                </td>
                            </tr>
                            <tr>
                                <td>25/01/2023</td>
                                <td>2512</td>
                                <td>Ouattara</td>
                                <td> <span class="badge-jaune">En attente</span></td>
                                <td>
                                    <a href="#" class="btn-payer" data-toggle="modal"  data-id="1" data-name="Ouattara" data-target="#payerModalCenter"><i class="fa fa-money"></i> Payer</a>
                                    <a href="<?=$domaine?>/logement/locataires/show" class="btn-voir"><i class="fa fa-eye"></i> Voir</a>
                                </td>
                            </tr>
                            <tr>
                                <td>25/01/2023</td>
                                <td>2512</td>
                                <td>Ouattara</td>
                                <td> <span class="badge-green">A jour</span></td>
                                <td>
                                    <a href="#" class="btn-voir"><i class="fa fa-eye"></i> Voir</a>
                                </td>
                            </tr><tr>
                                <td>25/01/2023</td>
                                <td>2512</td>
                                <td>Ouattara</td>
                                <td> <span class="badge-red">Incomplet</span></td>
                                <td>
                                    <a href="#" class="btn-payer" data-toggle="modal"  data-id="1" data-name="Ouattara" data-target="#payerModalCenter"><i class="fa fa-money"></i> Payer</a>
                                    <a href="#" class="btn-voir"><i class="fa fa-eye"></i> Voir</a>
                                </td>
                            </tr>
                            <tr>
                                <td>25/01/2023</td>
                                <td>2512</td>
                                <td>Ouattara</td>
                                <td> <span class="badge-jaune">En attente</span></td>
                                <td>
                                    <a href="#" class="btn-payer" data-toggle="modal"  data-id="1" data-name="Ouattara" data-target="#payerModalCenter"><i class="fa fa-money"></i> Payer</a>
                                    <a href="#" class="btn-voir"><i class="fa fa-eye"></i> Voir</a>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php
        }else{
        ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="header-box">
                      <div class="d-flex align-items-center">
                          <p class="m-0 w50">  Historique des paiements</p>
                          <div class="w50 text-right ">
                                  <a href="<?=$domaine?>/compte/dashboard" class="btn-white">Tableu de bord</a>
                          </div>
                      </div>
                    </div>
                    <div class="bg-white-color pd25">
                        <ul class="nav nav-tabs hidden-sm hidden-xs myTabsUl" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#infos" aria-controls="infos" role="tab" data-toggle="tab">Informations</a>
                            </li>
                            <li role="presentation">
                                <a href="#historiques" aria-controls="historiques" role="tab" data-toggle="tab">Historiques</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="infos">
                                <div class="row pd25 pInfo">
                                    <div class="col-md-6">
                                        <p class="m-0">Nom & Prénom : <b>Ouattara Gnelezie</b></p>
                                        <p class="m-0">Prénom  : <b>email@gmail.com</b></p>
                                        <p class="m-0">Ville  : <b>Kasséré</b></p>
                                        <p class="m-0">Téléphone  : <b>225 00 00 00 00 00</b></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="m-0">Boîte postale : <b>225</b></p>
                                        <p class="m-0">Banque et N° de compte : <b>050255</b></p>
                                        <p class="m-0">N° compte contribuable  : <b>00555</b></p>
                                        <p class="m-0">MECANO  : <b>225 00 00 00 00 00</b></p>
                                        <p class="m-0">Service ou affectation   : <b>Etudiants</b></p>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="historiques">
                                <table id="table_historique" class="table newtable">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Référence</th>
                                        <th>Montant</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>25/01/2023</td>
                                        <td>p002222512</td>
                                        <td>150 000</td>

                                        <td>
                                            <a href="<?=$domaine?>/facture/f04545" class="btn-voir" target="_blank"> <i class="fa fa-print"></i> Imprimer</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>25/01/2023</td>
                                        <td>p002222512</td>
                                        <td>150 000</td>
                                        <td>
                                            <a href="<?=$domaine?>/facture/f04545" class="btn-voir" target="_blank"> <i class="fa fa-print"></i> Imprimer</a>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

    </div>
</div>



<!--Modal-->
<div class="modal fade" id="payerModalCenter" tabindex="-1" role="dialog" aria-labelledby="payerModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLongTitle">Paiement du loyer de <span class="nom" id="nom"></span></h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="formPayer">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="montant">Montant <i class="required"></i></label>
                        <input type="text" class="form-control input-style input-height" name="montant" id="montant" placeholder="Montant" required/>
                        <input type="hidden" name="userId" id="userId"/>
                    </div>
                    <div class="form-group">
                        <label for="note">Note</label>
                        <textarea class="form-control input-style" name="note" id="note" placeholder="Note"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-danger btn-closed" data-dismiss="modal">Annuler</a>
                    <button  class="btn btn-payer-maintenant">Payer maintenant</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php include_once $layout.'/footer.php'?>
<script>
    var table_locataire;
    var table_historique;
    $(document).ready(function() {

        $('#payerModalCenter').on('show.bs.modal', function (e) {
            var userId = $(e.relatedTarget).data('id');
            var userName = $(e.relatedTarget).data('name');
            $('#userId').val(userId);
            $('#nom').html(userName);
        });







        table_locataire = $('#table_locataire').DataTable({
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
        table_historique = $('#table_historique').DataTable({
            "ordering": false,
            "pageLength": 25,
            "oLanguage": {
                "sProcessing": "Traitement en cours ...",
                "sLengthMenu": '<h3>Historique des paiement</h3>',
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
        $("#montant").keyup(function (event) {
            if (/\D/g.test(this.value)) {
                //Filter non-digits from input value.
                this.value = this.value.replace(/\D/g, '');
            }
        });


    })
</script>