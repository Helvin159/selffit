<?php
  get_header();
  require_once('Partials/banner.php');
  ?>
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