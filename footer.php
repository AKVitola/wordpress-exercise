<footer class="footer">
  <div class="flex-container-footer">
    <div class="golden-logo">
      <a href="/">
        <img src="http://wordpress-exercise.dev.cc/wp-content/uploads/2021/01/GoldenLogo-.png" alt="Organizācijas logo zelta krāsā.">
      </a>
    </div>
    <div class="underlogo-name footer-title">Juris Gogulis</div>
    <div class="copyright">
      <p class="copyright-text">
        &copy; SparkleHeart 2020.
        <span class="line-break"><br></span>
        Visas tiesības aizsargātas.
      </p>
    </div>

    <?php
    $footer_menu_array = array(
      'menu'            => 'Footer menu',
      'container'       => 'nav',
      'container_class' => 'footer-nav',
      'menu_class'      => 'footer-nav-list',
      'before'          => '<span class="footer-nav-link underline-animation">',
      'after'           => '</span>',
      'fallback_cb'     => false,
    );
    wp_nav_menu($footer_menu_array);
    ?>

    <div class="bank-account">
      <p class="footer-title">Biedrība SparkleHeart</p>
      <div class="account-number">
        <p>Reģistrācijas nr. 40008293119</p>
        <p>Banka: SWEDBANK A/S</p>
        <p>LV52HABA0551047652465</p>
      </div>
    </div>

    <address class="adress">
      <p class="footer-title owner-name">Juris Gogulis</p>
      <div class="adress-details">
        <p>juris.gogulis@sparkleheart.org</p>
        <p>+37126890034</p>
        <p class="street">Biķernieku iela 24a - 5, LV-1006</p>
        <span class="route-to-accoount">
          <p>Skatīt rekvizītus</p>
        </span>
      </div>
    </address>

    <div class="social-media">
      <div>
        <a target="_blank" href="https://www.facebook.com/sparkleheartLV/">
          <img class="fb-icon" src="http://wordpress-exercise.dev.cc/wp-content/uploads/2021/01/icon_facebook.png" alt="Facebook ikona.">
        </a>
      </div>
      <div>
        <a target="_blank" href="https://www.instagram.com/sparkleheart_org/">
          <img class="ig-icon" src="http://wordpress-exercise.dev.cc/wp-content/uploads/2021/01/icon_instragram.png" alt="Instagram ikona.">
        </a>
      </div>
    </div>
    <div class="copyright private">
      <p class="copyright-text"> Privātuma politika</p>
    </div>
  </div>
</footer>

<?php wp_footer() ?>
</body>

</html>