<?php
require_once $controller.'/user.inscription.php';

$token = openssl_random_pseudo_bytes(16);
$token = bin2hex($token);
$_SESSION['myformkey'] = $token;

include_once $layout.'/header.php'
?>


    <div class="container-fluid py-5 bg-gray-color pd-section">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6 offset-3">
                    <form class="cd-form  bg-white-color" method="post">
                        <h2 class="text-center m-0"> <i class="fa fa-user"></i> Inscription</h2>
                        <?php if(!empty($errors)){ ?>
                            <div class="alert alert-danger alert-pd" style="font-size: 13px" role="alert">
                                <?php foreach($errors as $error){ ?>
                                    <?php echo $error ?>
                                <?php }?>
                            </div>
                        <?php }?>
                            <div class="form-group">
                                <label class="" for="email">E-mail <i class="required"></i></label>
                                <input class="full-width has-padding has-border" name="email" id="email" type="email" placeholder="E-mail" required>
                            </div>

                        <div class="form-group position-relative">
                            <label  for="password">Mot de passe <i class="required"></i></label>
                            <input class="full-width has-padding has-border" name="password" id="password" type="text"  placeholder="Mot de passe" required>
                            <a href="javascript:void(0);" class="hide-password"> <i class="fa fa-eye-slash"></i></a>
                        </div>

                        <div class="form-group position-relative">
                            <label for="cpassword">Confirmer mot de passe <i class="required"></i></label>
                            <input class="full-width has-padding has-border" name="cpassword" id="cpassword" type="text"  placeholder="Confirmer mot de passe" required>
                            <a href="javascript:void(0);" class="hide-password"> <i class="fa fa-eye-slash"></i></a>
                        </div>

                        <div class="form-group">
                            <input type="checkbox" id="accept-terms" required>
                            <label for="accept-terms font-10">En cochant, vous acceptez les conditions d'utilisation  <a href="#">conditions d'utilisation</a></label>
                        </div>

                        <div class="form-group">
                            <input type="hidden" class="form-control" name="formkey" value="<?=$token?>">
                            <button class="full-width has-padding user-inscription"> <i class="loaderBtn"></i> Inscription </button>
                            <p class="text-center font-13 pt20">Vous avez déja un compte ? Alors<a href="#"> connectez-vous</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php include_once $layout.'/footer.php'?>
<script>
    $(document).ready(function(){
        $("#formRegister").submit(function(){
            $(".loaderBtn").html('<i class="loader-btn"></i>')
        });
    });
</script>
