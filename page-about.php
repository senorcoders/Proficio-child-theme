<?php /* Template Name: About LP */ ?>
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
                        'post_parent' => 19,
                        'orderby'  => 'menu_order',
                        'order'   => 'ASC',

                    );
                    $query = new WP_Query($args);?>
                 <div id="resources-submenu" class="row objectives-box">

                   <?php while ($query->have_posts()) {
                        $query->the_post();
                        ?>
                        <div class="col-md-4 resourcesBgBox">
                        <div><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                        <?php
                            if ('' !== get_post()->post_content) {
                              echo apply_filters( 'the_content', wp_trim_words( strip_tags( $post->post_content ), 15 ) ); 

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
   

			

    
  
<?php get_footer(); ?>
