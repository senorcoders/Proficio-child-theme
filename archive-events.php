<?php /* Template Name: Events Template */ ?>
<?php get_header(); ?>



<div class="container" style="padding: 50px 0;">
	<div class="row" style="margin: 0 !important;">
		<div class="col-md-12">
			<?php
			$args = array( 'post_type' => 'events', 'post_per_page' => 20 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			?>

			<div class="row" style=" margin: 50px 0;">
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="col-md-4">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>">
							<div class="eventsThumbnail" style="background: url('<?php the_post_thumbnail_url(); ?>')"></div>
						</a>
					</div>
				<?php endif; ?>

				<div class="col-md-8">
					<h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>">
						<?php the_title_attribute(); ?>
					</a></h3>

					<div>
						<p><?php the_excerpt(__('(more?^??)')); ?></p>
					</div>

					<a class="read-more" href="<?php  the_permalink() ?>">Read More <i class="fa fa-play" aria-hidden="true"></i></a>
				</div>

			</div>
			
			




			<?php
			endwhile;


			?>
			
		</div>
		
	</div>
</div>



<?php get_footer(); ?>