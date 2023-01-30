<?php
if(!isset($_SESSION['_ccgim_201'])){
    header('location:'.$domaine.'/connexion');
    exit();

}

include_once $layout.'/header.php'?>

<div class="container-fluid py-5 bg-gray-color pd-section">
    <div class="container py-5">
        <div class="header-box">
            Publiez votre logement en 4 étapes
        </div>
        <div class="bg-white-color pd25 mes-addlgts">
        <div id="msform">
        <ul id="progressbar">
            <li class="active" id="description"><strong>Description</strong></li>
            <li class="active" id="localissation"><strong>Localisation</strong></li>
            <li class="active" id="galerie"><strong>Galerie</strong></li>
            <li id="tarifs"><strong>Tarifs</strong></li>
        </ul>
        <div class="form-card box-form  box-shadow-none" style="background: none">
        <div class="row">
            <div class="col-md-12">
                <h2 class="fs-title">La galerie</h2>
            </div>
            <div class="col-md-3 position-relative mobile-w-50 pb-4 gal-load updgal-load">
                <img src="<?=$cdn_domaine?>'/media/lgts/defaut.png" class="gal-cover photo-blur updloadImg"/>
                <i class="fa fa-circle-o-notch fa-spin" style="font-size: 30px;color: #F29F05;position: absolute; top:38%; left: 43%"></i>
            </div>
            <div class="col-md-3 pb-4">
                <div class="upload-form updImgBox" onclick="uploadImg()()">
                                                    <span class="file-msg file-upd">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-camera mb-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg><br/>
                                                        Cliquez pour ajouter une photo
                                                    </span>
                </div>
                <div class="row data-galerie pb-4"></div>
                <form method="post" enctype="multipart/form-data" id="formGalerie">
                    <input type="file" class="input-galerie" name="photos" id="photos" accept=".jpg, .jpeg, .png">
                    <input type="hidden" name="id" id="id">
                    <input type="hidden" name="formkey" value="<?=$token?>">
                </form>
            </div>
        </div>
            <div class="row">
                <div class="col-md-12 text-center pt-5">
                    <input type="hidden" class="form-control" name="formkeyLocalisation" value="<?=$token?>">
                    <a href="<?=$domaine?>/annonce/localisation/slug" class="previous  mybtn-prev btn-next mt-3 mr-3 btn-next"><i class="fa fa-angle-double-left"></i> Précedent </a>
                    <button  class="next mybtn-next btn-next mt-3 border-none" id="description-btn"> <i class="load"></i> Suivant <i class="fa fa-angle-double-right"></i></button>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>






<?php include_once $layout.'/footer.php'?>
<script>
/*    function chargeGalerie(){
        $.ajax({
            type: 'post',
            url: '<?=$domaine?>/controle/galerie.liste',
            data: {
                id : $('#id').val(),
                token: "<?=$token?>"
            },
            dataType: 'json',
            success: function(data){
                $('.data-galerie').html(data.galerieList);
            }
        });
    }

    function updChargeGalerie(){
        $.ajax({
            type: 'post',
            url: '<?=$domaine?>/controle/galerie.upd.liste',
            data: {
                id : $('#updProductId').val(),
                token: "<?=$token?>"
            },
            dataType: 'json',
            success: function(data){
                $('.upddata-galerie').html(data.galerieList);
            }
        });
    }*/

    function uploadImg(){
        $('#photos').trigger('click');
    }

    function readURLGalerie(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e){
                $('.loadImg').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#photos').change(function(e){
        e.preventDefault();
        var file = this.files[0];
        var fileType = file['type'];
        var valideImage = ["image/jpg","image/jpeg","image/png"];
        if($.inArray(fileType, valideImage) < 0){
            $('#photos').val('');
            swal("Attention !", "Vous devez choisir une image !", "error");
            $('.file-msg').html('<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-camera mb-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg><br/>Cliquez pour ajouter une photo');
        }else{
            readURLGalerie(this);
            $('.gal-load').css('display','block');
            var value = document.getElementById('formGalerie');
            var form = new FormData(value);
            $.ajax({
                method: 'post',
                url: '<?=$domaine?>/controle/galerie.save',
                data: form,
                contentType:false,
                cache:false,
                processData:false,
                success: function(data){
                    if(data == "ok"){
                        chargeGalerie();
                    }else {
                        swal("Action Impossible !", "Une erreur s\'est produite.", "error");
                    }
                    $('.gal-load').css('display','none');
                }
            });
        }
    });


</script>
