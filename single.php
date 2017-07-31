<?php


the_post();

?>

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

                    
                      

        
        </div>
    </nav>

   
         

    <header class="masthead" style="background: url('<?php the_post_thumbnail_url(); ?>') !important; height: 360px !important; background-size: cover !important;     background-position: center center !important;
">
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading"><?php the_title(); ?></h1>
                
            </div>
        </div>
    </header>




	<div class="container" style="padding: 50px 0;">

		<div class="row recent-post-cont post-article">
			<div class="col-md-8">
				
				<div>
					 <p>Posted on <span class="green"><?php the_date(); ?></span> by  <span class="green"><!-- <?php //echo get_the_author(); ?> --> Proficio</span></p>
					<p><?php 
					the_content();
				
					?></p>
				</div>
				
				
			</div>
			<div class="col-md-4">
			<?php if ( is_active_sidebar( 'post_sidebar' ) ) : ?>
					<?php dynamic_sidebar( 'post_sidebar' ); ?>
			<?php endif; ?>
			</div>
		</div>

		
	</div>




             
<?php
//* Run the Genesis loop
get_footer();
