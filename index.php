<?php

echo 'index.php';

get_header();
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="searc-form">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</div>

<?php
if ( have_posts() ) :
    while (have_posts()) :
        the_post();?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="each_post">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a> </br>
                        Author : <?php the_author_posts_link(); ?><?php the_excerpt(); ?>
                        Category lists : <?php echo get_the_category_list(); ?>
                        Tag lists :
                        <?php
                            echo get_the_tag_list("<ul class='list-unstyled'><li>", "</li><li>", "</li></ul>");
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
    endwhile;
endif;

//get_sidebar();

get_footer();