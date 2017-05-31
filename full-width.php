<?php /* Template Name: Full Width (No Margins) */ ?>

<?php get_header(); ?>
<?php 
  $titan = TitanFramework::getInstance( 'proficio' );
  
  
?>	

    <div style="padding: 100px 0;">

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        
                   

                        
                                <?php the_content(); ?>
        

                    

                    <?php endwhile; ?>
                    <?php else : ?>
                    <h6 class="center">Not Found</h6>
                    <p class="center">Sorry, but you are looking for something that isn't here.</p>
                    <?php endif; ?>
    </div>

    
  
<?php get_footer(); ?>
