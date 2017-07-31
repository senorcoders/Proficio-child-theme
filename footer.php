<?php include('inc/customizable-section.php'); ?>

<?php 
  if (!is_front_page()) {
      include('inc/customer-slider.php'); 
  }

?>

<?php if (is_page(1179) or (is_page(1503)) or is_page(1416) or is_page(1462) or is_page(1466)) { ?>
  <div class="pre-footer text-center">

  <p>Find Out What Proficio Can Do for You &nbsp;&nbsp;&nbsp; <a class="btn btn-primary btn-xl" href="/managed-security-services-quote/">Contact Us Today!</a></p>
</div>
<?php }  else{ ?>
 <div class="pre-footer text-center">

  <p>Improve Your Security Posture With Managed Security Services &nbsp;&nbsp;&nbsp; <a class="btn btn-primary btn-xl" href="/managed-security-services-quote/">Get a Quote</a></p>
</div>
 <?php } ?>



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

<?php if (is_page(352)) { ?>
     <script>
        function initMap() {
          var uluru = {lat: 33.1387564, lng: -117.294406};
          var singapur = {lat: 1.283217, lng: 103.8488996};
          var barcelona = {lat: 41.4025344, lng: 2.1575719};
          var atlanta = {lat: 33.8395408, lng: -84.3834633};
          var hong = {lat: 22.3164195, lng: 114.1680507};
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: uluru
          });
          var marker = new google.maps.Marker({
            position: uluru,
            map: map
          });


          var map2 = new google.maps.Map(document.getElementById('map-eu'), {
            zoom: 12,
            center: singapur
          });
          var marker2 = new google.maps.Marker({
            position: singapur,
            map: map2
          });


          var map3 = new google.maps.Map(document.getElementById('map-emea'), {
            zoom: 12,
            center: barcelona
          });
          var marker3 = new google.maps.Marker({
            position: barcelona,
            map: map3
          });

           var map4 = new google.maps.Map(document.getElementById('map-atlanta'), {
            zoom: 12,
            center: atlanta
          });
          var marker4 = new google.maps.Marker({
            position: atlanta,
            map: map4
          });

           var map5 = new google.maps.Map(document.getElementById('map-hong'), {
            zoom: 12,
            center: hong
          });
          var marker5 = new google.maps.Marker({
            position: hong,
            map: map5
          });
        }
      </script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLJUxUGa6D4x1TrnHuqm4RXFckSVAEeAE&callback=initMap">
    </script>
<?php } ?>
     

    

    <!-- <script>
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
    </script>  -->


    <?php if (is_front_page()) { ?>
     

<script type="text/javascript">
    adroll_adv_id = "JFDKJUXIR5DSHFGBQA5YJA";
    adroll_pix_id = "KHJNXXS5DRHKJEI3PVF4IT";
    /* OPTIONAL: provide email to improve user identification */
    /* adroll_email = "username@example.com"; */
    (function () {
        var _onload = function(){
            if (document.readyState && !/loaded|complete/.test(document.readyState)){setTimeout(_onload, 10);return}
            if (!window.__adroll_loaded){__adroll_loaded=true;setTimeout(_onload, 50);return}
            var scr = document.createElement("script");
            var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
            scr.setAttribute('async', 'true');
            scr.type = "text/javascript";
            scr.src = host + "/j/roundtrip.js";
            ((document.getElementsByTagName('head') || [null])[0] ||
                document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
        };
        if (window.addEventListener) {window.addEventListener('load', _onload, false);}
        else {window.attachEvent('onload', _onload)}
    }());
</script>
    <?php } ?>


    <?php if (is_page(857)) { ?>
      <script type="text/javascript">
   adroll_adv_id = "QOLRKBZXNZAVDN2RQBDLU3";
    adroll_pix_id = "QYMPIBZWURDT3LVWKOJODG";
    /* OPTIONAL: provide email to improve user identification */
    /* adroll_email = "username@example.com"; */
    (function () {
        var _onload = function(){
            if (document.readyState && !/loaded|complete/.test(document.readyState)){setTimeout(_onload, 10);return}
            if (!window.__adroll_loaded){__adroll_loaded=true;setTimeout(_onload, 50);return}
            var scr = document.createElement("script");
            var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
            scr.setAttribute('async', 'true');
            scr.type = "text/javascript";
            scr.src = host + "/j/roundtrip.js";
            ((document.getElementsByTagName('head') || [null])[0] ||
                document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
        };
        if (window.addEventListener) {window.addEventListener('load', _onload, false);}
        else {window.attachEvent('onload', _onload)}
    }());
</script>
   <?php } ?>

  </body>

  </html>