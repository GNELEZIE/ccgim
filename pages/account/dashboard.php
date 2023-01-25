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
                        Menu dashboard
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php include_once $layout.'/footer.php'?>