<body>
  <?php get_header(); ?>

  <main>
    <section class="error-wrap">
      <div class="benefactors">
        <div class="inner-error">
          <p class="error-number page-undertitle">404</p>
          <p class="error-message page-undertitle">Lapa netika atrasta!</p>
          <p class="page-text">Radusies kāda tehniska kļūda, vai šī lapa vairs nav pieejama.</p>

          <div class="error-btn">
            <a href="/">
              <button class="btn user-btn">Uz sākumlapu</button>
            </a>
          </div>

        </div>
      </div>
    </section>

    <?php get_template_part('template-parts/toTopBtn'); ?>

  </main>

  <?php get_template_part('template-parts/cookies'); ?>

  <?php get_footer(); ?>