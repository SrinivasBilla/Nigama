<?php
/**
 * Theme Functions
 * 
 * @package nigama
 */

 function nigama_enqueue_scripts() {
    wp_register_style( 'style-css' , get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css'), 'all' );
    wp_register_style( 'bootstrap-css' , get_template_directory_uri().'/assets/src/library/css/bootstrap.min.css', [], false, 'all' );
    wp_register_style( 'nigama-css' , get_template_directory_uri().'/assets/src/library/css/style.css', [], false, 'all' );
    wp_register_style( 'icons-css' , get_template_directory_uri().'/assets/src/library/fonts/icomoon/style.css', [], false, 'all' );
    wp_register_script ( 'main-js' , get_template_directory_uri().'/assets/main.js', [], filemtime( get_template_directory().'/assets/main.js'), true);
    wp_register_script ( 'counterup-js' , get_template_directory_uri().'/assets/src/js/counterup.min.js', [], false, true);
    wp_register_script ( 'bootstrap-js' , get_template_directory_uri().'/assets/src/js/bootstrap.min.js', [], false, true);
    wp_register_script ( 'popup-js' , get_template_directory_uri().'/assets/src/library/js/jquery.magnific-popup.min.js', [], false, true);
    
    
    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstrap-css');
    wp_enqueue_style('nigama-css');
    wp_enqueue_style('icons-css');
    
    wp_enqueue_script('main.js');
    wp_enqueue_script('counterup-js');
    wp_enqueue_script('bootstrap-js');
    wp_enqueue_script('popup-js');
 }

 add_action( 'wp_enqueue_scripts' , 'nigama_enqueue_scripts');

 add_theme_support( 'title-tag' );
 add_theme_support( 'custom-logo', array(
   'flex-height'          => true,
   'flex-width'           => true,
   'header-text'          => array( 'site-title', 'site-description' ),
   ) );
 add_theme_support( 'custom-background', [
   'default-color' => '#fff',
   'default-image' => '',
    ]);
    add_theme_support( 'post-thumbnails' );
    function register_my_menus() {
      register_nav_menus(
        array(
          'header-menu' => __( 'Header Menu' ),
          'extra-menu' => __( 'Extra Menu' )
         )
       );
     }
     add_action( 'init', 'register_my_menus' );

     function add_additional_class_on_li($classes, $item, $args) {
      if(isset($args->add_li_class)) {
          $classes[] = $args->add_li_class;
      }
      return $classes;
  }
  add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function nigama_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'nigama' ),
		'id'            => 'sidebar-1',
    'description'   => __( 'main sidebar', 'nigama' ),
		'before_widget' => '<div id="%1$s" class="widget widget-sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
  register_sidebar( array(
		'name'          => __( 'Footer', 'nigama' ),
		'id'            => 'sidebar-2',
    'description'   => __( 'footer sidebar', 'nigama' ),
		'before_widget' => '<div id="%1$s" class="widget widget-footer cell column %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
  
}
add_action('widgets_init', 'nigama_widgets_init');


 ?>