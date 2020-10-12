<?php
  get_header();
  ?>
<div class="row mt-5">
  <div class="col-md-2 px-3 widget" >
    <?php echo get_sidebar()?>
  </div>
  <div class="col-md-10 prodcutsCustom px-2">
  <?php
woocommerce_content();?>
  </div>
  
</div>

<?php 
require_once('Partials/rellinks.php');
get_footer();