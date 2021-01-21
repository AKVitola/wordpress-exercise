<body>
  <!-- <div class="container submit-dream"> -->

  <?php get_header(); ?>

  <main>
    <section class="about-submit">
      <h1 class="page-heading">Piesaki sapni</h1>
      <p class="page-text large">Tev ir iespēja pieteikt personīgo vai profesionālo sapni.</p>
    </section>

    <section class="flex-container-dreams">
      <div class="dream-column dog-column">
        <div class="dream-row">
          <img class="dog-img" src="../../wp-content/uploads/2021/01/dogIcon.png" alt="Ikona ar suni.">
        </div>
        <div class="dream-row">
          <h3 class="page-undertitle dog">Personīgais sapnis</h3>
        </div>
        <div class="dream-row">
          <p class="page-text personal-dream">Bērnības nepiepildītie sapņi... No sev piederoša svaigi spiestas sulas bāra uz Tērbatas ielas līdz iespējai satikties ar
            Džekiju Čanu.</p>
        </div>
        <div class="dream-row">
          <button class="btn user-btn btn-text personal">Piesaki sapni</button>
        </div>
      </div>

      <div class="dream-column">
        <div class="dream-row">
          <img class="balloon-img" src="../../wp-content/uploads/2021/01/balloonIcon.png" alt="Ikona ar gaisa balonu.">
        </div>
        <div class="dream-row">
          <h3 class="page-undertitle balloon">Profesionālais sapnis</h3>
        </div>
        <div class="dream-row">
          <p class="page-text professional-dream">Sapnis vai ideja, kura ir balstīta uz reģiona, pasaules vai cilvēku attīstību 4 virzienos - kultūra, izglītība, zinātne,
            ģimene jeb sociālā vide. Tā ir iespēja attīstīt ideju, kas uzlabotu ikdienas dzīves kvalitāti vai atrisinātu vietēja vai
            starptautiska līmeņa problēmu. Pastāsti, kāpēc Tev tas ir tik nozīmīgi?</p>
        </div>
        <div class="dream-row">
          <button class="btn user-btn btn-text professional">Piesaki sapni</button>
        </div>
      </div>
    </section>

    <section>
      <div class="dream-gallery-row">
        <div class="dream-column first">
          <img src="../../wp-content/uploads/2021/01/Lauma.jpg" alt="Sieviete ar vijoli.">
        </div>
        <div class="dream-column second">
          <div class="row-inner-small">
            <img src="../../wp-content/uploads/2021/01/Brinuma_meita-3.jpg" alt="Trīs cilvēku kopbilde.">
          </div>
          <div class="row-inner-small bottom">
            <img src="../../wp-content/uploads/2021/01/Arta.jpg" alt="Sieviete pastaigā mežā.">
          </div>
        </div>
        <div class="dream-column middle">
          <img src="../../wp-content/uploads/2021/01/Lauma2.jpg" alt="Sieviete ar kroni.">
        </div>
        <div class="dream-column last">
          <img src="../../wp-content/uploads/2021/01/Brinuma_meita-2.jpg" alt="Trīs jauniešu kopbilde.">
        </div>
      </div>
    </section>

    <!-- <section class="dream-form">
      <form class="contact-form" action="/"></form>
    </section> -->

    <?php get_template_part('template-parts/toTopBtn'); ?>
  </main>

  <?php get_template_part('template-parts/cookies'); ?>

  <!-- <section class="dream-footer">
    <footer class="footer"></footer>
  </section> -->

  <!-- </div> -->
  <?php get_footer(); ?>