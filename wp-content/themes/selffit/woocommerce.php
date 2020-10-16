<?php
  get_header();
  ?>
<div class="row storePage">
  <div class="col-md-3 <?php //if ($_SERVER['REQUEST_URI'] == '/product' ){ echo 'd-none';}?> px-3 widget" >
    <?php echo get_sidebar()?>
  </div>
  <div class="col-md-9 prodcutsCustom " style="padding:0;margin:0;">
  <?php
woocommerce_content();
// print_r($_SERVER['REQUEST_URI']);
?>
  </div>
  
</div>

<?php 
require_once('Partials/rellinks.php');
get_footer();