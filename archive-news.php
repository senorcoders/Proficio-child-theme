<?php /* Template Name: Proficio News Template */ ?>
 <?php get_header(); ?>



<div class="container" style="padding: 50px 0;">
  <div class="row" style="margin: 0 !important;">
        <div class="col-md-8">
              <h1 style="margin-bottom: 30px;">PRESS RELEASES</h1>
      <?php
        $args = array( 'post_type' => 'news', 'post_per_page' => 10 );
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

                                  <a class="read-more" href="<?php  the_permalink() ?>">Read More <i class="fa fa-play" aria-hidden="true"></i></a>

      
                                    
                                 




                                    <?php
        endwhile;


      ?>
                        </div>

                 
                 <div class="col-md-4">
                 <h1 style="margin-bottom: 30px;">IN THE NEWS</h1>
                   <?php if ( is_active_sidebar( 'news_sidebar' ) ) : ?>
                      <?php dynamic_sidebar( 'news_sidebar' ); ?>
                  <?php endif; ?>
                 </div>                  
    
  </div>
</div>
  


 <?php get_footer(); ?>