<body>
  <?php get_header(); ?>

  <main>
    <section class="idea">
      <h1 class="page-heading"><?php the_title(); ?></h1>
      <p class="page-text"> <?php the_field('page_text'); ?> </p>
    </section>

    <section class="founder">
      <div class="founder-overlay"></div>
      <img class="responsive-img founder-img" src="<?php the_field('founder_image'); ?>" alt="Kompānijas dibinātāja attēls.">
      <img class="responsive-img founder-img-tablet" src="<?php the_field('founder_image_tablet'); ?>" alt="Kompānijas dibinātāja attēls.">
      <img class="responsive-img founder-img-mobile" src="<?php the_field('founder_image_mobile'); ?>" alt="Kompānijas dibinātāja attēls.">
      <div class="founder-text-wrap">
        <p class="founder-text"> <?php the_field('founder-text'); ?> </p>
      </div>
    </section>

    <section class="reference">
      <div class="quote-slide js-quote-slide">
        <h6 class="referent-name"> <?php the_field('referent_name_1'); ?> </h6>
        <p class="referent-position"> <?php the_field('referent_position_1'); ?> </p>
        <p class="referent-quote"> <?php the_field('referent_quote_1'); ?> </p>
      </div>

      <div class="js-quote-slide">
        <h6 class="referent-name"> <?php the_field('referent_name_2'); ?> </h6>
        <p class="referent-position"> <?php the_field('referent_position_2'); ?> </p>
        <p class="referent-quote"> <?php the_field('referent_quote_2'); ?> </p>
      </div>

      <div class="js-quote-slide">
        <h6 class="referent-name"> <?php the_field('referent_name_3'); ?> </h6>
        <p class="referent-position"> <?php the_field('referent_position_3'); ?> </p>
        <p class="referent-quote"> <?php the_field('referent_quote_3'); ?> </p>
      </div>

      <div class="arrow-btn">
        <a class="prev-quote-btn" onclick="previousSlide()">
          <img class="arrow1" src="<?php the_field('arrow_left'); ?>" alt="Bulta pa kreisi.">
        </a>

        <a class="next-quote-btn" onclick="nextSlide()">
          <img src="<?php the_field('arrow_right'); ?>" alt="Bulta pa labi.">
        </a>
      </div>
    </section>

    <?php get_template_part('template-parts/toTopBtn'); ?>
  </main>

  <?php get_template_part('template-parts/cookies'); ?>
  <?php get_footer(); ?>