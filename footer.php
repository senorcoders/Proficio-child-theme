<?php 
$titan = TitanFramework::getInstance( 'proficio' );

$example = $titan->getOption('example');

if (is_home()) {
  $aa_checkbox_val = $titan->getOption( 'customizable_section', 47 );
  $video_url = $titan->getOption('video_option', 47);
  $quote_text = $titan->getOption('customer_quote', 47);
  $citador = $titan->getOption('customer_id', 47);
  $quote_url = $titan->getOption('quote_bg_option', 47);

}else{
  $aa_checkbox_val = $titan->getOption( 'customizable_section', get_the_ID() );
  $video_url = $titan->getOption('video_option', get_the_ID());
  $quote_text = $titan->getOption('customer_quote', get_the_ID());
  $citador = $titan->getOption('customer_id', get_the_ID());
  $quote_url = $titan->getOption('quote_bg_option', get_the_ID());


}

if ($video_url == '1') {
  $video_url = 'https://www.youtube.com/embed/D1cyvMyCgic?list=PLCsJ30EVdJs6YXJt8w8KGL9xNvXd6fYLn';
} elseif ($video_url == '2') {
  $video_url = 'https://www.youtube.com/embed/T6BkVOVd3m0?list=PLCsJ30EVdJs6YXJt8w8KGL9xNvXd6fYLn';
} elseif ($video_url == '3') {
  $video_url = 'https://www.youtube.com/embed/4f_7E5yJocI?list=PLCsJ30EVdJs6YXJt8w8KGL9xNvXd6fYLn';
} elseif ($video_url == '4') {
  $video_url = 'https://www.youtube.com/embed/WiIjzNiRDDg?list=PLCsJ30EVdJs6YXJt8w8KGL9xNvXd6fYLn';
} else {
  $video_url = 'https://www.youtube.com/embed/xqU-9JiCz9Y?list=PLCsJ30EVdJs6YXJt8w8KGL9xNvXd6fYLn';
}


if ($quote_url == '1') {
  $quote_url = '/wp-content/uploads/2017/05/PROFICIO_SOC-186_.jpg';
}elseif($quote_url == '2'){
  $quote_url = '/wp-content/uploads/2017/05/blog_.jpg';
}else{
  $quote_url = '/wp-content/uploads/2017/05/PROFICIO_SOC-198_.jpg';
}

?>	

<?php if ($aa_checkbox_val == 'video') { ?>
<div class="grayBg">
  <div class="container">
    <a  data-toggle="modal" data-target="#pre-footer-modal" class="center-play"><i class="fa fa-play-circle-o" aria-hidden="true"></i></a>
  </br><br>
  <h4>Lead Gen Subtext Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus fringilla quam at rhoncus finibus. Aliquam sed ultricies turpis. </h4>
</div>
</div>




<?php
echo do_shortcode('[pre-footer-video url="'. $video_url .'"]');
}elseif ($aa_checkbox_val == 'none') {
   //NOTHING TO SHOW UP
} elseif ($aa_checkbox_val == 'quote') { ?>
<div class="quotes-section" style="          background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.5)), url('<?php echo $quote_url; ?>');
  ">
  <div class="container">
   <h1>Proficio Customer Quotes</h1>

   <blockquote><i class="fa fa-quote-left" aria-hidden="true"></i> <?php echo $quote_text; ?>  <i class="fa fa-quote-right" aria-hidden="true"></i></blockquote>
   <cite>-<?php echo $citador; ?></cite>
 </div>
</div>
<?php }
else{ ?>

<div class="lead-magnet">
  <div class="container">
   <h2>Lead Magnet Heading</h2>
   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas molestie fringilla vehicula. Ut sed faucibus dolor. Donec consequat dolor vitae mauris pharetra vulputate. Sed leo tellus, gravida nec efficitur nec, faucibus quis metus. Phasellus eleifend dolor sed orci vehicula consequat. </p>
 </div>

</div>
<?php } ?>

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

   <!--  <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h2 class="section-heading"></h2>
                    <hr class="primary">
                    <p></p>
                </div>
                <div class="col-lg-4 offset-lg-2 text-center">
                    <p></p>
                </div>
                <div class="col-lg-4 text-center">
                    <p><a href="mailto:your-email@your-domain.com"></a></p>
                </div>
            </div>
        </div>
      </section> -->

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

  </body>

  </html>