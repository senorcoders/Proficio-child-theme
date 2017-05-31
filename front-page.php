<?php /* Template Name: Homepage */ ?>

<?php include('header-video.php'); ?>
<?php 
  $titan = TitanFramework::getInstance( 'proficio' );
  
  
?>  

    <div  style="padding-top: 100px;">
   

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        
                   

                        <div>
                        
                                <?php the_content(); ?>
                        </div>
        

                    

                    <?php endwhile; ?>
                    <?php else : ?>
                    <h6 class="center">Not Found</h6>
                    <p class="center">Sorry, but you are looking for something that isn't here.</p>
                    <?php endif; ?>
          </div>  
    </div>

    
  
<?php get_footer(); ?>
