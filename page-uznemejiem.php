<body>
  <?php get_header(); ?>

  <main>
    <section class="businessman">
      <h1 class="page-heading">Uzņēmējiem</h1>
      <p class="page-text">
        Ja ticat labākas pasaules attīstībai un vēlaties piedalīties starptautisku ideju realizēšanā, tad priecāsimies ar Jums
        iepazīties.
      </p>
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