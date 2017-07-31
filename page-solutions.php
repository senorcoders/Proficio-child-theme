<?php /* Template Name: Solutions Pages */ ?>
<?php get_header(); ?>

<?php 
  $titan = TitanFramework::getInstance( 'proficio' );
  
  
?>	

<div style="padding: 70px 0">
<div class="container">
    <h1 style="text-align: center; color: #00fef8; text-transform: initial;"><?php the_field('main_title'); ?></h1>
    <div style="text-align: center;"><?php the_field('main_subtitle'); ?></div>

    <?php

if( have_rows('solutions_logos') ): ?>
    <div class="main-solutions-page-icons">
        <div class="row">

  <?php  while ( have_rows('solutions_logos') ) : the_row(); ?>
            <div class="col-md-4">
                <div><img style="max-width: 100%;" src="<?php the_sub_field('logo_image'); ?>" /></div>
                <a href="<?php the_sub_field('logo_url'); ?>"><h3 class="main-solutions-h3"><?php the_sub_field('logo_title'); ?></h3></a>
                <div style="line-height: 20px;"><?php the_sub_field('logo_description'); ?></div>
            </div>

   <?php endwhile; ?>

    </div>
    </div>

<?php else : ?>


<?php endif; ?>

    
           
       
                <p><?php the_field('solutions_content'); ?></p>
            &nbsp;
            </div>
            <hr>

<?php 

                if( have_rows('additional_services_list') ): ?>
                    <div class="container">
                    &nbsp;
                        <div class="row industry-solutions-icons">


                    <?php 

                    while( have_rows('additional_services_list') ): the_row(); ?>

                     <div class="col">
                        <div><img src="<?php the_sub_field('service_logo'); ?>" alt="Incident Response" /></div>
                        <h3><?php the_sub_field('service_name'); ?></h3>

                           <?php if( have_rows('service_items') ): ?>
                                <ul class="list-subicon-item">
                                <?php 

                                while( have_rows('service_items') ): the_row();

                                    ?>
                                   <li><a href="<?php the_sub_field('item_url'); ?>">
                                       <?php the_sub_field('item_name'); ?>
                                   </a></li>
                                <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>

                
                    </div>

                       

                    <?php endwhile;  ?>
                        </div>
                    </div>
                <?php endif;  ?>

            <hr /> 
            &nbsp;
            <h3 style="text-align: center; color: #00fef8; text-transform: initial;"><?php the_field('solution_topics_title'); ?></h3> 
            <div class="container">

            <?php echo do_shortcode('[maxmegamenu location=max_mega_menu_2]'); ?>
            </div>


            </div>

   

			

    
  
<?php get_footer(); ?>
