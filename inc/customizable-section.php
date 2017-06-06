<?php 
$titan = TitanFramework::getInstance( 'proficio' );


if (is_home()) {
  $aa_checkbox_val = $titan->getOption( 'customizable_section', 47 );
  $video_url = $titan->getOption('video_option', 47);
  $description = $titan->getOption('description_section', 47);
  

}else{
  $aa_checkbox_val = $titan->getOption( 'customizable_section', get_the_ID() );
  $video_url = $titan->getOption('video_option', get_the_ID());
  $description = $titan->getOption('description_section', get_the_ID());



}

if ($video_url == '1') {
  $video_url = 'https://www.youtube.com/embed/D1cyvMyCgic?list=PLCsJ30EVdJs6YXJt8w8KGL9xNvXd6fYLn';
} elseif ($video_url == '2') {
  $video_url = 'https://www.youtube.com/embed/T6BkVOVd3m0?list=PLCsJ30EVdJs6YXJt8w8KGL9xNvXd6fYLn';
} elseif ($video_url == '3') {
  $video_url = 'https://www.youtube.com/embed/4f_7E5yJocI?list=PLCsJ30EVdJs6YXJt8w8KGL9xNvXd6fYLn';
} elseif ($video_url == '4') {
  $video_url = 'https://www.youtube.com/embed/WiIjzNiRDDg?list=PLCsJ30EVdJs6YXJt8w8KGL9xNvXd6fYLn';
} else {
  $video_url = 'https://www.youtube.com/embed/xqU-9JiCz9Y?list=PLCsJ30EVdJs6YXJt8w8KGL9xNvXd6fYLn';
}




?>	

<?php if ($aa_checkbox_val == 'video') { ?>
<div class="grayBg">
  <div class="container">
    <a  data-toggle="modal" data-target="#pre-footer-modal" class="center-play"><img src="/wp-content/uploads/2017/05/video_icon.png" alt="Resources"></a>
  </br><br>
  <blockquote><?php echo $description; ?></blockquote>
</div>
</div>




<?php
echo do_shortcode('[pre-footer-video url="'. $video_url .'"]');
}elseif ($aa_checkbox_val == 'none') {
   //NOTHING TO SHOW UP
} elseif ($aa_checkbox_val == 'quote') { 
    include('quotes.php');
}
elseif ($aa_checkbox_val == 'checklist'){ ?>

<div class="grayBg">
  <div class="container">
      <a href="#" class="center-play" data-toggle="modal" data-target="#modal-embed" data-src="1017" data-backdrop="static"><img src="/wp-content/uploads/2017/05/docs_icon.png" alt="Resources"></a>
  </br><br>
  <blockquote><?php echo $description; ?></blockquote>
</div>
</div>
<?php  
}
elseif ($aa_checkbox_val == 'ransomware') { ?>

<div class="grayBg">
  <div class="container">
      <a href="#" class="center-play" data-toggle="modal" data-target="#modal-embed" data-src="1008" data-backdrop="static"><img src="/wp-content/uploads/2017/05/docs_icon.png" alt="Resources"></a>
  </br><br>
  <blockquote><?php echo $description; ?></blockquote>
</div>
</div>

<?php } else{ ?>
  <div class="grayBg">
  <div class="container">
      <a href="#" class="center-play" data-toggle="modal" data-target="#modal-embed" data-src="1007" data-backdrop="static"><img src="/wp-content/uploads/2017/05/docs_icon.png" alt="Resources"></a>
  </br><br>
  <blockquote><?php echo $description; ?></blockquote>
</div>
</div>
<?php }

 
  echo do_shortcode('[modal-embed]');

?>