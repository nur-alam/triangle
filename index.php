<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package themeum
 */

get_header();
?>


    <section id="home-slider" style="background: url(<?php /*echo  get_template_directory_uri() . '/assets/img/home/slider-bg.png'; */?>) 0 100% repeat-x">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1>We Are Creative Nerds</h1>
                        <p>Boudin doner frankfurter pig. Cow shank bresaola pork loin tri-tip tongue venison pork belly meatloaf short loin landjaeger biltong beef ribs shankle chicken andouille.</p>
                        <a href="#" class="btn btn-common">SIGN UP</a>
                    </div>
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/home/slider/hill.png'; ?>" class="slider-hill" alt="slider image">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/home/slider/house.png'; ?>" class="slider-house" alt="slider image">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/home/slider/sun.png'; ?>" class="slider-sun" alt="slider image">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/home/slider/birds1.png'; ?>" class="slider-birds1" alt="slider image">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/home/slider/birds2.png'; ?>" class="slider-birds2" alt="slider image">
                </div>
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <!--/#home-slider-->


    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/home/icon1.png'; ?>" alt="">
                        </div>
                        <h2>Incredibly Responsive</h2>
                        <p>Ground round tenderloin flank shank ribeye. Hamkevin meatball swine. Cow shankle beef sirloin chicken ground round.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/home/icon2.png'; ?>" alt="">
                        </div>
                        <h2>Superior Typography</h2>
                        <p>Hamburger ribeye drumstick turkey, strip steak sausage ground round shank pastrami beef brisket pancetta venison.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/home/icon3.png'; ?>" alt="">
                        </div>
                        <h2>Swift Page Builder</h2>
                        <p>Venison tongue, salami corned beef ball tip meatloaf bacon. Fatback pork belly bresaola tenderloin bone pork kevin shankle.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->


<?php

get_footer();
