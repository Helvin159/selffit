<?php 
get_header();
require_once('Partials/banner.php');
?>
<div class="row storePage">
  
  <div class="col-md-3 d-none d-sm-block <?php //if ($_SERVER['REQUEST_URI'] == '/product' ){ echo 'd-none';}?> px-3 widget" >
    <?php echo get_sidebar()?>
  </div>
  <div class="col-md-9">
    <div class="container py-5 px-2">
      <?php 
        the_content();
      ?> 
    </div>
  </div>
</div>
               

<?php 
require_once('Partials/rellinks.php');
get_footer();
?>