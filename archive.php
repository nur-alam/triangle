<?php

echo 'archive.php' . '</br></br>';
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            List :
            <?php
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                        the_title();
                        echo '</br>';
                    endwhile;
                endif;
            ?>
        </div>
    </div>
</div>

