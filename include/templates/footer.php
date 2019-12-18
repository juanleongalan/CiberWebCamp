<footer class="site-footer">
  <div class="contenedor clearfix">
    <div class="footer-informacion">
      <h3>Sobre<span> CiberWebCamp</span></h3>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt illo doloribus, consequuntur quam amet dolorem ipsam a, magni ab, dolore architecto corrupti natus inventore! Suscipit non itaque eos ad adipisci?</p>
    </div>
    <div class="ultimos-tweets">
      <h3>Últimos<span> Tweets</span></h3>
      <ul>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum neque error pariatur! Blanditiis enim nulla sunt veritatis praesentium! Corrupti totam voluptate vel velit, dolorem voluptas ipsum provident molestiae vero deserunt.</li>
        <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A omnis id voluptatibus dolorem nesciunt voluptatem fuga quae! Inventore omnis accusamus non magni quis saepe praesentium sint reprehenderit error assumenda? Sequi.</li>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias inventore eveniet incidunt dolore sed amet iste ratione aliquid cum? Libero rerum nam earum autem incidunt inventore necessitatibus at reprehenderit quo!</li>
      </ul>
    </div>
    <div class="menu">
      <h3>Redes<span> sociales</span></h3>
      <nav class="redes-sociales">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-pinterest-p"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </nav>
    </div>
  </div>
  <p class="copyright">Todos los derechos Reservados CiberWebCamp 2020. &copy;</p>
  </footer>


  <script src="js/vendor/jquery-3.4.1.min.js"></script>
  <script src="js/vendor/modernizr-3.7.1.min.js"></script>
  <script src="js/leaflet.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/jquery.animateNumber.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.lettering.js" ></script>
  <?php
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
    if($pagina == 'invitados' || $pagina == 'index') {
      echo '<script src="js/jquery.colorbox-min.js"></script>';
    } else if ($pagina == 'conferencia') {
      echo '<script src="js/lightbox.js"></script>';
    }
  ?>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/main.js"></script>
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
  <script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script>
  <script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us4.list-manage.com","uuid":"dbc377db9d7232ec4dbf86240","lid":"0d366e3451","uniqueMethods":true}) })</script>
</body>

</html>
