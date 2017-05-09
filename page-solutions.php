<?php /* Template Name: Solutions Pages */ ?>
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

    <div class="container" style="padding: 100px 0;">

     <div class="menu-solution">
   			 <div>
    				<h3>Managed Services</h3>
    			</div>
    		<div class="row managed-icons">
    			<div class="col-md-4">
    				<div style="margin-bottom: 15px;">
    					<img src="/wp-content/uploads/2017/05/fully-managed.png" width="150px">
    				</div>
    				<a href="#"><h5>Fully Managed Security Operations</h5></a>
    				<p>We own and operate the SIEM and 24/7 SOC for you.</p>
    			</div>
    			<div class="col-md-4">
    				<div style="margin-bottom: 15px;">
    					<img src="/wp-content/uploads/2017/05/co-managed.png" width="150px">
    				</div>
    				<a href="#"><h5>Co-managed | Hybrid</h5></a>
    				<p>You own the SIEM, we co-manage it for you and provide a 24/7 SOC.</p>
    			</div>
    			<div class="col-md-4">
    				<div style="margin-bottom: 15px;">
    					<img src="/wp-content/uploads/2017/05/custom.png" width="150px">
    				</div>
    				<a href="#"><h5>Custom solutions</h5></a>
    				<p>Create your own cybersecurity environment with our managed security services.</p>
    			</div>
    			
    		</div>
    </div>

    <div class="menu-solution">
   			 <div>
    				<h3>Solution Topics</h3>
    			</div>
    		 <?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_2' ) ); ?>

    	</div>

    	<div class="menu-solution">
    			<div>
    				<h3>Additional Services</h3>
    			</div>
    		 <?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1' ) ); ?>

    	</div>
    </div>
   

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
