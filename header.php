<?php get_template_part('template-parts/head'); ?>


<!-- <header class="site-header">
  <div class="container">
    <div class="flex justify-content-end">
      <nav class="nav-header"><?php //pandago_nav( 'header' );
                              ?></nav>
    </div>
  </div>
</header>
<div class="site-content"> -->


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

    <?php wp_nav_menu(); ?>

    <!-- <ul class="inner-nav">
      <li class="nav-item underline-animation">
        <a href="ideja.html">Ideja</a>
      </li>
      <li class="nav-item underline-animation">
        <a href="piesaki_sapni.html">Piesaki Sapni</a>
      </li>
      <li class="nav-item underline-animation">
        <a href="uznemejiem.html">Uzņēmējiem</a>
      </li>
      <li class="nav-item underline-animation">
        <a href="sapnu_banka.html">Sapņu banka</a>
      </li>
      <li class="nav-item underline-animation">
        <a href="sapnus_atbalsta.html">Sapņus atbalsta</a>
      </li>
      <li class="nav-item underline-animation">
        <a href="iedvesmas_stasti.html">99 Iedvesmas stāsti</a>
      </li>
      <li class="nav-item nav-lang-item underline-animation">LV</li>
    </ul> -->
  </nav>
</div>