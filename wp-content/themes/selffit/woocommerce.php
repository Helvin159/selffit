<?php
  get_header();
  ?>
<!-- Banner -->
<div class="fluid-container hero" style="background: linear-gradient(90deg, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 1), rgba(0, 0, 0, 0.8)), url(<?php echo get_theme_file_uri('Assets/img/5.JPG') ?>);background-size:cover;background-position:center;height:40vh; width:100vw;">
	<div class="container text-center p-5"> 
			<h1 class="display-1 mt-4">Tienda</h1>
			<hr class="bannerHr">
	</div>
</div>
<div class="row storePage">
  <div class="col-md-3 d-none d-sm-block  px-3 widget" >
    <?php echo get_sidebar()?>
  </div>
  <div class="col-md-9 col-sm-12 prodcutsCustom " style="padding:0;margin:0;">
  <?php
woocommerce_content();
?>
  </div>
  
</div>

<?php 
require_once('Partials/rellinks.php');
get_footer();