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


<?php if (isset($_GET["aliId"])) {?>
    
    <body  id="page-top"  class="thanks-body" >

<?php } else{ ?>
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
        
        <div class="container">
            <div class="row" style="width: 100%;">
              
              <ul id="top-menu" class="top-menu">
                                                <li>
                    <a href="https://twitter.com/proficioinc" target="_blank" title="Find us on Twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/company/proficio-inc-" target="_blank" title="Find us on LinkedIn">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/ProficioInc" target="_blank" title="Find us on Facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/user/Proficioinc" target="_blank" title="Find us on YouTube">
                        <i class="fa fa-youtube"></i>
                    </a>
                </li>               
                    
                        <li class=" internalUrl  first  ">
                            <a id="" href="/contact/">Contact</a>
                        </li>
           
                    
                        <li class=" externalUrl last   ">
                            <a id="" href="tel:+18007795042">800.779.5042</a>
                        </li>
                
            </ul>

                <div class="col-md-12">
                      <a class="navbar-brand" id="logo-proficio" style="position: absolute;" href="<?php echo esc_url( $url ); ?>"><img width="230px" src="<?php echo $imageSrcLogo ?>"></a>
                          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_id' => 'navbarExample', 'container_class' => 'collapse navbar-collapse' ,  'menu_class' => 'navbar-nav ml-auto' ) ); ?>

                </div>
            </div>

                    
                      
        </div>
    </nav>

    
         

   
