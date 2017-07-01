<nav class="navbar navbar-toggleable-md navbar-light bg-faded main-navbar fixed-top" id="main-navbar">
  <div class="container nav-container">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon ml-auto"></span>
    </button>
    <a class="navbar-brand" href="<?php echo home_url(); ?>">
        legion dèl <span class="primary">diablo</span>
    </a>
    <?php wp_nav_menu( array(
        'theme_location'  => 'primary',
        'container'       => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id'    => 'main-nav',
        'menu_class'      => 'navbar-nav ml-auto',
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker()
    ) ); ?>
  </div>
</nav>
