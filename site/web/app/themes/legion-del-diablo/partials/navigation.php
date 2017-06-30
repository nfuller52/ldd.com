<nav class="navbar navbar-toggleable-md navbar-light bg-faded main-navbar fixed-top" id="main-navbar">
  <div class="container nav-container">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon ml-auto"></span>
    </button>
    <a class="navbar-brand" href="<?php echo home_url(); ?>">
        legion dèl <span class="primary">diablo</span>
    </a>
    <!-- <div class="collapse navbar-collapse" id="main-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="#news">News</a></li>
        <li class="nav-item"><a class="nav-link" href="#progress">Progress</a></li>
        <li class="nav-item"><a class="nav-link" href="#recruitment">Recruitment</a></li>
        <li class="nav-item"><a class="nav-link" href="#forum">Forum</a></li>
        <li class="nav-item"><a class="nav-link" href="#roster">Roster</a></li> -->
        <?php wp_nav_menu( array(
            'theme_location'  => 'primary',
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'main-nav',
            'menu_class'      => 'navbar-nav ml-auto',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker()
        ) ); ?>
      <!-- </ul>
    </div> -->
  </div>
</nav>
