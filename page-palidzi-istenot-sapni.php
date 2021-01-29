<body>
  <?php get_header(); ?>

  <main>
    <section class="businessman">
      <h1 class="page-heading"> <?php the_title(); ?></h1>
      <p class="page-text"> <?php the_field('page_text'); ?> </p>
    </section>

    <section>
      <form class="business-form" action="/">
        <?php echo apply_shortcodes('[contact-form-7 id="157" title="Business-form"]'); ?>
      </form>
    </section>

    <?php get_template_part('template-parts/toTopBtn'); ?>
  </main>

  <?php get_template_part('template-parts/cookies'); ?>
  <?php get_footer(); ?>