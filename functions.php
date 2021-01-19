<?php

// define( 'TD', 'pandago-child' );

// function my_styles() {
//   wp_enqueue_style( 'child-style', URL_THEME . '/assets/css/style.css', array(), wp_get_theme()->get( 'Version' ) );
// }
// add_action( 'wp_enqueue_scripts', 'my_styles' );

// function register_theme_nav() {
//   register_nav_menus(
//     array(
//       'header-nav'  => __( 'Header Navigation', TD ),
//       'sidebar-nav' => __( 'Sidebar Navigation', TD )
//     )
//   );
// }

function load_stylesheets()
{
  wp_register_style("font_Montserrat", get_template_directory_uri() . "//fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap", array(), 1, "all");
  wp_enqueue_style("font_Montserrat");

  wp_register_style("font_Oswald", get_template_directory_uri() . "//fonts.googleapis.com/css2?family=Oswald:wght@400;500&display=swap", array(), 1, "all");
  wp_enqueue_style("font_Oswald");

  wp_register_style("style", get_template_directory_uri() . "/style.css", array(), 1, "all");
  wp_enqueue_style("style");
}

add_action("wp_enqueue_scripts", "load_stylesheets");



function addjs()
{

  wp_register_script("jquery", get_template_directory_uri() . '//code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"', array(), 1, 1, 1);
  wp_enqueue_script("jquery");

  wp_register_script("script", get_template_directory_uri() . "/assets/theme.js", array(), 1, 1, 1);
  wp_enqueue_script("script");
}

add_action("wp_enqueue_scripts", "addjs");
