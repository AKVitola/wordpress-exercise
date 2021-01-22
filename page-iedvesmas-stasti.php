<body>
  <?php get_header(); ?>

  <main>
    <section class="stories">
      <h1 class="page-heading">99 iedvesmas stāsti</h1>
      <p class="page-text">
        Atklāj kādu no 99 aizraujošajiem stāstiem
      </p>
    </section>

    <section class="grid-wrap">
      <div class="story-grid-container" id="js-grid-container"></div>
      <div class="more-dreams-btn" id="js-more-dreams">
        <button class="btn user-btn btn-text personal">Skatīt vairāk</button>
      </div>
    </section>

    <section class="sparkle-team">
      <h1 class="page-undertitle">Sparkle heart komanda</h1>
      <p class="page-text">
        Radošā komanda, kura strādā ar projektu 99 un starptautiskām Sparkle Heart īsfilmām.
      </p>
      <div class="team-gallery-container">

        <div class="team-mate">
          <div class="grey-overlay"></div>
          <img src="../../wp-content/uploads/2021/01/juris2.jpg" alt="Organizācijas SparkleHeart dibinātājs Juris.">
          <div class="about-founder first">
            <p class="name">
              Juris Gogulis
            </p>
            <p class="page-text">
              Idejas ģenerators un režisors
            </p>
          </div>
        </div>

        <div class="team-mate middle">
          <div class="grey-overlay"></div>
          <img src="../../wp-content/uploads/2021/01/girts.jpg" alt="Organizācijas SparkleHeart dibinātājs Ģirts.">
          <div class="about-founder second">
            <p class="name">
              Ģirts Ceriņš
            </p>
            <p class="page-text">
              Operators un montāžas speciālists
            </p>
          </div>
        </div>

        <div class="team-mate last">
          <div class="grey-overlay"></div>
          <img src="../../wp-content/uploads/2021/01/janis.jpg" alt="Organizācijas SparkleHeart dibinātājs Jānis.">
          <div class="about-founder third">
            <p class="name">
              Jānis Zurģis
            </p>
            <p class="page-text">
              Animācijas un grafiskā dizaina meistars
            </p>
          </div>
        </div>
      </div>
    </section>

    <?php get_template_part('template-parts/toTopBtn'); ?>

  </main>

  <?php get_template_part('template-parts/cookies'); ?>

  <?php get_footer(); ?>