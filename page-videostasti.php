<body>
  <?php get_header(); ?>

  <main>
    <section class="stories">
      <h1 class="page-heading"><?php the_title(); ?></h1>
      <p class="page-text"> <?php the_field('page_text'); ?> </p>
    </section>

    <section class="grid-wrap">
      <div class="story-grid-container" id="js-grid-container"></div>
      <div class="more-dreams-btn" id="js-more-dreams">
        <button class="btn user-btn btn-text personal"><?php the_field('button_text'); ?></button>
      </div>
    </section>

    <section class="sparkle-team">
      <h1 class="page-undertitle"> <?php the_field('undertitle'); ?> </h1>
      <p class="page-text"><?php the_field('page_text_2'); ?></p>
      <div class="team-gallery-container">

        <div class="team-mate">
          <div class="grey-overlay"></div>
          <img src="<?php the_field('team_mate_1'); ?>" alt="Organizācijas SparkleHeart dibinātājs Juris.">
          <div class="about-founder first">
            <p class="name"> <?php the_field('name_1'); ?> </p>
            <p class="page-text"> <?php the_field('page_text_3'); ?> </p>
          </div>
        </div>

        <div class="team-mate middle">
          <div class="grey-overlay"></div>
          <img src="<?php the_field('team_mate_2'); ?> " alt="Organizācijas SparkleHeart dibinātājs Ģirts.">
          <div class="about-founder second">
            <p class="name"> <?php the_field('name_2'); ?> </p>
            <p class="page-text"> <?php the_field('page_text_4'); ?> </p>
          </div>
        </div>

        <div class="team-mate last">
          <div class="grey-overlay"></div>
          <img src="<?php the_field('team_mate_3'); ?> " alt="Organizācijas SparkleHeart dibinātājs Jānis.">
          <div class="about-founder third">
            <p class="name"> <?php the_field('name_3'); ?> </p>
            <p class="page-text"> <?php the_field('page_text_5'); ?> </p>
          </div>
        </div>
      </div>
    </section>

    <?php get_template_part('template-parts/toTopBtn'); ?>

  </main>

  <?php get_template_part('template-parts/cookies'); ?>
  <?php get_footer(); ?>