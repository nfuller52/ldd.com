<?php get_header(); ?>
    <?php include( LDD_DIR_PATH . '/partials/navigation.php' ); ?>
    <section class="jumbotron-fluid hero" id="main-hero">
      <div id="particles"></div>
      <div class="container" id="hero-items">
        <h1>legion dèl <span class="highlight">diablo</span></h1>
        <h4>lightbringer-us</h4><a class="cta" href="#">Apply now</a>
      </div>
    </section>
    <section class="page-module" id="news">
      <div class="container">
        <h2 class="title">news</h2>
        <?php

            if ( have_posts() ) {
                $count_posts     = wp_count_posts();
                $published_posts = $count_posts->publish;
                $posts_per_row   = 4;
                $runner          = ceil( $published_posts / $posts_per_row );

                for ( $i = 0; $i < (int)$runner; $i++ ) {
                    $posts = get_posts( array( 'offset' => $i * $posts_per_row ) );

                    ?>

                    <div class="row">

                    <?php
                        foreach( $posts as $iteration => $post ) {
                            if ( $iteration >= $posts_per_row ) { break; }
                            ?>

                            <div class="card col-sm-6 col-md-4 col-lg-3 col-xl-3">
                                <?php echo the_post_thumbnail( 'medium', array( 'class' => 'card-img-top img-fluid') ); ?>
                                <div class="card-block">
                                    <h4 class="card-title"><?php echo apply_filters( 'the_title', $post->post_title ); ?></h4>
                                    <time class="pub-date" datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'F j, Y' ); ?></time>
                                    <p class="card-text"><?php echo apply_filters( 'the_content', $post->post_content ); ?></p>
                                </div>
                            </div>

                            <?php

                        }
                    ?>

                    </div>

                <?php }
            } else {
                echo "<h4>No news yet...</h4>";
            }

        ?>
      </div>
    </section>
    <section class="page-module" id="progress">
      <div class="banner">
        <h2 class="title">progress</h2>
      </div>
      <div class="container">
        <div class="row">
          <h3 class="hidden-lg-up">Normal Tomb of Sargeras</h3>
          <div class="col-md-2 hidden-md-down progress-title tos">
            <h3>Tomb of Sargeras</h3>
            <h4>Normal</h4>
          </div>
          <div class="col-md-12 col-lg-9 progress-bar-container">
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              <div class="hidden-md-down progress-marker" style="left: 3%;"></div>
              <div class="hidden-md-down progress-marker" style="left: 12.125%;"></div>
              <div class="hidden-md-down progress-marker" style="left: 24.25%;"></div>
              <div class="hidden-md-down progress-marker" style="left: 36.375%;"></div>
              <div class="hidden-md-down progress-marker" style="left: 48.5%;"></div>
              <div class="hidden-md-down progress-marker" style="left: 60.625%;"></div>
              <div class="hidden-md-down progress-marker" style="left: 72.75%;"></div>
              <div class="hidden-md-down progress-marker" style="left: 84.875%;"></div>
              <div class="hidden-md-down progress-marker" style="left: 97%;"></div>
            </div>
          </div>
          <div class="col-lg-1 hidden-md-down progress-counter">
            <div class="progress-count">
              <p><span class="count">9 </span> <span class="total">/ 9</span></p>
            </div>
          </div>
        </div>
        <div class="row">
          <h3 class="hidden-lg-up">Mythic Nighthold</h3>
          <div class="col-md-2 hidden-md-down progress-title nh">
            <h3>Nighthold</h3>
            <h4>Mythic</h4>
          </div>
          <div class="col-md-12 col-lg-9 progress-bar-container">
            <div class="progress">
              <div class="progress-bar mythic" role="progressbar" style="width: 3%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              <div class="hidden-md-down progress-marker" style="left: 3%;"></div>
              <div class="hidden-md-down progress-marker" style="left: 12.125%;"></div>
              <div class="hidden-md-down progress-marker" style="left: 24.25%;"></div>
              <div class="hidden-md-down progress-marker" style="left: 36.375%;"></div>
              <div class="hidden-md-down progress-marker" style="left: 48.5%;"></div>
              <div class="hidden-md-down progress-marker" style="left: 60.625%;"></div>
              <div class="hidden-md-down progress-marker" style="left: 72.75%;"></div>
              <div class="hidden-md-down progress-marker" style="left: 84.875%;"></div>
              <div class="hidden-md-down progress-marker" style="left: 97%;"></div>
            </div>
          </div>
          <div class="col-lg-1 hidden-md-down progress-counter">
            <div class="progress-count">
              <p><span class="count">1 </span> <span class="total">/ 9</span></p>
            </div>
          </div>
        </div>
        <div class="row">
          <h3 class="hidden-lg-up">Heroic Trial of Valor</h3>
          <div class="col-md-2 hidden-md-down progress-title tov">
            <h3>Trial of Valor</h3>
            <h4>Heroic</h4>
          </div>
          <div class="col-md-12 col-lg-9 progress-bar-container">
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              <div class="hidden-md-down progress-marker" style="left: 3%;"></div>
              <div class="hidden-md-down progress-marker" style="left: 47%;"></div>
              <div class="hidden-md-down progress-marker" style="left: 97%;"></div>
            </div>
          </div>
          <div class="col-lg-1 hidden-md-down progress-counter">
            <div class="progress-count">
              <p><span class="count">3 </span> <span class="total">/ 3</span></p>
            </div>
          </div>
        </div>
        <div class="row">
          <h3 class="hidden-lg-up">Mythic Emerald Nightmare</h3>
          <div class="col-md-2 hidden-md-down progress-title en">
            <h3>Emerald Nightmare</h3>
            <h4>Mythic</h4>
          </div>
          <div class="col-md-12 col-lg-9 progress-bar-container">
            <div class="progress">
              <div class="progress-bar mythic" role="progressbar" style="width: 31.3333333334%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              <div class="hidden-md-down progress-marker" style="left: 3%;"></div>
              <div class="hidden-md-down progress-marker" style="left: 15.6666666667%;"></div>
              <div class="hidden-md-down progress-marker" style="left: 31.3333333334%;"></div>
              <div class="hidden-md-down progress-marker" style="left: 47.0000000001%;"></div>
              <div class="hidden-md-down progress-marker" style="left: 62.6666666668%;"></div>
              <div class="hidden-md-down progress-marker" style="left: 78.3333333335%;"></div>
              <div class="hidden-md-down progress-marker" style="left: 97%;"></div>
            </div>
          </div>
          <div class="col-lg-1 hidden-md-down progress-counter">
            <div class="progress-count">
              <p><span class="count">3 </span> <span class="total">/ 8</span></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="page-module" id="recruitment">
      <div class="container">
        <h2 class="title">recruitment</h2>
        <div class="row">
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-2 recruitment-card recruitment-death-knight">
            <div class="recruitment-specs">
                <img class="recruitment-card-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-dk-blood.png"; ?>">
                <img class="recruitment-card-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-dk-frost.png"; ?>">
                <img class="recruitment-card-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-dk-unholy.png"; ?>">
            </div>
            <a href="#death-knight"></a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-2 recruitment-card recruitment-demon-hunter">
            <div class="recruitment-specs">
                <img class="recruitment-card-spec lone-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-dh-havok.png"; ?>">
            </div>
            <a href="#demon-hunter"></a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-2 recruitment-card recruitment-druid">
            <div class="recruitment-specs">
                <img class="recruitment-card-spec lone-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-dr-balance.png"; ?>">
                <img class="recruitment-card-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-dr-feral.png"; ?>">
                <img class="recruitment-card-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-dr-guardian.png"; ?>">
                <img class="recruitment-card-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-dr-restoration.png"; ?>">
            </div>
            <a href="#druid"></a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-2 recruitment-card recruitment-hunter">
            <div class="recruitment-specs">
                <img class="recruitment-card-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-hn-beast-mastery.png"; ?>">
                <img class="recruitment-card-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-hn-marksman.png"; ?>">
                <img class="recruitment-card-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-hn-survival.png"; ?>">
            </div>
            <a href="#hunter"></a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-2 recruitment-card recruitment-mage">
            <div class="recruitment-specs">
                <img class="recruitment-card-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-mg-arcane.png"; ?>">
                <img class="recruitment-card-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-mg-fire.png"; ?>">
                <img class="recruitment-card-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-mg-frost.png"; ?>">
            </div>
            <a href="#mage"></a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-2 recruitment-card recruitment-monk">
            <div class="recruitment-specs">
                <img class="recruitment-card-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-mk-brewmaster.png"; ?>">
                <img class="recruitment-card-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-mk-mistweaver.png"; ?>">
                <img class="recruitment-card-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-mk-windwalker.png"; ?>">
            </div>
            <a href="#monk"></a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-2 recruitment-card recruitment-paladin">
            <div class="recruitment-specs">
                <img class="recruitment-card-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-pd-holy.png"; ?>">
                <img class="recruitment-card-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-pd-protection.png"; ?>">
                <img class="recruitment-card-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-pd-retribution.png"; ?>">
            </div>
            <a href="#paladin"></a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-2 recruitment-card recruitment-priest">
            <div class="recruitment-specs">
                <img class="recruitment-card-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-pr-disc.png"; ?>">
                <img class="recruitment-card-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-pr-holy.png"; ?>">
                <img class="recruitment-card-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-pr-shadow.png"; ?>">
            </div>
            <a href="#priest"></a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-2 recruitment-card recruitment-rogue">
            <div class="recruitment-specs">
                <img class="recruitment-card-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-rg-assassination.png"; ?>">
                <img class="recruitment-card-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-rg-outlaw.png"; ?>">
                <img class="recruitment-card-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-rg-sub.png"; ?>">
            </div>
            <a href="#rogue"></a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-2 recruitment-card recruitment-shaman">
            <div class="recruitment-specs">
                <img class="recruitment-card-spec recruitment-card-spec-disabled" src="<?php echo get_template_directory_uri() . "/public/images/spec-sh-elemental.png"; ?>">
                <img class="recruitment-card-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-sh-enhancement.png"; ?>">
                <img class="recruitment-card-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-sh-restoration.png"; ?>">
            </div>
            <a href="#shaman"></a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-2 recruitment-card recruitment-warlock">
            <div class="recruitment-specs">
                <img class="recruitment-card-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-wk-affliction.png"; ?>">
                <img class="recruitment-card-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-wk-demonology.png"; ?>">
                <img class="recruitment-card-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-wk-destruction.png"; ?>">
            </div>
            <a href="#warlock"></a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-2 recruitment-card recruitment-warrior">
            <div class="recruitment-specs">
                <img class="recruitment-card-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-wr-arms.png"; ?>">
                <img class="recruitment-card-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-wr-fury.png"; ?>">
                <img class="recruitment-card-spec" src="<?php echo get_template_directory_uri() . "/public/images/spec-wr-protection.png"; ?>">
            </div>
            <a href="#warrior"></a>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>
