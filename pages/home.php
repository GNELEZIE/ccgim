<?php
$list =  $logement->getAllLgts();
include_once $layout.'/header.php'
?>

<div class="main-slide eight">
    <div class="pogoSlider">
        <div class="pogoSlider-slide" data-transition="expandReveal" data-duration="1000" style="background-image:url(<?=$cdn_domaine?>/media/bg2.jpg)">
            <div class="container-slider one">
                <div class="row">
                    <div class="col-md-12">
                        <div class="slider-content-eight">
                            <h2 class="pogoSlider-slide-element title1" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="200">
                                CCGIM est une agence immobilière
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="form-area eight searchDiv">
    <div class="container">
        <div class="row">
            <div class="col-md-12 form-bg form-top border-radius">
                <form  method="get" action="<?=$domaine?>/recherche-logement" class="advance_search_query" id="searchForm">
                    <div class="form-content">
                        <div class="form-group w40">
                            <label for="ville" >Ville</label>
                            <select class="wide" name="ville" id="ville">
                                <option  selected>Choisir une ville</option>
                                <option value="Abidjan">Abidjan</option>
                                <option value="Bouake">Bouake</option>
                                <option value="Yamoussokro">Yamoussokro</option>
                                <option value="Korhogo">Korhogo</option>
                                <option value="Boundiali">Boundiali</option>
                                <option value="Daloa">Daloa</option>
                                <option value="Man">Man</option>
                            </select>
                        </div>
                        <div class="form-group w40">
                            <label for="commune" >Commune</label>
                            <select class="wide" name="commune" id="commune">
                                <option selected>Choisir une commune</option>
                                <option value="Abobo">Abobo</option>
                                <option value="Adjame">Adjame</option>
                                <option value="Cocody">Cocody</option>
                                <option value="Koumassi">Koumassi</option>
                                <option value="Marcory">Marcory</option>
                                <option value="Yopougon">Yopougon</option>
                                <option value="Bingerville">Bingerville</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="button btn-blue"> Recherche</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row row-service">
            <div class="col-md-12">
                <div class="heading-content-one border">
                    <h2 class="title font-30">Nos services</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="apartments-content">
                    <div class="image-content">
                        <img src="<?=$cdn_domaine?>/media/vm.jpg" alt="63d8fd2600d30.jpg">
                    </div>
                    <div class="text-content">
                        <div class="top-content text-center">
                            <h3>Vente de maison</h3>
                           <div class="text-center py-3">
                               <a href="#" class="a-service">En savoir plus <i class="fa fa-arrow-right"></i></a>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="apartments-content">
                    <div class="image-content">
                        <img src="<?=$cdn_domaine?>/media/am.jpg" alt="63d8fd2600d30.jpg">
                    </div>
                    <div class="text-content">
                        <div class="top-content text-center">
                            <h3>Louer une maison</h3>
                           <div class="text-center py-3">
                               <a href="#" class="a-service">En savoir plus <i class="fa fa-arrow-right"></i></a>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="apartments-content">
                    <div class="image-content">
                        <img src="<?=$cdn_domaine?>/media/tch.jpg" alt="63d8fd2600d30.jpg">
                    </div>
                    <div class="text-content">
                        <div class="top-content text-center">
                            <h3>Louer un techniciens </h3>
                           <div class="text-center py-3">
                               <a href="#" class="a-service">En savoir plus <i class="fa fa-arrow-right"></i></a>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
        </div>
    </div>
