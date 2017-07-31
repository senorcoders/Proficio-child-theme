<?php $url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

$titan = TitanFramework::getInstance( 'proficio' );
    
    $signature1 = $titan->getOption('signature1');
    $signature2 = $titan->getOption('signature2');

    $signature3 = $titan->getOption('signature3');
    $signature4 = $titan->getOption('signature4');
    $signature5 = $titan->getOption('signature5');
    $signature6 = $titan->getOption('signature6');


if (strpos($url,'signature1') !== false) {
    header('Location: '.$signature1);
    die();
} elseif (strpos($url,'signature2') !== false) {
  header('Location: '.$signature2);
    die();
} elseif (strpos($url,'signature3') !== false) {
  header('Location: '.$signature3);
    die();
}elseif (strpos($url,'signature4') !== false) {
  header('Location: '.$signature4);
    die();
} elseif (strpos($url,'signature5') !== false) {
  header('Location: '.$signature5);
    die();
} elseif (strpos($url,'signature6') !== false) {
  header('Location: '.$signature6);
    die();
}  ?>

<!DOCTYPE html>
<html lang="en">

<head>
<!-- RTP tag --> 
<script type='text/javascript'>
(function(c,h,a,f,i,e){c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
 c[a].a=i;c[a].e=e;var g=h.createElement("script");g.async=true;g.type="text/javascript";
 g.src=f+'?aid='+i;var b=h.getElementsByTagName("script")[0];b.parentNode.insertBefore(g,b);
 })(window,document,"rtp","//sjrtp8-cdn.marketo.com/rtp-api/v1/rtp.js","prosocinc");
 
rtp('send','view');
rtp('get', 'campaign',true);
</script>
<!-- End of RTP tag -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   


    <?php wp_head(); ?>

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>

</head>


<?php if (isset($_GET["aliId"]) and is_page(225))  {?>
    
    <body  id="page-top"  class="thanks-body" >

<?php } elseif ( (isset($_GET["aliId"]) and is_page(1179)) or (isset($_GET["aliId"]) and is_page(1503)) or (isset($_GET["aliId"]) and is_page(1416))
        or (isset($_GET["aliId"]) and is_page(1462)) or (isset($_GET["aliId"]) and is_page(1466))) { ?>
    <body  id="page-top"  class="rsvp-thank" >
 <?php } 

 else{ ?>
        <body  id="page-top" <?php body_class(); ?> >

   <?php }?>
<?php 
  $titan = TitanFramework::getInstance( 'proficio' );
  
  $logo = $titan->getOption('logo-image');

   $imageSrcLogo = $logo; // For the default value
        if ( is_numeric( $logo ) ) {
        $imageAttachmentLogo = wp_get_attachment_image_src( $logo, 'full');
        $imageSrcLogo = $imageAttachmentLogo[0];

        } 

        $url = home_url();

  
?>  
    <!-- Navigation -->
    
    <nav class="navbar fixed-top navbar-toggleable-md navbar-light" id="mainNav">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div style="width: 100%;">
            <div class="row" style="width: 100%;">
              
             <?php include('inc/top-menu.php'); ?>



                <div class="col-md-12" style="padding: 0 5%;">
                      <a class="navbar-brand" id="logo-proficio" style="position: absolute;" href="<?php echo esc_url( $url ); ?>"><img width="230px" src="<?php echo $imageSrcLogo ?>"></a>
                          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_id' => 'navbarExample', 'container_class' => 'collapse navbar-collapse' ,  'menu_class' => 'navbar-nav ml-auto' ) ); ?>
                          <?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_6', 'container_id' => 'navbarExample', 'container_class' => 'collapse navbar-collapse mobile-proficio-menu' ,  'menu_class' => 'navbar-nav ml-auto' ) ); ?>

                </div>
            </div>

                    
                      

          <!--   <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div> -->
        </div>
    </nav>

    <?php 
 
       

        if (is_home()) {
          $h1 = 'Blog';            
           $h2 = $titan->getOption( 'heading-h2', 47 );
            $ctaText = $titan->getOption( 'cta-button-text', 47 );
            $ctaLink = $titan->getOption( 'cta-button-link', 47 );
            $hero = wp_get_attachment_url($titan->getOption( 'header_image', 47 ));
            $height = $titan->getOption( 'banner_height', 47 );
            $custom_height = $titan->getOption ('custom_banner_height' , 47 );
            $ctaOptionLink = $titan->getOption('cta_link_option', 47);
        }elseif (is_search()) {
            $h1 = 'Search Results';
            $h2 = $titan->getOption( 'heading-h2', 47 );
            $ctaText = $titan->getOption( 'cta-button-text', 47 );
            $ctaLink = $titan->getOption( 'cta-button-link', 47 );
            $hero = wp_get_attachment_url($titan->getOption( 'header_image', 47 ));
            $height = $titan->getOption( 'banner_height', 47 );
            $custom_height = $titan->getOption ('custom_banner_height' , 47 );
            $ctaOptionLink = $titan->getOption('cta_link_option', 47);

        }
        else{
            $h1 = $titan->getOption( 'heading-h1', get_the_ID() );
            $h2 = $titan->getOption( 'heading-h2', get_the_ID() );
            $ctaText = $titan->getOption( 'cta-button-text', get_the_ID() );
            $ctaLink = $titan->getOption( 'cta-button-link', get_the_ID() );
            $hero = wp_get_attachment_url($titan->getOption( 'header_image', get_the_ID() ));
            $height = $titan->getOption( 'banner_height', get_the_ID() );
            $custom_height = $titan->getOption ('custom_banner_height' , get_the_ID() );
           $ctaOptionLink = $titan->getOption('cta_link_option', get_the_ID());

        }
        
	if($height == 'tall'){
		$custom_height = 760;
	}elseif($height == 'short'){
		$custom_height = 469;
	}

       
        ?>
         

    <header class="masthead" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url('<?php echo esc_url( $hero ); ?>'); height: <?php echo $custom_height; ?>px !important;">
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading"><?php echo $h1; ?></h1>
                <h2><?php echo $h2; ?></h2>
                <?php if ( !empty($ctaText) ) { ?>
                   
               
               <?php if ($ctaOptionLink == '1') { ?>
                    <a class="btn btn-primary btn-xl" href="#" data-toggle="modal" data-target="#modal-embed" data-src="<?php echo $ctaLink; ?>" data-backdrop="static" ><?php echo $ctaText; ?></a>
              <?php  } elseif ($ctaOptionLink == '2') { ?>
                      
                      <a data-toggle="modal" data-target="#pre-footer-modal" class="btn btn-primary btn-xl"><?php echo $ctaText; ?></a>
              <?php 

            } else{
                    //Nothing to display
                } ?>
             

                 <?php } ?>
            </div>

           
        </div>
    </header>

     <?php if ($ctaOptionLink == '2'): 
               echo do_shortcode('[pre-footer-video url="'. $ctaLink .'"]');

            endif ?>
