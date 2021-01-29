<body>
  <?php get_header(); ?>

  <main>
    <section class="about-submit">
      <h1 class="page-heading"><?php the_title(); ?> </h1>
      <p class="page-text large"> <?php the_field('page_text'); ?> </p>
    </section>

    <section class="flex-container-dreams">
      <div class="dream-column dog-column">
        <div class="dream-row">
          <img class="dog-img" src="<?php the_field('icon_1'); ?>" alt="Ikona ar suni.">
        </div>
        <div class="dream-row">
          <h3 class="page-undertitle dog"><?php the_field('undertitle_1'); ?></h3>
        </div>
        <div class="dream-row">
          <p class="page-text personal-dream"><?php the_field('personal_dream'); ?></p>
        </div>
        <div class="dream-row">
          <button class="btn user-btn btn-text personal"><?php the_field('button_text'); ?></button>
        </div>
      </div>

      <div class="dream-column">
        <div class="dream-row">
          <img class="balloon-img" src="<?php the_field('icon_2'); ?>" alt="Ikona ar gaisa balonu.">
        </div>
        <div class="dream-row">
          <h3 class="page-undertitle balloon"><?php the_field('undertitle_2'); ?></h3>
        </div>
        <div class="dream-row">
          <p class="page-text professional-dream"><?php the_field('professional_dream'); ?></p>
        </div>
        <div class="dream-row">
          <button class="btn user-btn btn-text professional"><?php the_field('button_text'); ?></button>
        </div>
      </div>
    </section>

    <section>
      <div class="dream-gallery-row">
        <div class="dream-column first">
          <img src="<?php the_field('first_image'); ?>" alt="Sieviete ar vijoli.">
        </div>
        <div class="dream-column second">
          <div class="row-inner-small">
            <img src="<?php the_field('second_upper_image'); ?>" alt="Trīs cilvēku kopbilde.">
          </div>
          <div class="row-inner-small bottom">
            <img src="<?php the_field('second_bottom_image'); ?>" alt="Sieviete pastaigā mežā.">
          </div>
        </div>
        <div class="dream-column middle">
          <img src="<?php the_field('middle_image'); ?>" alt="Sieviete ar kroni.">
        </div>
        <div class="dream-column last">
          <img src="<?php the_field('last_image'); ?>" alt="Trīs jauniešu kopbilde.">
        </div>
      </div>
    </section>

    <section class="dream-form">
      <form class="contact-form" action="/">
        <?php echo apply_shortcodes('[contact-form-7 id="5" title="Dream form"]'); ?>
      </form>
    </section>

    <?php get_template_part('template-parts/toTopBtn'); ?>
  </main>

  <?php get_template_part('template-parts/cookies'); ?>
  <?php get_footer(); ?>