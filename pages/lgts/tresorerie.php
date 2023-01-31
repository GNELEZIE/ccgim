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
                        Trésorerie
                    </div>
                    <div class="bg-white-color pb30 mes-lgts">
                        <div class="row">
                            <div class="col-md-3">
                                <a class="btn-add-payer" href="#" data-toggle="modal"  data-target="#payerModalCenter"> <i class="fa fa-plus"></i> Ajouter un paiment</a>
                            </div>
                        </div>
                        <table id="table_locataire" class="table newtable">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>N°CC</th>
                                <th>Nom</th>
                                <th>Libellé</th>
                                <th>Montant</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>25/01/2023</td>
                                <td>2512</td>
                                <td>Ouattara</td>
                                <td> YOPOUGON ANANERAIE </td>
                                <td> <span class="badge-green"><b>150 000 CFA</b> </span></td>
                                <td>
                                    <a href="<?=$domaine?>/facture/f04545" class="btn-voir"> <i class="fa fa-print"></i> Imprimer</a>
                                </td>
                            </tr>
                            <tr>
                                <td>25/01/2023</td>
                                <td>2512</td>
                                <td>Ouattara</td>
                                <td> Paiement d'impôt </td>
                                <td> <span class="badge-red"><b>150 000 CFA</b> </span></td>
                                <td>
                                    <a href="<?=$domaine?>/facture/f04545" class="btn-voir"> <i class="fa fa-print"></i> Imprimer</a>
                                </td>
                            </tr>
                            <tr>
                                <td>25/01/2023</td>
                                <td>2512</td>
                                <td>Ouattara</td>
                                <td> YOPOUGON ANANERAIE </td>
                                <td> <span class="badge-green"><b>150 000 CFA</b> </span></td>
                                <td>
                                    <a href="<?=$domaine?>/facture/f04545" class="btn-voir"> <i class="fa fa-print"></i> Imprimer</a>
                                </td>
                            </tr>
                            <tr>
                                <td>25/01/2023</td>
                                <td>2512</td>
                                <td>Ouattara</td>
                                <td> YOPOUGON ANANERAIE </td>
                                <td> <span class="badge-green"><b>150 000 CFA</b> </span></td>
                                <td>
                                    <a href="<?=$domaine?>/facture/f04545" class="btn-voir"> <i class="fa fa-print"></i> Imprimer</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

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
                        <label for="type_transac">Type d'opération <i class="required"></i></label>
                        <select class="wide form-control no-nice-select-search-box input-style input-height" name="type_transac" id="type_transac" required>
                            <option value="">Type d'opération</option>
                            <option value="1">Entrée de caisse</option>
                            <option value="2">Sortie de caisse</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="libelle" class="pd15">Libellé</label>
                        <textarea class="form-control input-style" name="libelle" id="libelle" placeholder="Libellé"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="montant" >Montant <i class="required"></i></label>
                        <input type="text" class="form-control input-style input-height" name="montant" id="montant" placeholder="Montant" required/>
                        <input type="hidden" name="userId" id="userId"/>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-danger btn-closed" data-dismiss="modal">Annuler</a>
                    <button  class="btn btn-payer-maintenant"> Enregistrer </button>
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
        $('#type_transac').niceSelect();
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
                "sLengthMenu": '<h3>Liste des paiements</h3>',
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