<?php /* Template Name: Contact Page */ ?>
<?php get_header(); ?>

<?php 
  $titan = TitanFramework::getInstance( 'proficio' );
  
  
?>	

    <div class="container" style="padding: 100px 0;">
        <div class="row">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="col-md-8">
                    
                    <?php the_content(); ?>
                    </div>
                    <?php endwhile; ?>
                    <?php else : ?>
                    <h6 class="center">Not Found</h6>
                    <p class="center">Sorry, but you are looking for something that isn't here.</p>
                    <?php endif; ?>


                    <div class="col-md-4">
                    	 <?php if ( is_active_sidebar( 'contact_sidebar' ) ) : ?>
                            <?php dynamic_sidebar( 'contact_sidebar' ); ?>
                    <?php endif; ?>
                    </div>
            
        </div>
    </div>

   

				

    
  
<?php get_footer(); ?>
