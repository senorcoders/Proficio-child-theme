<!DOCTYPE html>
<html lang="en">

<head>
    <!-- RTP tag -->
    <script type='text/javascript'>
    (function(c, h, a, f, i, e) {
        c[a] = c[a] || function() {
            (c[a].q = c[a].q || []).push(arguments) };
        c[a].a = i;
        c[a].e = e;
        var g = h.createElement("script");
        g.async = true;
        g.type = "text/javascript";
        g.src = f + '?aid=' + i;
        var b = h.getElementsByTagName("script")[0];
        b.parentNode.insertBefore(g, b);
    })(window, document, "rtp", "//sjrtp8-cdn.marketo.com/rtp-api/v1/rtp.js", "prosocinc");

    rtp('send', 'view');
    rtp('get', 'campaign', true);
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
        nav>.container {
            width: 100%;
        }
    }
    </style>
</head>

<body id="page-top" <?php body_class(); ?> >
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
        <div id="proficio-video-caroussel" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="6000" style="height: 100vh;  ">
                    <div class="video-container" style="width: 100%;">
                        <div class="header-content">
                            <div class="header-content-inner">
                                <h1 id="homeHeading">Intelligent Cybersecurity Services</h1>
                                <h2>More Accurate Alerts, Flexible Solutions and Automated Response Services</h2>
                            </div>
                        </div>
                        <div class="filter"></div>
                        <video width="100%" height="auto" autoplay="" muted="" loop="" style="background:transparent no-repeat 0 0; background-size:cover;">
                            <source src="<?php echo $hero ?>" type="video/mp4"> </video>
                    </div>
                </div>
                <div class="carousel-item free-year-bg" data-interval="6000" style="background: url('/wp-content/uploads/2017/05/web.jpg'); height: 100vh;">
                    <div class="header-content">
                        <div class="header-content-inner">
                             <h2 class="sub-title-flexible">Premium Cybersecurity Services</h2>
        <h1 class="title-flexible">First Year <span class="white">free</span></h1>
         <h2 style="color: #00FEFB; text-transform: capitalize;">Unprecedented Limited-Time Offer for New Clients</h2>
                            <a class="btn btn-primary btn-xl" href="/first-year-free/" >Start Saving</a>
                        </div>
                    </div>
                </div>
               

                 <div class="carousel-item" data-interval="6000" style="height: 100vh;  ">
                    <div class="video-container" style="width: 100%;">
                        <div class="header-content">
                             <div class="header-content-inner">
                    <div class="row">
                        <div class="col-md-8" style="text-align: left;">
                            <ul class="list-inline">
                                <li class="list-inline-item" style="    border-right: 1px solid;
    padding-right: 10px;"><img src="/wp-content/uploads/2017/05/proficio-logo-new.png" alt="" width="100"></li>
                                <li class="list-inline-item"><img src="/wp-content/uploads/2017/05/splunk-1.png" alt="" width="100"></li>
                            </ul>
                            <h3>on-demand Webinar</h3>
                            <h1>Optimizing your splunk investment</h1>
                            <h3>co-managed siem services</h3>
                            <br>
                         
                        </div>
                        <div class="col-md-4" style="justify-content: center;
    align-items: center;
    display: flex;">
                            <a class="btn btn-primary btn-xl" href="/resources/webinars/" style="font-size: 25px;">Watch Now</a>
                        </div>
                    </div>
                    </div>
                        </div>
                        <div class="filter"></div>
                        <video width="100%" height="auto" autoplay="" muted="" loop="" style="background:transparent no-repeat 0 0; background-size:cover;">
                            <source src="<?php echo $hero ?>" type="video/mp4"> </video>
                    </div>
                </div>

                <div class="carousel-item" data-interval="6000" style="height: 100vh;  ">
                    <div class="video-container" style="width: 100%;">
                        <div class="header-content">
                            <div class="header-content-inner">
                                <h1 id="homeHeading">CASTLIGHT HEALTH</h1>
                                <h2>Andrew Van Wormer | Manager, Security Operations Castlight Health</h2>
                                <a class="btn btn-primary btn-xl" href="/castlight-health-proficio/">Watch Andrew's Story</a>
                            </div>
                        </div>
                        <div class="filter"></div>
                        <video width="100%" height="auto" autoplay="" muted="" loop="" style="background:transparent no-repeat 0 0; background-size:cover;">
                            <source src="wp-content/uploads/2017/05/Proficio_Testimonial_V4.mp4" type="video/mp4"> </video>
                    </div>
                </div>
            </div>
             <a class="carousel-control-prev" href="#proficio-video-caroussel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#proficio-video-caroussel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
        </div>
        <div class="carot-down"><a href="#carot-position"><i class="fa fa-angle-down" aria-hidden="true"></i></a></div>
    </header>