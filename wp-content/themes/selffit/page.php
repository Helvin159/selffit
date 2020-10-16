<?php
  get_header();
  ?>  
<div class="container-fluid storePage">
  
  <div class="container p-5 prodcutsCustom " style="padding:0;margin:0;">
  <?php 
    the_content();
  ?>
  </div>
  
</div>

<?php 
require_once('Partials/rellinks.php');
get_footer();