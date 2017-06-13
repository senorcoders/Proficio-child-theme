
<!--     <h1 class="text-center">Our Clients</h1>
 -->    <?php 

    $images = get_field('customer_logos_gallery');

    if( $images ): ?>
    <div class="customer-slide" >
  <div class="container" >
    <div class="owl-carousel owl-theme">
      <?php foreach( $images as $image ): ?>
        <div class="item">
          <div style="padding: 20px;">
           <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

         </div>
       </div>
     <?php endforeach; ?>
   </div>
   </div>
</div>
 <?php endif; ?>





<script>
  $(document).ready(function() {
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      autoplay: true,
      pagination: true, 
      autoplayTimeout: 5000,
      autoplayHoverPause: false,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: false,
          dots: true,

        },
        600: {
          items: 3,
          nav: false,
          dots: true,

        },
        1000: {
          items: 5,
          nav: false,
          loop: true,
          margin: 20,
          dots: true,
          slideBy: 5,
        }
      }
    })
  })
</script>