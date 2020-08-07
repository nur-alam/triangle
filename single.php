<?php

echo 'single.php';

get_header();

if ( have_posts() ) :
    while (have_posts()) :
        the_post();?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="single-post">
                        <a href="<?php esc_url(the_permalink()) ?>">
                            <?php the_title(); ?>
                        </a> by
                        <?php

                        the_author();
                        the_content();

                        if(comments_open()) { ?>
                            <div class="blog-comment">
                                <?php comments_template(); ?>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
        <?php
    endwhile;
endif;

//get_sidebar();

get_footer();