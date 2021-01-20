<?php get_template_part('template-parts/head'); ?>
<header class="header">
  <div class="ripped_header"></div>

  <div class="inner-header" id="js-pageTop">
    <a href="http://wordpress-exercise.dev.cc/">
      <img class="black-logo" src="http://wordpress-exercise.dev.cc/wp-content/uploads/2021/01/BlackLogo.jpg" alt="Melnbalts kompānijas logo.">
    </a>

    <span class="menu-icon" id="js-menu-icon" onclick="toggleMenu(); transformIcon(this)">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
    </span>

    <nav class="nav" id="js-nav">
      <div class="overlay-menu-top-block"></div>
      <?php
      $header_menu_array = array(
        'menu'        => 'Header menu',
        'container'   => '',
        'menu_class'  => 'inner-nav',
        'fallback_cb' => false,
      );
      wp_nav_menu($header_menu_array);
      ?>
    </nav>

  </div>
</header>