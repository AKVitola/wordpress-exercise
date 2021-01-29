<body>
  <?php get_header(); ?>

  <main>
    <section class="introduction">
      <div class="video-container" id="js-video-container">
        <div class="custom-play-icon" id="js-custom-play-icon"></div>
        <div id="player"></div>
      </div>
      <p class="page-text"> <?php the_field('page_text'); ?> </p>
    </section>

    <section>
      <div class="gallery-row">
        <div class="gallery-column first">
          <img src="<?php the_field('first_image'); ?>" alt="Sieviete pārgājienā.">
        </div>
        <div class="gallery-column second">
          <img src="<?php the_field('second_image'); ?>" alt="Sieviete ar suni.">
        </div>
        <div class="gallery-column middle">
          <div class="row-inner upper">
            <img src="<?php the_field('middle_upper_image'); ?>" alt="Trīs cilvēku kopbilde.">
          </div>
          <div class="row-inner">
            <img src="<?php the_field('middle_bottom_image'); ?>" alt="Sieviete Vecrīgā.">
          </div>
        </div>
        <div class="gallery-column last">
          <img src="<?php the_field('last_image'); ?>" alt="Pāra kopbilde.">
        </div>
      </div>
    </section>

    <?php get_template_part('template-parts/contacts'); ?>
    <?php get_template_part('template-parts/contact'); ?>

    <form class="contact-form" action="/">
      <?php echo apply_shortcodes('[contact-form-7 id="5" title="Dream form"]'); ?>
    </form>

    <?php get_template_part('template-parts/benefactors'); ?>
    <?php get_template_part('template-parts/toTopBtn'); ?>

  </main>

  <?php get_template_part('template-parts/cookies'); ?>
  <?php get_footer(); ?>