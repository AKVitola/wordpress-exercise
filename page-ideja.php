<body>
  <!-- <div class="container"> -->
  <?php get_header(); ?>

  <main>
    <section class="idea">
      <h1 class="page-heading">Ideja</h1>
      <p class="page-text">
        Juris Gogulis ir pasaules iedvesmots mākslinieks–horeogrāfs un režisors, kura ikdiena aizrit radot aizkustinošus un
        iedvesmojošus radošus projektus. Juris ir pārliecināts, ka ir vērts ticēt katram savam sapnim un censties to īstenot. Kā
        smejas pats - daudzu draugu sapņiem viņš tic vairāk, nekā viņi paši!
      </p>
    </section>

    <section class="founder">
      <div class="founder-overlay"></div>
      <img class="responsive-img founder-img" src="../../wp-content/uploads/2021/01/juris.jpg" alt="Kompānijas dibinātāja attēls.">
      <img class="responsive-img founder-img-tablet" src="../../wp-content/uploads/2021/01/juris-tablet.jpg" alt="Kompānijas dibinātāja attēls.">
      <img class="responsive-img founder-img-mobile" src="../../wp-content/uploads/2021/01/juris-mobile.jpg" alt="Kompānijas dibinātāja attēls.">
      <div class="founder-text-wrap">
        <p class="founder-text">
          “Kopš 3 gadu vecuma mani ir audzinājusi mamma, pēc viņas piemēra esmu sapratis, cik sieviete ir spēcīga un varoša.
          Vēlos
          atlīdzināt un izveidot platformu, kurā satikties un palīdzēt cilvēkiem piepildīt savus sapņus.”
        </p>
      </div>
    </section>

    <section class="reference">
      <div class="quote-slide js-quote-slide">
        <h6 class="referent-name">Ken Ludden</h6>
        <p class="referent-position">Director, Margot Fonteyn Academy of Ballet</p>
        <p class="referent-quote">For it is Juris work that is the <br>
          light the human race needs so badly these days. <span><br></span>
          His vision is inspired and talent is beyond measure.
        </p>
      </div>

      <div class="js-quote-slide">
        <h6 class="referent-name">Regīna Kaupuža</h6>
        <p class="referent-position">LNOB baleta pedagoģe, JVLMA horeogrāfijas katedras docente</p>
        <p class="referent-quote">
          Juris Gogulis ir ļoti radoša un uzņēmīga personība ar nezūdošo optimismu un gaišu prātu. Jaunu un galvenais drosmīgu ideju realizētājs!
        </p>
      </div>

      <div class="js-quote-slide">
        <h6 class="referent-name">Raimonds Dzintars</h6>
        <p class="referent-position">LU deju ansambļa Pērle mākslinieciskais vadītājs</p>
        <p class="referent-quote">
          Juris ir personība ar pozitīvu skatu uz dzīvi, kurš ne tikai māk nospraust mērķus, bet arī tos sasniegt. Turklāt, viņam piemīt spēja iedrošināt un motivēt arī citus.
        </p>
      </div>

      <div class="arrow-btn">
        <a class="prev-quote-btn" onclick="previousSlide()">
          <img class="arrow1" src="../../wp-content/uploads/2021/01/arrowLeft.png" alt="Bulta pa kreisi.">
        </a>

        <a class="next-quote-btn" onclick="nextSlide()">
          <img src="../../wp-content/uploads/2021/01/arrowRight.png" alt="Bulta pa labi.">
        </a>
      </div>
    </section>

    <?php get_template_part('template-parts/toTopBtn'); ?>

  </main>

  <?php get_template_part('template-parts/cookies'); ?>

  <!-- <section class="idea-footer">
    <footer class="footer"></footer>
  </section> -->

  <!-- </div> -->
  <?php get_footer(); ?>