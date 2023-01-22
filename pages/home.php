<?php
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
                                    CCGIM Immobilier 100% gratuit
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-area eight">
        <div class="container">
            <div class="row">
                <div class="col-md-12 form-bg form-top border-radius">
                    <form  method="post" class="advance_search_query" id="searchForm">
                        <div class="form-content">
                            <div class="form-group w40">
                                <label for="quartier" >Communes</label>
                                <select class="wide" name="quartier" id="quartier">
                                    <option value="1">Abobo</option>
                                    <option value="2">Adjame</option>
                                    <option value="3">Cococdy</option>
                                    <option value="4">Koumassi</option>
                                    <option value="5">Marcory</option>
                                    <option value="6">Yopougon</option>
                                    <option value="7">Bingerville</option>
                                </select>
                            </div>
                            <div class="form-group w40">
                                <label for="cat" >Quartier</label>
                                <select class="wide" name="cat" id="cat">
                                    <option value="volvo">Apartments</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
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
    <div class="apartments-area bg-gray-color">
    <div class="container">
    <div class="col-md-12">
        <div class="heading-content-one border">
            <h2 class="title font-30"> &amp; Appartements</h2>
            <h5 class="sub-title">Trouvez un appartements, pour votre capacité</h5>
        </div>
    </div>
    <div class="row">
    <div class="col-md-3">
        <div class="apartments-content">
            <div class="image-content">
                <a href="apartment-single.html"><img src="<?=$cdn_domaine?>/assets/images/apartment/apartment-one.png" alt="apartment" /></a>
            </div>
            <div class="text-content">
                <div class="top-content">
                    <h3><a href="apartment-single.html">Family Apartment</a></h3>
                    <span><i class="fa fa-map-marker"></i>Dhanmondi, Dhaka</span>
                </div>
                <div class="bottom-content clearfix">
                    <div class="meta-bed-room">
                        <i class="fa fa-bed"></i> 3 Bedrooms
                    </div>
                    <div class="meta-bath-room">
                        <i class="fa fa-bath"></i>2 Bathroom
                    </div>
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
                                    <li>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-star-o"></i></a>
                            </li>
                        </ul>
                    </div>
                </div><!-- /.bottom-content -->
            </div><!-- /.text-content -->
        </div><!-- /.partments-content -->
    </div>
    <div class="col-md-3">
        <div class="apartments-content">
            <div class="image-content">
                <a href="apartment-single.html"><img src="<?=$cdn_domaine?>/assets/images/apartment/apartment-two.png" alt="apartment" /></a>
            </div>
            <div class="text-content">
                <div class="top-content">
                    <h3><a href="apartment-single.html">Family Apartment</a></h3>
                    <span><i class="fa fa-map-marker"></i>Dhanmondi, Dhaka</span>
                </div>
                <div class="bottom-content clearfix">
                    <div class="meta-bed-room">
                        <i class="fa fa-bed"></i> 3 Bedrooms
                    </div>
                    <div class="meta-bath-room">
                        <i class="fa fa-bath"></i>2 Bathroom
                    </div>
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
                                    <li>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-star-o"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="apartments-content">
            <div class="image-content">
                <a href="apartment-single.html"><img src="<?=$cdn_domaine?>/assets/images/apartment/apartment-three.png" alt="apartment" /></a>
            </div><!-- /.image-content -->

            <div class="text-content">
                <div class="top-content">
                    <h3><a href="apartment-single.html">Family Apartment</a></h3>
                                <span>
                                    <i class="fa fa-map-marker"></i>
                                    Dhanmondi, Dhaka
                                </span>
                </div><!-- /.top-content -->
                <div class="bottom-content clearfix">
                    <div class="meta-bed-room">
                        <i class="fa fa-bed"></i> 3 Bedrooms
                    </div>
                    <div class="meta-bath-room">
                        <i class="fa fa-bath"></i>2 Bathroom
                    </div>
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
                                    <li>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-star-o"></i></a>
                            </li>
                        </ul>
                    </div>
                </div><!-- /.bottom-content -->
            </div><!-- /.text-content -->
        </div><!-- /.partments-content -->
    </div>
    <div class="col-md-3">
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
                    <div class="meta-bed-room">
                        <i class="fa fa-bed"></i> 3 Bedrooms
                    </div>
                    <div class="meta-bath-room">
                        <i class="fa fa-bath"></i>2 Bathroom
                    </div>
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
                                    <li>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-star-o"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <a href="#" class="button nevy-button">Tous Les Appartements</a>
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
                                </div><!-- /.star -->
                            </div><!-- /.client-content -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="client-image">
                                <img src="<?=$cdn_domaine?>/assets/images/testimonial-image.png" alt="testimonial" />
                            </div><!-- /.client-image -->
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
        <div class="container-large-device">
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
                                        <h4><i class="fa fa-address-book"></i>Adresse</h4>
                                        <p>Abidjan, Yopougon BAE</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="contact">
                                        <h4><i class="fa fa-envelope"></i>Mail</h4>
                                        <p>contact@ccgim.com support@ccgim.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="contact">
                                        <h4><i class="fa fa-phone-square"></i>Téléphone</h4>
                                        <p>00225 00 00 00 00  <br/>00225 00 00 00 00 00</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="contact">
                                        <h4><i class="fa fa-user-circle"></i>Réseaux sociaux</h4>
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
        $('#quartier').niceSelect();
        $('#cat').niceSelect();
    });
</script>