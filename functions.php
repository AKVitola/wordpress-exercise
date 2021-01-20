<?php

function sparkleHeart_project_scripts()
{
  wp_enqueue_style("font_Montserrat", "http://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap", array(), 1, "all");
  wp_enqueue_style("font_Oswald", "http://fonts.googleapis.com/css2?family=Oswald:wght@400;500&display=swap", array(), 1, "all");

  wp_enqueue_style("parent-style", get_template_directory_uri() . "/style.css", array());
  wp_enqueue_style("child-style", get_stylesheet_directory_uri() . "/style.css", array("parent-style"));

  wp_enqueue_script("script", get_stylesheet_directory_uri() . "/resources/theme.js", array(), 1, 1, 1);
}

add_action("wp_enqueue_scripts", "sparkleHeart_project_scripts");
