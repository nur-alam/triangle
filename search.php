<?php

echo 'search.php' . '</br></br>';

if (have_posts() && is_search()) :
    while (have_posts()) :
        the_post();
        the_title();
        echo '</br>';
    endwhile;
else:
    echo 'no result found!!';
endif;
