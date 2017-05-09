<?php /* Template Name: Resources LP */ ?>
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

     

    <div class="menu-solution ">
   			

       <!--         <ul id="resources-submenu">
            <?php wp_list_pages('child_of=16&sort_column=menu_order&title_li=') ?>                </ul>
 -->
            <?php
                    $args = array(
                        'post_type' => 'page',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'post_parent' => 16,
                        'orderby'  => 'menu_order',
                        'order'   => 'ASC',

                    );
                    $query = new WP_Query($args);?>
                 <div id="resources-submenu" class="row">

                   <?php while ($query->have_posts()) {
                        $query->the_post();
                        ?>
                        <div class="col-md-3 resourcesBgBox">
                        <div><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                        <?php
                            if (has_excerpt(get_the_ID())) {
                                  the_excerpt();

                             }else{
                                echo "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sagittis viverra lobortis. Donec quis nibh ut ante iaculis tincidunt. </p>";
                             }?>
                             </div>
                   
                    <?php  }
                    wp_reset_postdata();
                    ?>
                </div>
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
