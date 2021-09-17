<?php 

define('THE_ROOT', get_template_directory_uri());
define('CSS_DIR', get_template_directory_uri() . '/assets/css');
define('JS_DIR', get_template_directory_uri() . '/assets/js');
define('LIBS_DIR', get_template_directory_uri() . '/assets/libs');
define('IMG_DIR', get_template_directory_uri() . '/assets/images');


add_action( 'wp_enqueue_scripts', 'arch_styles' );
add_action( 'wp_enqueue_scripts', 'arch_scripts' );
add_action( 'after_setup_theme', 'theme_register_nav_menu' );


function arch_styles() {
    wp_enqueue_style( 'normalize-style', CSS_DIR . '/normalize.css' );
    wp_enqueue_style( 'magnific-style', get_template_directory_uri() . '/assets/css/magnific-popup.css' );
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}

function arch_scripts() {

    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'magnific-script', LIBS_DIR .'/jquery.magnific-popup.min.js', array(jquery), 'null', true );
    wp_enqueue_script( 'main-script', JS_DIR .'/main.js', array(jquery), 'null', true );
}

function theme_register_nav_menu() {
	register_nav_menu( 'top_menu', 'Меню в шапке' );
    register_nav_menu( 'botoom_menu', 'Меню в подвале' );
}