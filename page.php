<?php

echo 'page.php' . '</br></br>';

if (have_posts()) :
    while (have_posts()) :
        the_post();
        the_title();
        the_content();
    endwhile;
endif;


