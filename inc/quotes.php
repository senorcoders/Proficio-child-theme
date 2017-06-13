<div id="quotesCarousel" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="container">

<!--    <h1 style="text-align: center; margin-bottom: 30px;">Client Testimonials</h1>
 -->   <div class="carousel-inner" role="listbox">

    <?php
    $args = array( 'post_type' => 'quotes', 'post_per_page' => -1 );
    $loop = new WP_Query( $args );
        $z = 0;

    while ( $loop->have_posts() ) : $loop->the_post();

    ?>

    <div class="carousel-item <?php if ($z==0) { echo 'active';} ?>">
      <?php the_field('quote_text'); ?>
      <div style="text-align: center;" class="footer-testimonial">
        <cite class="h-card">
        <span class="p-job-title"><?php the_field('customer_name'); ?></span> | <span class="p-org"><?php the_field('customer_charge'); ?></span>
        </cite>
      </div>
    </div>
    

    <?php
    $z++;

    endwhile;


    ?>
  </div>
  <a class="carousel-control-prev" href="#quotesCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"> <i class="fa fa-angle-left" aria-hidden="true"></i>
</span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#quotesCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true">
      <i class="fa fa-angle-right" aria-hidden="true"></i>
    </span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>




