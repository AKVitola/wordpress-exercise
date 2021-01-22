<body>
  <?php get_header(); ?>

  <main>

    <section class="bank-video-container">
      <h1 class="page-heading">Sapņu banka</h1>

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
      <h3 class="page-undertitle">Mērķis</h3>

      <div class="aim-flex-container">
        <div class="bank-flex-row first">
          <div class="bank-image-col">
            <img class="sun-img" src="../../wp-content/uploads/2021/01/sun.png" alt="Ikona ar sauli">
          </div>
          <div class="bank-text-col">
            <p class="page-text">
              Palīdzēt Latvijas un citu valstu sabiedrības locekļiem gūt panākumus personiskajā dzīvē un piepildīt dzīves sapņus,
              tādējādi, veicinot visas sabiedrības labklājību un kopējo laimes indeksu
            </p>
          </div>
        </div>

        <div class="bank-flex-row second">
          <div class="bank-text-col middle">
            <p class="page-text">
              Palīdzēt Latvijas un citu valstu sabiedrības locekļiem īstenot sapņus un idejas, kuras ir balstītas uz pasaules un
              cilvēces ilgtspējīgu attīstību, tai skaitā izglītošanos un tālākizglītību
            </p>
          </div>
          <div class="bank-image-col">
            <img class="mountain-img" src="../../wp-content/uploads/2021/01/mountain.png" alt="Ikona ar kalnu.">
          </div>
        </div>

        <div class="bank-flex-row third">
          <div class="bank-image-col">
            <img class="glasses-img" src="../../wp-content/uploads/2021/01/glasses.png" alt="Ikona ar brillēm.">
          </div>
          <div class="bank-text-col">
            <p class="page-text">
              Piesaistīt juridisko un fizisko personu intelektuālos un finanšu resursus sapņu realizācijai
            </p>
          </div>
        </div>
      </div>

      <div class="mission">
        <h3 class="page-undertitle">Misija</h3>
        <p class="page-text large">
          SparkleHeart ir Latvijā un pasaulē atpazīts zīmols
        </p>
      </div>
    </section>

    <section class="yellow-dream-container">
      <div class="benefactors">
        <div class="earth-wrap">
          <img class="earth-img" src="../../wp-content/uploads/2021/01/earth.png" alt="Ikona ar Zemi.">
          <p class="page-text large">
            Tavai zināšanai, sapņus mēs krājam visu gadu, lai maijā, kad visa pasaule zied, izvēlētos pašus iedvesmojošākos.
          </p>
        </div>
      </div>
    </section>

    <section class="dream-support-wrap">
      <h3 class="page-undertitle">Sapņus atlasīs</h3>
      <div class="dream-select-flex-container">
        <div class="dream-select-column">
          <img class="megaphone-img" src="../../wp-content/uploads/2021/01/megaphone.png" alt="Ikona ar megafonu.">
          <p class="page-text large">
            Publiskais cilvēku balsojums mājas lapā
          </p>
        </div>
        <div class="dream-select-column people">
          <img class="people-img" src="../../wp-content/uploads/2021/01/people.png" alt="Ikona ar cilvēkiem.">
          <p class="page-text large">
            Īpaši izveidota komisija, kur tiek pieaicināti arī SP sadarbības partneri
          </p>
        </div>
      </div>
    </section>

    <section class="yellow-dream-container">
      <div class="benefactors">
        <div class="rainbow-wrap">
          <img class="rainbow-img" src="../../wp-content/uploads/2021/01/rainbow.png" alt="Ikona ar varavīksni.">
          <p class="page-text large">
            Galvenais kritērijs, lai sapni izvēlētos, ir, vai to realizējot, mēs padarīsim pasauli labāku. Un pasauli labāku var
            padarīt gan lielas, gan mazas lietas
          </p>
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