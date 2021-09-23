<?php 

define('THE_ROOT', get_template_directory_uri());
define('CSS_DIR', get_template_directory_uri() . '/assets/css');
define('JS_DIR', get_template_directory_uri() . '/assets/js');
define('LIBS_DIR', get_template_directory_uri() . '/assets/libs');
define('IMG_DIR', get_template_directory_uri() . '/assets/images');


add_action( 'wp_enqueue_scripts', 'arch_styles' );
add_action( 'wp_enqueue_scripts', 'arch_scripts' );
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
add_action( 'init', 'register_post_types' );



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

function register_post_types(){
    add_theme_support( 'post-thumbnails' );
	register_post_type( 'features', [
		'labels' => [
			'name'               => 'Features', // основное название для типа записи
			'singular_name'      => 'Feature', // название для одной записи этого типа
			'add_new'            => 'Добавить Feature', // для добавления новой записи
			'add_new_item'       => 'Добавление Feature', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Feature', // для редактирования типа записи
			'new_item'           => 'Новый Feature', // текст новой записи
			'view_item'          => 'Смотреть Feature', // для просмотра записи этого типа.
			'search_items'       => 'Искать Feature', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'menu_name'          => 'Features', // название меню
		],
		'public'              => false,
		'show_ui'             => true, // зависит от public
		'menu_icon'           => 'dashicons-plus',
		'supports'            => [ 'title', 'editor', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
	] );
}

function getFeatures() {
    $args = array (
        'orderby'     => 'date',
        'order'       => 'ASC',
        'post_type'   => 'features'
    );

    $features = [];

    foreach (get_posts($args) as $post) {
        $feature = get_fields($post->ID);
        $feature['img'] = get_the_post_thumbnail_url( $post->ID, 'thumbnail' );
        $feature['title'] = $post->post_title;
        $feature['text'] = $post->post_content;

        $features[] = $feature;
    }

    return $features;
}
