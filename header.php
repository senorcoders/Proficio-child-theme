<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Senorcoders custom theme">
    <meta name="author" content="www.senorcoders.com">

    <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>

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
        
        <div class="container">
            <div class="row" style="width: 100%;">
              

                <div class="col-md-12">
                      <a class="navbar-brand" id="logo-proficio" style="position: absolute;" href="<?php echo esc_url( $url ); ?>"><img width="230px" src="<?php echo $imageSrcLogo ?>"></a>
                          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_id' => 'navbarExample', 'container_class' => 'collapse navbar-collapse' ,  'menu_class' => 'navbar-nav ml-auto' ) ); ?>

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
         

    <header class="masthead" style="background: url('<?php echo esc_url( $hero ); ?>') !important; height: <?php echo $custom_height; ?>px !important;     background-position: center center !important;">
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading"><?php echo $h1; ?></h1>
                <h2><?php echo $h2; ?></h2>
                <?php if ( !empty($ctaText) ) { ?>
                   
               
                <a class="btn btn-primary btn-xl" href="<?php echo $ctaLink; ?>"><?php echo $ctaText; ?></a>

                 <?php } ?>
            </div>
        </div>
    </header>
