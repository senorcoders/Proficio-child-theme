<?php /* Template Name: Page Alternate */ ?>

<?php get_header(); ?>
<?php 
  $titan = TitanFramework::getInstance( 'proficio' );
  
  
?>	

    <div  style="padding: 100px 0;">
        <div class="first-row flip-right">

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="container">
                    <div class="row">

                        <div class="col-md-7">
                        
                                <?php the_content(); ?>
                        </div>
                    </div>
                    </div>

                    

                    <?php endwhile; ?>
                    <?php else : ?>
                    <h6 class="center">Not Found</h6>
                    <p class="center">Sorry, but you are looking for something that isn't here.</p>
                    <?php endif; ?>
          </div>  
    </div>

    
  
<?php get_footer(); ?>
