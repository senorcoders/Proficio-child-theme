<?php include('header-simple.php'); ?>

		<div class="container" style="padding: 100px 0;">
		<div class="row">
			<div class="col-md-6" style="padding-top: 10%;">
				<header class="page-header">
				<h1 class="page-title"><?php _e( 'Ooops! Page not found', 'wpsites' ); ?></h1>
			</header>

			<div class="page-content">
				<h2><a href="<?php echo get_site_url(); ?>">Return home?</a></h2>
				<?php get_search_form(); ?>

			</div><!-- .page-content -->
			</div>

			<div class="col-md-6">
				<img src="/wp-content/uploads/2017/05/404.png" alt="" class="img-responsive">
			</div>

			
		</div>
	</div>

<?php get_footer(); ?>