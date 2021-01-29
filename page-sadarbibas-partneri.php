<body>
  <?php get_header(); ?>

  <main>
    <section class="dream-supporters">
      <h1 class="page-heading"> <?php the_title(); ?></h1>
      <p class="page-text"> <?php the_field('page_text'); ?> </p>
    </section>

    <section class="select-container">
      <div class="custom-select city-select" id="js-city-select">
        <label for="city" class="page-text">Uzņemuma atrašanās vieta</label>
        <select class="dropdown" name="city" id="js-city" required onchange="showCompanies()">
          <option class="js-city-option" value="" disabled selected hidden>Izvēlies</option>
          <option class="js-city-option" value="riga">Rīga</option>
          <option class="js-city-option" value="jelgava">Jelgava</option>
          <option class="js-city-option" value="ogre">Ogre</option>
        </select>
      </div>

      <div class="custom-select type-select" id="js-type-select">
        <label for="type" class="page-text">Uzņēmuma veids</label>
        <select class="dropdown" name="type" id="js-type" required onchange="showCompanies()">
          <option class="js-type-option" value="" disabled selected hidden>Izvēlies</option>
          <option class="js-type-option" value="beauty">Skaistumkopšana</option>
          <option class="js-type-option" value="translate">Tulkošana</option>
          <option class="js-type-option" value="food">Ēdināšana</option>
        </select>
      </div>
    </section>

    <section class="displayInfoWrap" id="js-businessInfo"></section>

    <section class="map-container">
      <div class="map" id="js-map"></div>
      <div class="controls js-zoom-control-wrap">
        <button class="zoom-control js-zoom-in" title="Zoom In"><span class="control-symbol">+</span></button>
        <button class="zoom-control js-zoom-out" title="Zoom Out"><span class="control-symbol">−</span></button>
      </div>
    </section>

    <?php get_template_part('template-parts/toTopBtn'); ?>

  </main>

  <?php get_template_part('template-parts/cookies'); ?>
  <?php get_footer(); ?>