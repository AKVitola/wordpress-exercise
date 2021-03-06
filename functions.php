<?php

function sparkleHeart_project_scripts()
{
  wp_enqueue_style("font_Montserrat", "http://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap", array(), 1, "all");
  wp_enqueue_style("font_Oswald", "http://fonts.googleapis.com/css2?family=Oswald:wght@400;500&display=swap", array(), 1, "all");

  wp_enqueue_style("parent-style", get_template_directory_uri() . "/style.css", array());
  wp_enqueue_style("child-style", get_stylesheet_directory_uri() . "/style.css", array("parent-style"));

  wp_enqueue_script("script", get_stylesheet_directory_uri() . "/assets/theme.js", array(), 1, 1, 1);
  wp_enqueue_script("custom_script", get_stylesheet_directory_uri() . "/resources/js/script.js", array(), 1, 1, 1);

  wp_enqueue_script("google_maps", "https://maps.googleapis.com/maps/api/js?key=AIzaSyBGAreWrw02_bh5cUQ2Kgl_k0HRoKnsjPw&callback=initMap&libraries=&v=weekly", array(), 1, 1, 1);
}

add_action("wp_enqueue_scripts", "sparkleHeart_project_scripts");


//Stop W3TC From Printing HTML Comments
add_filter('w3tc_can_print_comment', function ($w3tc_setting) {
  return false;
}, 10, 1);

//To add the async attribute to the footer script produced by Autoptimize
add_filter('autoptimize_filter_js_defer', 'my_ao_override_defer', 10, 1);
function my_ao_override_defer($defer)
{
  return $defer . "async ";
}
