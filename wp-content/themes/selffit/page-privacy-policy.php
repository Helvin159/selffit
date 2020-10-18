<?php
  get_header();
  ?>  
<div class="container-fluid storePage">
  <div class="container py-2">
    <h1 class="py-3 px5"><?php the_title()?></h1>
  </div>

  <div class="container py-2 px-5">
  <?php 
    the_content();
  ?>
  </div>
  
</div>

<?php 
require_once('Partials/rellinks.php');
get_footer();