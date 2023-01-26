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
                         Mes logements
                    </div>
                    <div class="bg-white-color pb30 mes-lgts">
                    <div class="row ">
                        <div class="col-md-4">
                            <div class="apartments-content">
                                <div class="image-content">
                                    <div class="caroussel-item">
                                        <div class="owl-carousel">
                                            <div class="item">
                                                <a href="#">
                                                    <img src="<?=$cdn_domaine?>/assets/images/apartment/apartment-four.png" alt="apartment" />
                                                </a>
                                            </div>
                                            <div class="item">
                                                <a href="#">
                                                    <img src="<?=$cdn_domaine?>/assets/images/apartment/apartment-four.png" alt="apartment" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="text-content">
                                    <div class="top-content">
                                        <h3><a href="apartment-single.html">Family Apartment</a></h3>
                                        <span><i class="fa fa-map-marker"></i>Dhanmondi, Dhaka</span>
                                    </div>
                                    <div class="bottom-content clearfix">
                                        <span class="clearfix"></span>
                                        <div class="rent-price pull-left">
                                            $200
                                        </div>
                                        <div class="share-meta dropup pull-right">
                                            <ul>
                                                <li class="dropup">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-eye m-0"></i> 23</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="apartments-content">
                                <div class="image-content">
                                    <a href="apartment-single.html"><img src="<?=$cdn_domaine?>/assets/images/apartment/apartment-four.png" alt="apartment" /></a>
                                </div>
                                <div class="text-content">
                                    <div class="top-content">
                                        <h3><a href="apartment-single.html">Family Apartment</a></h3>
                                        <span><i class="fa fa-map-marker"></i>Dhanmondi, Dhaka</span>
                                    </div>
                                    <div class="bottom-content clearfix">
                                        <span class="clearfix"></span>
                                        <div class="rent-price pull-left">
                                            $200
                                        </div>
                                        <div class="share-meta dropup pull-right">
                                            <ul>
                                                <li class="dropup">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-eye m-0"></i> 23</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="apartments-content">
                                <div class="image-content">
                                    <a href="apartment-single.html"><img src="<?=$cdn_domaine?>/assets/images/apartment/apartment-four.png" alt="apartment" /></a>
                                </div>
                                <div class="text-content">
                                    <div class="top-content">
                                        <h3><a href="apartment-single.html">Family Apartment</a></h3>
                                        <span><i class="fa fa-map-marker"></i>Dhanmondi, Dhaka</span>
                                    </div>
                                    <div class="bottom-content clearfix">
                                        <span class="clearfix"></span>
                                        <div class="rent-price pull-left">
                                            $200
                                        </div>
                                        <div class="share-meta dropup pull-right">
                                            <ul>
                                                <li class="dropup">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-eye m-0"></i> 23</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php include_once $layout.'/footer.php'?>
<script>
    $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            loop: true,
            nav:true,
            autoplay: true,
            autoplayTimeout: 4000,
            smartSpeed:3000,
            autoplayHoverPause: true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }

        });
    })
</script>