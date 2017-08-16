<?php /* Template Name: Homepage */ ?>

<?php include('header-video.php'); ?>
<?php
  $titan = TitanFramework::getInstance( 'proficio' );


?>

    <div  style="padding-top: 100px;">
      <div id="carot-position" class="first-row">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3 style="text-align: center;"></h3>
              <h1 style="text-align: center;"><?php the_field('fp_main_title'); ?></h1>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <?php the_field('fp_content'); ?>

            </div>
          </div>
        </div>
      </div>
        <?php echo do_shortcode('[customer-logos]'); ?>

        <hr />

      <div class="first-row flip-left">
        <div class="container">
          <div class="row">
            <div class="col-md-7 offset-md-5">
              <h1><?php the_field('tp_title'); ?></h1>
            </div>
          </div>
        <div class="row">
          <div class="col-md-7 offset-md-5">

            <?php the_field('tp_content'); ?>

            <a class="btn btn-primary btn-xl" href="<?php the_field('tp_link_button'); ?>"><?php the_field('tp_text_button'); ?></a>

          </div>
        </div>
      </div>
    </div>
      <?php //echo do_shortcode('[quotes-slider]'); ?>
      <br>  
      <div class="container client-container-success">
    
    <div class="row">
        <div class="col-md-6" style="padding: 3% 15px;">
            <h5>Castlight Health</h5>
            <blockquote>
                <i class="fa fa-quote-left" aria-hidden="true"></i> Castlight measures the value of Proficio’s services by the quality and depth of the alerts that we receive, the technical support that accompanies those alerts, as well as the responsiveness of each of the analysts. <i class="fa fa-quote-right" aria-hidden="true"></i>
            </blockquote>
            <p class="charge-client-success"><strong>Andrew Van Wormer | Manager, Security Operations <br> Castlight Health</strong></p>
<p><a style="cursor: pointer; font-size: 14px;" class="btn btn-primary btn-xl" data-toggle="modal" data-target="#castlight-modal">Watch Andrew's Story</a></p>
        </div>
        <div class="col-md-6">
            <a class="video-success-link" data-toggle="modal" data-target="#castlight-modal">
                <div class="video-success">
                    <div class="play-success-video">
                        <span> <svg width="10" height="14" viewBox="0 0 10 14" xmlns="http://www.w3.org/2000/svg"><path d="M1.522.088C1.394.015 1.23 0 1.092 0 .888 0 .7.053.53.158.236.35.03.665.013 1.015c-.017.105-.017 11.866 0 11.988.017.35.223.665.515.84.17.105.376.157.565.157.155 0 .3-.015.43-.087C6.528 10.95 9.45 7.98 9.623 7.84c.24-.21.376-.525.376-.84 0-.314-.138-.63-.378-.822-.172-.157-2.927-2.948-8.1-6.09z" fill="#FFF" fill-rule="evenodd"></path></svg></span>
                    </div>
                    <div class="client-succes-logo">
                        <img src="/wp-content/uploads/2017/05/castlight-logo.png" alt="">
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>    
      <hr />

    <div class="first-row flip-right">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <h1><?php the_field('sp_title'); ?></h1>
          </div>
        </div>
      <div class="row">
        <div class="col-md-7">

          <?php the_field('sp_content'); ?>

          <a class="btn btn-primary btn-xl" href="<?php the_field('sp_link_button'); ?>"><?php the_field('sp_text_button'); ?></a>

        </div>
      </div>
    </div>
  </div>
  <?php/* <div class="grayBg">
    <div class="container">
      <h1><?php the_field('svp_title'); ?></h1>
      <blockquote><?php the_field('svp_content'); ?></blockquote>
      <a class="btn btn-primary btn-xl" href="#" data-toggle="modal" data-target="#modal-embed" data-src="1017" data-backdrop="static"><?php the_field('svp_text_button'); ?></a>
    </div>
  </div> */ ?>
<div class="how-proficio-can-help">
  <div class="first-row flip-left">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-5">
                <h1 style="font-size: 2.5rem !important;">Register for Our Splunk Services Webinar</h1>
                  <p>Join our CEO Brad Taylor and VP of Product Management Ken Adamson on August 23 for a free and informative webinar about how partnering with Proficio for monitoring and management of your Splunk instance can help you maximize your Splunk results.</p>
                <p><a class="btn btn-primary btn-xl" href="/about/cybersecurity-industry-events/splunk-webinar-registration/">Register today!</a></p>
            </div>
        </div>
    </div>
</div>
</div>

  <div class="first-row flip-right">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <h1><?php the_field('ep_title'); ?></h1>
        </div>
      </div>
    <div class="row">
      <div class="col-md-7">
        <?php the_field('ep_content'); ?>
        <a class="btn btn-primary btn-xl" href="<?php the_field('ep_link_button'); ?>"><?php the_field('ep_text_button'); ?></a>

      </div>
    </div>
  </div>
</div>

    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>



    <div>

    <?php //the_content(); ?>
    </div>




    <?php endwhile; ?>
    <?php else : ?>
    <h6 class="center">Not Found</h6>
    <p class="center">Sorry, but you are looking for something that isn't here.</p>
    <?php endif; ?>
  </div>  
</div>


<div class="modal fade" tabindex="-1" role="dialog" id="castlight-modal">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body"> 
                <iframe width="100%" height="400" src="https://www.youtube.com/embed/Q1hOLO44axw" frameborder="0" allowfullscreen></iframe>
              </div>

            </div>
          </div>
        </div>


<?php get_footer(); ?>
