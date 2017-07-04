<?php

define( 'LDD_DIR_PATH', get_template_directory() );
define( 'LDD_DIR_URL',  get_template_directory_uri() );

require_once( LDD_DIR_PATH . '/lib/wp_bootstrap_navwalker.php' );

function ldd_styles_enqueue() {

    // Stylesheets
    wp_enqueue_style( 'ldd_theme_css_google_fonts', '//fonts.googleapis.com/css?family=Lato:400,700|Teko:400,500,700', array() );
    wp_enqueue_style( 'ldd_theme_css_bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css', array() );
    wp_enqueue_style( 'ldd_theme_css_style', get_template_directory_uri() . '/public/stylesheets/ldd.css', array() );

    // Javascripts
    wp_enqueue_script( 'ldd_theme_js_tether', '//cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'ldd_theme_js_bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'ldd_theme_js_particles', '//cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'ldd_theme_js_main', get_template_directory_uri() . '/public/javascripts/ldd-min.js', array( 'jquery' ), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'ldd_styles_enqueue' );

function ldd_theme_setup() {

    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'widgets' );
    add_theme_support( 'menus' );
    register_nav_menu( 'primary', __( 'Primary Navigation', 'Legion Dèl Diablo' ) );

}
add_action( 'init', 'ldd_theme_setup' );

function ldd_widget_setup() {

    register_sidebar(
        array(
            'name'          => 'Sidebar',
            'id'            => 'ldd-sidebar-1',
            'class'         => 'ldd-custom',
            'description'   => 'Standard sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h1 class="widget-title">',
            'after_title'   => '</h1>',
        )
    );

}
add_action( 'widgets_init', 'ldd_widget_setup' );
