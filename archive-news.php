<?php /* Template Name: Proficio News Template */ ?>
 <?php get_header(); ?>



<div class="container" style="padding: 50px 0;">
  <div class="row" style="margin: 0 !important;">
        <div class="col-md-8">
              <h1 style="margin-bottom: 30px;">PRESS RELEASES</h1>
      <?php
       $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $args = array( 'post_type' => 'news', 'post_per_page' => 10, 'paged' => $paged );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
         ?>

       
          

          
              <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>">
                  <?php the_title_attribute(); ?>
              </a></h3>
              <h6>Published on <?php the_date(); ?></h6>

               <div>
                                <p><?php the_excerpt(__('(more?^??)')); ?></p>
                            </div>

                                <!--   <a class="read-more" href="<?php  //the_permalink() ?>">Read More <i class="fa fa-play" aria-hidden="true"></i></a> -->

      
                                    
                                 




                                    <?php
        endwhile; ?>

         <!-- pagination -->
        <div class="pagination row">
          <div class="col-md-6">
               <li><?php echo get_previous_posts_link( 'Next Page' ); ?></li>
          </div>

          <div class="col-md-6">
            <li class="pull-right"><?php echo get_next_posts_link( 'Previous Page', $loop->max_num_pages ); ?></li>
          </div>
        
               
        </div>
      
    
                        </div>

                 
                 <div class="col-md-4">
                 <h1 style="margin-bottom: 30px;">IN THE NEWS</h1>
                   <?php

                  if( have_rows('news_sidebar', 116) ):

                      while ( have_rows('news_sidebar', 116) ) : the_row(); ?>
                        
                        <a class="press-mentions" target="_blank" href="<?php the_sub_field('url') ?>">
      
                          <div class="press-mentions-img">
                            <img src="<?php the_sub_field('image_logo') ?>" class="img-responsive">
                          </div>
                                
                        <div class="press-mentions-cell">
                          <h2 class="press-mentions-title"><?php the_sub_field('title') ?></h2>
                        </div>
                          
                      </a> 
                       &nbsp;
                       <?php

                      endwhile;

                  else :

                      // no rows found

                  endif;

                  ?>
                 </div>                  
    
  </div>
</div>
  


 <?php get_footer(); ?>