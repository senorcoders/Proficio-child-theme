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

<body  id="page-top" <?php body_class(); ?> >
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
            $h1 = $titan->getOption( 'heading-h1', 47 );
            $h2 = $titan->getOption( 'heading-h2', 47 );
            $ctaText = $titan->getOption( 'cta-button-text', 47 );
            $ctaLink = $titan->getOption( 'cta-button-link', 47 );
            $hero = wp_get_attachment_url($titan->getOption( 'header_image', 47 ));
            $height = $titan->getOption( 'banner_height', 47 );
            $custom_height = $titan->getOption ('custom_banner_height' , 47 );
        }else{
            $h1 = $titan->getOption( 'heading-h1', get_the_ID() );
            $h2 = $titan->getOption( 'heading-h2', get_the_ID() );
            $ctaText = $titan->getOption( 'cta-button-text', get_the_ID() );
            $ctaLink = $titan->getOption( 'cta-button-link', get_the_ID() );
            $hero = wp_get_attachment_url($titan->getOption( 'header_image', get_the_ID() ));
            $height = $titan->getOption( 'banner_height', get_the_ID() );
            $custom_height = $titan->getOption ('custom_banner_height' , get_the_ID() );
        }
        
	if($height == 'tall'){
		$custom_height = 760;
	}elseif($height == 'short'){
		$custom_height = 350;
	}

       
        ?>
         

    <header class="masthead" style="background-image: none !important; height: 100vh; overflow: hidden;">
            <div class="video-container">
                        <div class="header-content">
                        <?php if (have_rows('carousel_data', 215)) { ?>
                            <div id="proficio-video-caroussel" class="carousel slide carousel-fade"  >
                                <div class="carousel-inner">

                               <?php 
                                    $count = 0;

                                    while (have_rows('carousel_data', 215)): the_row();
                                        if ($count == 0) { ?>
                                           <div class="carousel-item active" data-interval="<?php the_sub_field('time'); ?>">
                                            <div class="header-content-inner">
                                            <h1 id="homeHeading"><?php the_sub_field('heading_h1'); ?></h1>
                                            <h2><?php the_sub_field('heading_h2'); ?></h2>
                               
                                            </div>
                                         </div> 
                                      <?php  } else{ ?>

                                        <div class="carousel-item" data-interval="<?php the_sub_field('time'); ?>">
                                            <div class="header-content-inner">
                                            <h1 id="homeHeading"><?php the_sub_field('heading_h1'); ?></h1>
                                            <h2><?php the_sub_field('heading_h2'); ?></h2>
                               
                                            </div>
                                         </div>

                                       <?php }
                                       $count++;

                                     endwhile;
                               
                             } ?>
                            
                             
                               
                               
                               
                              </div>
                            </div>
                           
                        </div>
        <div class="filter"></div>
        <video width="100%" height="auto" autoplay="" muted="" loop="" style="background:transparent no-repeat 0 0; background-size:cover;">
                <source src="<?php echo $hero ?>" type="video/mp4">    </video>
                <div class="carot-down"><a href="#carot-position"><i class="fa fa-angle-down" aria-hidden="true"></i></a></div>
            </div>
       
    </header>
