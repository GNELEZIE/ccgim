<?php
if(!isset($_SESSION['_ccgim_201'])){
    header('location:'.$domaine.'/connexion');
    exit();

}

$token = openssl_random_pseudo_bytes(16);
$token = bin2hex($token);
$_SESSION['myformkey'] = $token;
include_once $layout.'/header.php'?>

    <div class="container-fluid py-5 bg-gray-color pd-section">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-3">
                    <div class="compte-box bg-white-color radius-6">
                        <img src="<?=$cdn_domaine?>/media/users/<?php if($data['photo'] != ''){echo $data['photo'];}else{echo 'avatar.png';}?>" class="img-profil" id="imguser"  alt="<?=html_entity_decode(stripslashes($data['nom']))?>">
                       <div class="btn-a text-center py-5">
                           <a href="javascript:void(0);" id="btn-img"> <i class="fa fa-edit"></i> Modifier ma photo</a>
                       </div>
                    </div>
                    <form method="post" enctype="multipart/form-data" id="userImgForm">
                        <input type="hidden" class="form-control" name="formkey" value="<?=$token?>">
                        <input type="file" name="userImg" id="userImg" style="display: none"/>
                    </form>
                </div>
                <div class="col-md-9">
                    <div class="header-box">
                       Mon profil
                    </div>
                    <div class="bg-white-color">
                        <form class="cd-form  bg-white-color" method="post">
                            <?php if(!empty($errors)){ ?>
                                <div class="alert alert-danger alert-pd" style="font-size: 13px" role="alert">
                                    <?php foreach($errors as $error){ ?>
                                        <?php echo $error ?>
                                    <?php }?>
                                </div>
                            <?php }?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="nom">Nom <i class="required"></i></label>
                                        <input class="full-width has-padding has-border" name="nom" id="nom" type="text" placeholder="Nom" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="prenom">Prénom <i class="required"></i></label>
                                        <input class="full-width has-padding has-border" name="prenom" id="prenom" type="text" placeholder="Prénom" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="email">E-mail <i class="required"></i></label>
                                        <input class="full-width has-padding has-border" name="email" id="email" type="email" placeholder="E-mail" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="ville">Ville <i class="required"></i></label>
                                        <input class="full-width has-padding has-border" name="ville" id="ville" type="text" placeholder="Ville" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="phone">Téléphone <i class="required"></i></label>
                                        <input type="tel" class="full-width has-padding has-border" name="phone" id="phone" style="padding: 7px 15px 7px 45px !important;"  required>
                                        <input type="hidden"  name="isoPhone" id="isoPhone">
                                        <input type="hidden"  name="dialPhone" id="dialPhone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="ville">Ville <i class="required"></i></label>
                                        <input class="full-width has-padding has-border" name="ville" id="ville" type="text" placeholder="Ville" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="hidden" class="form-control" name="formkey" value="<?=$token?>">
                                <button class="full-width has-padding user-inscription"> <i class="loaderBtn"></i> Modifier </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>



<?php include_once $layout.'/footer.php'?>
<script>
    $("#phone").keyup(function (event) {
        if (/\D/g.test(this.value)) {
            //Filter non-digits from input value.
            this.value = this.value.replace(/\D/g, '');
        }
    });

    var inputPhone = document.querySelector("#phone");
    window.intlTelInput(inputPhone, {
        initialCountry: 'ci',
        utilsScript: "<?=$cdn_domaine?>/libs/intltelinput/js/utils.js"
    });
    var iti = window.intlTelInputGlobals.getInstance(inputPhone);
    var countryData = iti.getSelectedCountryData();
    $('#isoPhone').val(countryData["iso2"]);
    $('#dialPhone').val(countryData["dialCode"]);
    inputPhone.addEventListener("countrychange", function() {
        var iti = window.intlTelInputGlobals.getInstance(inputPhone);
        var countryData = iti.getSelectedCountryData();
        $('#isoPhone').val(countryData["iso2"]);
        $('#dialPhone').val(countryData["dialCode"]);
    });


    $('#btn-img').click(function(e){
        e.preventDefault();
        $('#userImg').trigger('click');
    });

    //fonction vue image télécharger
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imguser').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#userImg').change(function(e){
        e.preventDefault();
        readURL(this);
        var value = document.getElementById('userImgForm');
        var form = new FormData(value);

        $.ajax({
            method: 'post',
            url: '<?=$domaine?>/controle/photo.save',
            data: form,
            contentType:false,
            cache:false,
            processData:false,
            dataType: 'json',
            success: function(data){
                if(data.data_info == "ok"){
                    $('#imguser').attr('src', data.data_photo);
                }else {
                    swal("Action Impossible !", "Une erreur s\'est produite lors du traitement des données !", "error");
                }
            }
        });

    });

</script>