<?php /* Template Name: Inside Pages */ ?>
<?php get_header(); ?>

<?php 
  $titan = TitanFramework::getInstance( 'proficio' );
  
  
?>	

    <div class="container" style="padding: 50px 0;">
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

    <?php if( get_field('background_content_image', get_the_ID()) ): ?>


	<div class="insideBgSection" style="background: url('<?php the_field('background_content_image', get_the_ID()); ?>');     background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    padding: 70px 0;">
		<div class="container">
		<p>
			<?php the_field('image_caption', get_the_ID()); ?>
		</p>
		</div>
	</div>

<?php endif; ?>

			<?php

				if( have_rows('comparison_grid', get_the_ID()) ):?>
					<div class="insideTableSection container">
						<div class="row">
							<div class="col-md-12">
								<h3>Comparison Grid Heading</h3>
							</div>

								



				   <?php while ( have_rows('comparison_grid', get_the_ID()) ) : the_row();?>

				   	<div class="col-md-6">
				   	<?php  the_sub_field('item_heading'); ?>
				   	</div>
				   
				   		<div class="col-md-6">
				   		<?php  the_sub_field('description'); ?>
				   			
				   		</div>

				       

				   <?php endwhile; ?>


			 </div>
		</div>


				<?php endif; ?>

				<div class="grayBg">
					<div class="container">
							<h4>Lead Gen Heading</h4>
							<p>Lead Gen Subtext Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus fringilla quam at rhoncus finibus. Aliquam sed ultricies turpis. </p>
					 </div>
				</div>


				<div class="grayBg" style="margin-top: 20px;">
					<div class="container">
							<h4>Lead Magnet Heading</h4>
							<p>Lead Gen Subtext Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus fringilla quam at rhoncus finibus. Aliquam sed ultricies turpis. </p>
					 </div>
				</div>

    
  
<?php get_footer(); ?>
