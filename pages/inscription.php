<?php
include_once $layout.'/header.php'
?>


    <div class="container-fluid py-5 bg-gray-color pd-section">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6 offset-3">
                    <form class="cd-form  bg-white-color">
                        <h2 class="text-center m-0"> <i class="fa fa-user"></i> Inscription</h2>
                        <p class="fieldset">
                            <label class="image-replace cd-username" for="username">Username</label>
                            <input class="full-width has-padding has-border" id="username" type="text" placeholder="Nom d'utilisateur">
                        </p>
                        <p class="fieldset">
                            <label class="image-replace cd-email" for="signup-email">E-mail</label>
                            <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
                        </p>

                        <p class="fieldset">
                            <label class="image-replace cd-password" for="signup-password">Mot de passe <i class="requied"></i></label>
                            <input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Mot de passe">
                            <a href="javascript:void(0);" class="hide-password"> <i class="fa fa-eye-slash"></i></a>
                        </p>

                        <p class="fieldset">
                            <input type="checkbox" id="accept-terms">
                            <label for="accept-terms font-7">En cochant, vous acceptez les conditions d'utilisation  <a href="#">conditions d'utilisation</a></label>
                        </p>

                        <p class="fieldset">
                            <button class="full-width has-padding user-inscription">Inscription </button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php include_once $layout.'/footer.php'?>
