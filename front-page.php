<body>
  <?php get_header(); ?>

  <main>
    <section class="introduction">
      <div class="video-container" id="js-video-container">
        <div class="custom-play-icon" id="js-custom-play-icon"></div>
        <div id="player"></div>
      </div>
      <p class="page-text">SparkleHeart ir biedrība, kas radīta, lai palīdzētu cilvēkiem piepildīt pat pārdrošākos sapņus. Šeit satiekas sapņotāji
        un viņu atbalstītāji - uzņēmumi, kas sniedz palīdzīgu roku, lai kopā pasauli padarītu par labāku vietu mums visiem.Mēs
        esam gatavi palīdzēt Tev piepildīt sapni. Kā pamats iedvesmai - tiek radīti arī 99 stāsti par Latvijas sievietēm.</p>
    </section>

    <section>
      <div class="gallery-row">
        <div class="gallery-column first">
          <img src="../../wp-content/uploads/2021/01/Zanda.jpg" alt="Sieviete pārgājienā.">
        </div>
        <div class="gallery-column second">
          <img src="../../wp-content/uploads/2021/01/Sibilla.jpg" alt="Sieviete ar suni.">
        </div>
        <div class="gallery-column middle">
          <div class="row-inner upper">
            <img src="../../wp-content/uploads/2021/01/Brinuma_meita.jpg" alt="Trīs cilvēku kopbilde.">
          </div>
          <div class="row-inner">
            <img src="../../wp-content/uploads/2021/01/Alina.jpg" alt="Sieviete Vecrīgā.">
          </div>
        </div>
        <div class="gallery-column last">
          <img src="../../wp-content/uploads/2021/01/Anda.jpg" alt="Pāra kopbilde.">
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