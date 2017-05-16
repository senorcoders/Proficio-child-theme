<?php 
  $titan = TitanFramework::getInstance( 'proficio' );
  
  $example = $titan->getOption('example');

          if (is_home()) {
              $aa_checkbox_val = $titan->getOption( 'lead_magnet_checkbox', 47 );

          }else{
              $aa_checkbox_val = $titan->getOption( 'lead_magnet_checkbox', get_the_ID() );

          }


  
?>	

        <?php if ($aa_checkbox_val == 1) {?>
           <div class="grayBg">
                    <div class="container">
                            <h4>Lead Gen Heading</h4>
                            <p>Lead Gen Subtext Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus fringilla quam at rhoncus finibus. Aliquam sed ultricies turpis. </p>
                     </div>
                </div>


                <div class="grayBg" style="margin-top: 20px;">
                    <div class="container">
                            <h4>Lead Magnet Heading</h4>
                            <p>Lead Gen Subtext Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus fringilla quam at rhoncus finibus. Aliquam sed ultricies turpis. </p>
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
            <div class="col-md-2">
                    <?php if ( is_active_sidebar( 'sidebar-footer1' ) ) : ?>
                            <?php dynamic_sidebar( 'sidebar-footer1' ); ?>
                    <?php endif; ?>
                                 
             </div>
            

             <div class="col-md-2">
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

</body>

</html>