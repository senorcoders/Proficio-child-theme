get_header();
global $wp_query;
?>


<div class="container" style="padding: 100px 0;">
  <div class="row" >
    <div class="col-md-12">
      
      
      <div>
        <h1 class="search-title"> <?php echo $wp_query->found_posts; ?>
          <?php _e( 'results found', 'locale' ); ?> </h1>

          <?php if ( have_posts() ) { ?>

          <ul style="    list-style: none;
          padding: 0;
          margin-top: 30px;">

          <?php while ( have_posts() ) { the_post(); ?>

          <li style="margin: 30px 0;">
           <h3 class="blue-title left-aligned"><a href="<?php echo get_permalink(); ?>">
             <?php the_title();  ?>
           </a></h3>
           
           <?php echo substr(get_the_excerpt(), 0,200); ?>
           <div class="h-readmore"> <a href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a></div>
         </li>

         <?php } ?>

       </ul>

       <?php paginate_links(); ?>

       <?php } ?>

     </div>
     
     
   </div>

   
 </div>
</div>

<?php get_footer(); ?>