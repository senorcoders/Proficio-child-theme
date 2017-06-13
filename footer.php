<?php include('inc/customizable-section.php'); ?>

<?php 
  if (!is_front_page()) {
      include('inc/customer-slider.php'); 
  }

?>

<div class="pre-footer text-center">

  <p>Improve Your Security Posture With Managed Security Services &nbsp;&nbsp;&nbsp; <a class="btn btn-primary btn-xl" href="/managed-security-services-quote/">Get a Quote</a></p>
</div>

<footer id="footer" class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <span id="branding" class="branding">
          <a href="/" title="Proficio">Proficio</a>
        </span>
      </div>
      <div class="col-md-6">
        <ul class="social-nav">
          <li>
            <a href="https://twitter.com/proficioinc" target="_blank" title="Find us on Twitter">
              <i class="fa fa-twitter fa-lg"></i>
            </a>
          </li>
          <li>
            <a href="https://www.linkedin.com/company/proficio-inc-" target="_blank" title="Find us on LinkedIn">
              <i class="fa fa-linkedin fa-lg"></i>
            </a>
          </li>
          <li>
            <a href="https://www.facebook.com/ProficioInc" target="_blank" title="Find us on Facebook">
              <i class="fa fa-facebook fa-lg"></i>
            </a>
          </li>
          <li>
            <a href="https://www.youtube.com/user/Proficioinc" target="_blank" title="Find us on YouTube">
              <i class="fa fa-youtube fa-lg"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2 footer-menu">
        <?php if ( is_active_sidebar( 'sidebar-footer1' ) ) : ?>
          <?php dynamic_sidebar( 'sidebar-footer1' ); ?>
        <?php endif; ?>

      </div>


      <div class="col-md-2 footer-menu">
        <?php if ( is_active_sidebar( 'sidebar-footer2' ) ) : ?>
          <?php dynamic_sidebar( 'sidebar-footer2' ); ?>
        <?php endif; ?>           

        <p class="copyright">
          © <?php echo date("Y"); ?> Proficio
        </p>
      </div>
      <div class="col-md-8">
       <?php if ( is_active_sidebar( 'sidebar-footer3' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-footer3' ); ?>
      <?php endif; ?>    
    </div>
  </div>
</div>
</footer>

  

      <?php 
      wp_footer();
      ?>

      <script>
        function initMap() {
          var uluru = {lat: 33.1307301, lng: -117.2357504};
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 18,
            center: uluru
          });
          var marker = new google.maps.Marker({
            position: uluru,
            map: map
          });


          var map2 = new google.maps.Map(document.getElementById('map-eu'), {
            zoom: 18,
            center: uluru
          });
          var marker2 = new google.maps.Marker({
            position: uluru,
            map: map2
          });


          var map3 = new google.maps.Map(document.getElementById('map-emea'), {
            zoom: 18,
            center: uluru
          });
          var marker3 = new google.maps.Marker({
            position: uluru,
            map: map3
          });
        }
      </script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLJUxUGa6D4x1TrnHuqm4RXFckSVAEeAE&callback=initMap">
    </script>

    <?php 
    $titan = TitanFramework::getInstance( 'proficio' );
    
    $signature1 = $titan->getOption('signature1');
    $signature2 = $titan->getOption('signature2');

    $signature3 = $titan->getOption('signature2');

    ?> 

    <script>
      jQuery(document).ready(function(){
        if(document.URL.indexOf("/signature1") >= 0){ 
          window.location.href = "<?php echo $signature1; ?>";
        }
        if(document.URL.indexOf("/signature2") >= 0){ 
          window.location.href = "<?php echo $signature2; ?>";
        }

        if(document.URL.indexOf("/signature3") >= 0){ 
          window.location.href = "<?php echo $signature3; ?>";
        }
      });
    </script> 

  </body>

  </html>