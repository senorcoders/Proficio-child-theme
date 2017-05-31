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
       
                        <?php
// Check if there are any posts to display
                                        if ( have_posts() ) : ?>

                                                   <ul>
                                                                <?php

                                                        // The Loop
                                                        while ( have_posts() ) : the_post(); ?>

                                                         <li>
                                 <h4><a href="<?php the_permalink(); ?>">
                                   <?php the_title();  ?>
                                 </a></h4>

                                 <p class="date"><?php echo the_date(); ?></p>

                                 <p> <?php echo substr(get_the_excerpt(), 0,200); ?></p>
                               </li>

                               <?php endwhile; ?>

                               </ul>

                           <?php proficio_numeric_posts_nav(); ?>




                                                        <?php endif; ?>
                                                            </div>
                                                             </div>

    </div>
</div>



<?php get_footer(); ?>
