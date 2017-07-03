<?php get_header(); ?>
    <?php include( LDD_DIR_PATH . '/partials/navigation.php' ); ?>
    <div class="container" style="margin-top: 100px">
        <?php

            if ( have_posts() ):

                while( have_posts() ): the_post();
                    the_content();
                endwhile;

            endif;

        ?>
    </div>
<?php get_footer(); ?>
