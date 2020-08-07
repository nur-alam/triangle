<?php

echo "author.php" . '</br></br>';

if (have_posts()) :
    while (have_posts()) :
        the_post();
        echo get_the_title() . '</br>';
    endwhile;
endif;