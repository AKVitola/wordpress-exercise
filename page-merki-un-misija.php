<body>
  <?php get_header(); ?>

  <main>

    <section class="bank-video-container">
      <h1 class="page-heading"><?php the_title(); ?> </h1>

      <div class="video-placeholder" id="js-video-img">
      </div>
      <div class="bank-video-Play-img"></div>
      <div class="video-overlay" id="js-ovelay">
        <div class="closeIcon-bankPage">
          <div class="closeIcon" id="js-closeIcon"></div>
        </div>
        <div class="video-bcground" id="js-video-bcground"></div>
        <video class="video" id="js-video" type="video/mp4" controls controlsList="nodownload">
          Jūsu interneta pārlūks neļauj atskaņot video.
          <source src="https://sparkleheart.org/wp-content/uploads/2020/09/SparkleHeart_animacija_V4.mp4">
        </video>
    </section>

    <section class="aim-wrap">
      <h3 class="page-undertitle"><?php the_field('undertitle'); ?> </h3>

      <div class="aim-flex-container">
        <div class="bank-flex-row first">
          <div class="bank-image-col">
            <img class="sun-img" src="<?php the_field('icon_1'); ?> " alt="Ikona ar sauli">
          </div>
          <div class="bank-text-col">
            <p class="page-text"><?php the_field('first_text'); ?> </p>
          </div>
        </div>

        <div class="bank-flex-row second">
          <div class="bank-text-col middle">
            <p class="page-text"> <?php the_field('middle_text'); ?> </p>
          </div>
          <div class="bank-image-col">
            <img class="mountain-img" src="<?php the_field('icon_2'); ?> " alt="Ikona ar kalnu.">
          </div>
        </div>

        <div class="bank-flex-row third">
          <div class="bank-image-col">
            <img class="glasses-img" src="<?php the_field('icon_3'); ?> " alt="Ikona ar brillēm.">
          </div>
          <div class="bank-text-col">
            <p class="page-text"> <?php the_field('third_text'); ?> </p>
          </div>
        </div>
      </div>

      <div class="mission">
        <h3 class="page-undertitle"><?php the_field('undertitle_2'); ?> </h3>
        <p class="page-text large"> <?php the_field('page_text'); ?> </p>
      </div>
    </section>

    <section class="yellow-dream-container">
      <div class="benefactors">
        <div class="earth-wrap">
          <img class="earth-img" src="<?php the_field('icon_4'); ?> " alt="Ikona ar Zemi.">
          <p class="page-text large"> <?php the_field('page_text_2'); ?> </p>
        </div>
      </div>
    </section>

    <section class="dream-support-wrap">
      <h3 class="page-undertitle"> <?php the_field('undertitle_3'); ?> </h3>
      <div class="dream-select-flex-container">
        <div class="dream-select-column">
          <img class="megaphone-img" src="<?php the_field('icon_5'); ?> " alt="Ikona ar megafonu.">
          <p class="page-text large"> <?php the_field('page_text_3'); ?> </p>
        </div>
        <div class="dream-select-column people">
          <img class="people-img" src="<?php the_field('icon_6'); ?> " alt="Ikona ar cilvēkiem.">
          <p class="page-text large"> <?php the_field('page_text_4'); ?> </p>
        </div>
      </div>
    </section>

    <section class="yellow-dream-container">
      <div class="benefactors">
        <div class="rainbow-wrap">
          <img class="rainbow-img" src="<?php the_field('icon_7'); ?> " alt="Ikona ar varavīksni.">
          <p class="page-text large"> <?php the_field('page_text_5'); ?> </p>
        </div>
      </div>
    </section>

    <section class="bank-page-wrap">
      <?php get_template_part('template-parts/contact'); ?>
    </section>

    <?php get_template_part('template-parts/toTopBtn'); ?>

  </main>

  <?php get_template_part('template-parts/cookies'); ?>
  <?php get_footer(); ?>