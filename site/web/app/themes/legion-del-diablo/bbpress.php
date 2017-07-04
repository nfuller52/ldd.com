<?php get_header(); ?>
    <?php include( LDD_DIR_PATH . '/partials/navigation.php' ); ?>
    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-9">
                <?php

                    if ( have_posts() ):

                        while( have_posts() ): the_post();
                            the_content();
                        endwhile;

                    endif;

                ?>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
