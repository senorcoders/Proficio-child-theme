<?php /* Template Name: Leadership */ ?>
<?php get_header(); ?>

<?php 
  $titan = TitanFramework::getInstance( 'proficio' );
  
  
?>	

    <div class="container">
        <div class="row">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="col-md-12">
                    
                    <?php the_content(); ?>
                    </div>
                    <?php endwhile; ?>
                    <?php else : ?>
                    <h6 class="center">Not Found</h6>
                    <p class="center">Sorry, but you are looking for something that isn't here.</p>
                    <?php endif; ?>
            
        </div>
    </div>

    <div class="container">
    	<?php

				if( have_rows('leaders', get_the_ID()) ):

				    while ( have_rows('leaders', get_the_ID()) ) : the_row();?>

				        <div class="row" style="  margin: 50px 0;">
				        	<div class="col-md-4">
				        		<div class="leadersHeadshot" style="background: url('<?php the_sub_field('headshot'); ?>');"></div>
				        	</div>
				        	<div class="col-md-8">
				        		<h3><?php the_sub_field('name'); ?></h3>
				        		<div>
				        			<p><?php the_sub_field('biography'); ?></p>
				        		</div>
				        	</div>
				        </div>

				   <? endwhile;

				else :


				endif;

	?>
    </div>

   
  
<?php get_footer(); ?>
