<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 overflow">
                <div class="social-icons pull-right">
                    <ul class="nav nav-pills">
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                        <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="<?php echo esc_url(site_url()); ?>">
                    <h1>
                        <img src=<?php echo TRIANGLE_DIR . '/assets/img/logo.png' ?> alt="logo">
                    </h1>
                </a>

            </div>
            <div class="collapse navbar-collapse">
                    <?php
                        wp_nav_menu(
                                array(
                                        'theme_location' => 'triangle_top_menu',
                                        'container' => 'ul',
                                        'menu_class' => 'nav navbar-nav navbar-right',
                                )
                        );
                    ?>
<!--                <ul class="nav navbar-nav navbar-right">-->
<!--                    <li class="active"><a href="--><?php //echo esc_url(site_url()); ?><!--">Home</a></li>-->
<!--                    <li class="dropdown"><a href="#">Pages <i class="fa fa-angle-down"></i></a>-->
<!--                        <ul role="menu" class="sub-menu">-->
<!--                            <li><a href="aboutus.html">About</a></li>-->
<!--                            <li><a href="aboutus2.html">About 2</a></li>-->
<!--                            <li><a href="service.html">Services</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li class="dropdown"><a href="blog.html">Blog <i class="fa fa-angle-down"></i></a>-->
<!--                        <ul role="menu" class="sub-menu">-->
<!--                            <li><a href="blog.html">Blog Default</a></li>-->
<!--                            <li><a href="blogtwo.html">Timeline Blog</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li class="dropdown"><a href="portfolio.html">Portfolio <i class="fa fa-angle-down"></i></a>-->
<!--                        <ul role="menu" class="sub-menu">-->
<!--                            <li><a href="portfolio.html">Portfolio Default</a></li>-->
<!--                            <li><a href="portfoliofour.html">Isotope 3 Columns + Right Sidebar</a></li>-->
<!--                            <li><a href="portfolioone.html">3 Columns + Right Sidebar</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li><a href="shortcodes.html ">Shortcodes</a></li>-->
<!--                </ul>-->
            </div>
            <div class="search">
                <form role="form">
                    <i class="fa fa-search"></i>
                    <div class="field-toggle">
                        <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>
<!--/#header-->
