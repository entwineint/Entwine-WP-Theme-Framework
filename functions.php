<?php
/**
 * Custom Functions
 *
 * @package entwineint
 * @subpackage entwine-wp-theme-framework
 * @since Entwine WP Theme Framework 0.1
 */


################################################################################
// Loading All CSS Stylesheets
################################################################################
  //comment this function if not using bootstrap
  function bootstrap_css_loader() {
    wp_enqueue_style('bootstrapcss', get_template_directory_uri().'/css/bootstrapwp.css', false ,'0.90', 'all' );
    wp_enqueue_style('prettify', get_template_directory_uri().'/js/google-code-prettify/prettify.css', false ,'1.0', 'all' );
  }
add_action('wp_enqueue_scripts', 'bootstrap_css_loader');

################################################################################
// Loading all JS Script Files.  Remove any files you are not using!
################################################################################
  function bootstrapwp_js_loader() {
       wp_enqueue_script('bootstrapjs', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'),'0.90', true );
       wp_enqueue_script('prettifyjs', get_template_directory_uri().'/js/google-code-prettify/prettify.js', array('jquery'),'1.0', true );
       wp_enqueue_script('demojs', get_template_directory_uri().'/js/bootstrapwp.demo.js', array('jquery'),'0.90', true );
  }
add_action('wp_enqueue_scripts', 'bootstrapwp_js_loader');

/*
| -------------------------------------------------------------------
| Registering Widget Sections
| -------------------------------------------------------------------
| */
function custom_widgets_init() {
  register_sidebar( array(
    'name' => 'Page Sidebar',
    'id' => 'sidebar-page',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>',
  ) );
}
add_action( 'init', 'custom_widgets_init' );

