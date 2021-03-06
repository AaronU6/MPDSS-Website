<?php
//To add the register_theme_menus() function to the init() function
add_action('init','register_theme_menus');
add_theme_support( 'post-thumbnails' ); 
function wp_theme_styles() {
  wp_enqueue_style('foundation_css', get_template_directory_uri() . '/css/foundation.css');
  wp_enqueue_style('fonts_css', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,600italic,700italic,800,800italic,400italic,300,300italic');
  wp_enqueue_style('typography_css', get_template_directory_uri() . '/css/typography.css');
  wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
}
//To add the wp_theme_styles() function to the wp_enqueue_scripts() function
add_action('wp_enqueue_scripts', 'wp_theme_styles');

function wp_theme_js(){
  wp_enqueue_script('modernizr_js', get_template_directory_uri().'/js/vendor/modernizr.js','','',true);
  wp_enqueue_script('jquery_js', get_template_directory_uri().'/js/vendor/jquery.js','','',true);
  wp_enqueue_script('foundation_js', get_template_directory_uri().'/js/foundation/foundation.js',array('jquery_js'),'',true);
  wp_enqueue_script('topbar_js', get_template_directory_uri().'/js/foundation/foundation.topbar.js','','',true);
  wp_enqueue_script('reveal_js', get_template_directory_uri().'/js/foundation/foundation.reveal.js','','',true);
  wp_enqueue_script('equalizer_js', get_template_directory_uri().'/js/foundation/foundation.equalizer.js','','',true);
  wp_enqueue_script('fastclick_js', get_template_directory_uri().'/js/vendor/fastclick.js','','',true);
  wp_enqueue_script('myapp_js', get_template_directory_uri().'/js/app.js','','',true);
}

//Allowing the Theme to support menus
add_theme_support('menus');
//Registering the Menus
function register_theme_menus(){
  register_nav_menus(
    array(
      'primary-menu' => __('Primary Menu')
    )
  );
}
add_action("init", "create_post_type");
//To add the wp_theme_js() function to the wp_enqueue_scripts() function
add_action('wp_enqueue_scripts','wp_theme_js');
//To add the create_post_type() function to the init() function
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'event',
    array(
      'labels' => array('name' => __( 'Events' ), 'singular_name' => __( 'Event' )),
      'public' => true,
      'has_archive' => false,
      'supports' => array( 'title', 'editor', 'thumbnail'),
     )
  );
  register_post_type( 'people',
    array(
      'labels' => array('name' => __( 'People' ), 'singular_name' => __( 'Person' )),
      'public' => true,
      'has_archive' => false,
      'supports' => array('title', 'editor', 'thumbnail'),
     )
  );
}


?>
