<?php
/**
 *
 * Template Name: About Us
 *
 */

get_header();
?>
    <div id="about-us" style="padding: 100px 0px;">
        <div class="row">
            <div class="container">
                <div class="col-md-12"><?php
                    while (have_posts()) {
                        the_post();
                        the_content();
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();