</div>
<div class="apartments-area bg-gray-color">
    <div class="container">
        <div class="col-md-12">
            <div class="heading-content-one border">
                <h2 class="title font-30"> &amp; Appartements</h2>
                <h5 class="sub-title">Trouvez un appartements, pour votre capacité</h5>
            </div>
        </div>
        <div class="row">
            <?php
            while($listData = $list->fetch()){
                $gals = $galerie->getGalerieByLgtId($listData['id_logement']);
                ?>
                <div class="col-md-3">
                    <div class="apartments-content">
                        <div class="image-content">
                            <div class="caroussel-item">
                                <div class="owl-carousel position-relative">
                                    <?php
                                    while($galDatas = $gals->fetch()){
                                        ?>
                                        <div class="item  position-relative">
                                            <a href="<?=$domaine?>/logements/<?=$listData['slug_lgt']?>">
                                                <img src="<?=$cdn_domaine?>/media/lgts/<?=$galDatas['photo']?>" alt="<?=$galDatas['photo']?>" />
                                            </a>
                                        </div>
                                    <?php
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                        <div class="text-content">
                            <div class="top-content">
                                <h3><a href="<?=$domaine?>/logements/<?=$listData['slug_lgt']?>"><?=reduit_text(html_entity_decode(stripslashes($listData['nom_lgt'])),'20') ?></a></h3>
                                <span><i class="fa fa-map-marker"></i><?=html_entity_decode(stripslashes($listData['ville_lgt'])) .', '.reduit_text(html_entity_decode(stripslashes($listData['quartier_lgt'])),'10')?></span>
                            </div>
                            <div class="bottom-content clearfix">
                                <div class="meta-bed-room">
                                    <i class="fa fa-home"></i> <?=$listData['chambres']?> Chambres
                                </div>
                                <div class="meta-bath-room">
                                    <i class="fa fa-bath"></i><?=$listData['bain']?> Salles De Bain
                                </div>
                                <span class="clearfix"></span>
                                <div class="rent-price pull-left">
                                    <?=number_format($listData['tarif'],0,',',' ') ?> CFA
                                </div>
                                <div class="share-meta dropup pull-right">
                                    <ul>
                                        <li class="dropup">
                                            <a href="#" class="dropdown-toggle font-13" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="font-13"><i class="fa fa-eye m-0"></i> 25</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
        <a href="<?=$domaine?>/logements" class="button nevy-button">Tous les appartements</a>
    </div>
</div>
<div class="fun-fects-area" style="background-image:url(<?=$cdn_domaine?>/assets/images/count-down-image.png)">
    <div class="container">
        <div class="stat">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="milestone-counter">
                    <h3 class="stat-count highlight" data-form="1" data-to="2500" data-speed="3000">2500</h3>
                    <div class="milestone-details">Clients</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="milestone-counter">
                    <h3 class="stat-count highlight" data-form="1" data-to="3055" data-speed="3000">3055</h3>
                    <div class="milestone-details">Appartement</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="milestone-counter">
                    <h3 class="stat-count highlight" data-form="1" data-to="50" data-speed="3000">50</h3>
                    <div class="milestone-details">Commune</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="milestone-counter">
                    <h3 class="stat-count highlight" data-form="1" data-to="1530" data-speed="3000">1530</h3>
                    <div class="milestone-details">Quartier</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="gallery-area bg-gray-color">
    <div class="container-fluid">
        <div class="container-large-device">
            <div class="row">
                <div class="col-md-7">
                    <div class="gallery-left-content">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <a class="image-pop-up" href="<?=$cdn_domaine?>/assets/images/gallery/gallery-one.png">
                                    <img src="<?=$cdn_domaine?>/assets/images/gallery/gallery-one.png" alt="gallery" />
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <a class="image-pop-up" href="<?=$cdn_domaine?>/assets/images/gallery/gallery-two.png">
                                    <img src="<?=$cdn_domaine?>/assets/images/gallery/gallery-two.png" alt="gallery" />
                                </a>
                            </div>
                            <div class="clearfix visible-xs-block"></div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <a class="image-pop-up" href="<?=$cdn_domaine?>/assets/images/gallery/gallery-three.png">
                                    <img src="<?=$cdn_domaine?>/assets/images/gallery/gallery-three.png" alt="gallery" />
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <a class="image-pop-up" href="<?=$cdn_domaine?>/assets/images/gallery/gallery-four.png">
                                    <img src="<?=$cdn_domaine?>/assets/images/gallery/gallery-four.png" alt="gallery" />
                                </a>
                            </div>
                            <div class="clearfix visible-xs-block"></div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <a class="image-pop-up" href="<?=$cdn_domaine?>/assets/images/gallery/gallery-five.png">
                                    <img src="<?=$cdn_domaine?>/assets/images/gallery/gallery-five.png" alt="gallery" />
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <a class="image-pop-up" href="<?=$cdn_domaine?>/assets/images/gallery/gallery-six.png">
                                    <img src="<?=$cdn_domaine?>/assets/images/gallery/gallery-six.png" alt="gallery" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="gallery-right-content">
                        <h2 class="font-30">Notre galerie </h2>
                        <h3>Best of our <br/>Event portfolio Photos</h3>
                        <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam. Morbi mollis pellen tesque offs aiug ueia nec rhoncus. Nam ute ultricies.</p>
                        <a href="gallery.html" class="button nevy-button">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="call-to-action overlay-bg" style="background-image:url(<?=$cdn_domaine?>/assets/images/contact-bg-image.png)">
    <div class="container">
        <div class="row tb">
            <div class="col-md-6 col-sm-6 tb-cell">
                <div class="contact-left-content">
                    <h3>Voulez-vous louer votre maison</h3>
                    <h4>Appelez-nous et listez votre propriété ici</h4>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 tb-cell">
                <div class="contact-right-content">
                    <h4><a href="#">00225 00 00 00 00 00<span>support@ccigim.com</span></a></h4>
                    <a href="#" class="button">Contactez-nous</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="testimonial-area bg-gray-color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="testimonial-heading-content">
                    <h2 class="title">Témoignages</h2>
                    <i class="fa fa-quote-right"></i>
                    <h2 class="sub-title">Quelques avis</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="testimonial-slider owl-carousel owl-theme">
                    <div class="item">
                        <div class="client-image">
                            <img src="<?=$cdn_domaine?>/assets/images/testimonial-image.png" alt="testimonial" />
                        </div>
                        <div class="client-content">
                            <h3>Single Rakib</h3>
                            <h5>softhopper Manager</h5>
                            <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                            <div class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-image">
                            <img src="<?=$cdn_domaine?>/assets/images/testimonial-image.png" alt="testimonial" />
                        </div>
                        <div class="client-content">
                            <h3>Single Rakib</h3>
                            <h5>softhopper Manager</h5>
                            <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                            <div class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-image">
                            <img src="<?=$cdn_domaine?>/assets/images/testimonial-image.png" alt="testimonial" />
                        </div>
                        <div class="client-content">
                            <h3>Single Rakib</h3>
                            <h5>softhopper Manager</h5>
                            <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                            <div class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-image">
                            <img src="<?=$cdn_domaine?>/assets/images/testimonial-image.png" alt="testimonial" />
                        </div>
                        <div class="client-content">
                            <h3>Single Rakib</h3>
                            <h5>softhopper Manager</h5>
                            <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                            <div class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-image">
                            <img src="<?=$cdn_domaine?>/assets/images/testimonial-image.png" alt="testimonial" />
                        </div>
                        <div class="client-content">
                            <h3>Single Rakib</h3>
                            <h5>softhopper Manager</h5>
                            <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                            <div class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-image">
                            <img src="<?=$cdn_domaine?>/assets/images/testimonial-image.png" alt="testimonial" />
                        </div>
                        <div class="client-content">
                            <h3>Single Rakib</h3>
                            <h5>softhopper Manager</h5>
                            <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                            <div class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-image">
                            <img src="<?=$cdn_domaine?>/assets/images/testimonial-image.png" alt="testimonial" />
                        </div>
                        <div class="client-content">
                            <h3>Single Rakib</h3>
                            <h5>softhopper Manager</h5>
                            <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                            <div class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-image">
                            <img src="<?=$cdn_domaine?>/assets/images/testimonial-image.png" alt="testimonial" />
                        </div>
                        <div class="client-content">
                            <h3>Single Rakib</h3>
                            <h5>softhopper Manager</h5>
                            <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam.</p>
                            <div class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact-area">
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content-two available">
                        <h2 class="title font-30">Nous sommes disponibles pour vous 7j/7</h2>
                        <h5 class="sub-title">Notre service d'assistance en ligne est toujours 24 heures</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="map-left-content">
                        <iframe width="600" height="350" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC871wKM6aoCLSV_pT3xBVsYzNGXaDh7Pw&amp;q=121King+St,Melbourne+VIC+3000,Australia" allowfullscreen="allowfullscreen"></iframe>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="map-right-content">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="contact">
                                    <h4 class="font-15"><i class="fa fa-address-book"></i>Adresse</h4>
                                    <p>Abidjan, Yopougon BAE</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="contact">
                                    <h4 class="font-15"><i class="fa fa-envelope"></i>Mail</h4>
                                    <p>contact@ccgim.com support@ccgim.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="contact">
                                    <h4 class="font-15"><i class="fa fa-phone-square"></i>Téléphone</h4>
                                    <p>00225 00 00 00 00  <br/>00225 00 00 00 00 00</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="contact">
                                    <h4 class="font-15"><i class="fa fa-user-circle"></i>Réseaux sociaux</h4>
                                    <div class="social-icon">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
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
    $(document).ready(function(){
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

        $('#ville').niceSelect();
        $('#commune').niceSelect();
    });
</script>