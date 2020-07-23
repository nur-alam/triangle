<?php
/*
 * Template Name: Service
 */

get_header();
?>

    <div id="service" style="padding: 100px 0px;">
        <div class="row">
            <div class="container">
                <div class="col-md-12">
                    <?php
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
