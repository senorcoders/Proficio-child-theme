<?php
/**
* A Simple Category Template
*/

get_header();
global $wp_query;

?>



<div class="container" style="padding: 30px 0;">
    <div class="row" style="padding: 0 20px;">
        <div class="col-md-12">
          <div class="resultados" >
           <h1 class="search-title"> <?php echo $wp_query->found_posts; ?>
                        <?php _e( 'results found', 'locale' ); ?> for <?php wp_title(); ?></h1>
                        <?php
// Check if there are any posts to display
                                        if ( have_posts() ) : ?>

                                                   <ul>
                                                                <?php

                                                        // The Loop
                                                        while ( have_posts() ) : the_post(); ?>

                                                         <li>
                                                         <?php if (has_post_thumbnail()) { ?>
                                                            <div style="background: url("<?php the_post_thumbnail_url(); ?>" );"></div>
                                                        <?php } ?>
                               
                                 <h4><a href="<?php the_permalink(); ?>">
                                   <?php the_title();  ?>
                                 </a></h4>

                                 <?php echo substr(get_the_excerpt(), 0,200); ?>
                               </li>

                               <?php endwhile; ?>

                               </ul>


                                                                                                                      


                                                        <?php endif; ?>
                                                            </div>
                                                          
                                                        


                                                             </div>

    </div>
</div>

<?php get_footer(); ?>
