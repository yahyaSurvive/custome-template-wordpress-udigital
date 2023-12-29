<?php 

  // adds dynamic title tag
  function uthem_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
  }

  add_action('after_setup_theme', 'uthem_theme_support');

  // menu
  add_theme_support('menus');

  register_nav_menus(
    array(
      'top-menu' => "Top menu Location"
    )
  );
  
  function load_css(){
    wp_register_style('bootstrap', get_template_directory_uri()."/css/main.css", array(), false, 'all');
    
    wp_enqueue_style('bootstrap');
  }

  add_action('wp_enqueue_scripts', 'load_css');

  function load_js(){
    wp_register_script('bootstrap-js', get_template_directory_uri()."/assets/js/bootstrap.bundle.min.js", array(), false, "js-bootstrap", false, true);
    wp_register_script('validate-js', get_template_directory_uri()."/assets/js/form-validated.js", array(), false, "js-validated", false, true);
    wp_register_script('route-js', get_template_directory_uri()."/assets/js/route.js", array(), false, "js-route", false, true);
    wp_register_script('style-js', get_template_directory_uri()."/assets/js/style.js", array(), false, "js-route", false, true);

    wp_enqueue_script("bootstrap-js");
    wp_enqueue_script("validate-js");
    wp_enqueue_script("route-js");
    wp_enqueue_script("style-js");
  }

  add_action('wp_enqueue_scripts', 'load_js');



  /**
 * Register Custom Navigation Walker
 */
  function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
  }
  add_action( 'after_setup_theme', 'register_navwalker' );
  

?>