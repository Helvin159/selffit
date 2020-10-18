<?php 
get_header();?>
<div class="fluid-container pb-2 hero" style="height:50vh; width:100vw;">
	<div class="container">
		
	</div>
</div>
<div class="container-fluid p-5 storePage">
  <div class="container py-5"> 
    <h1>
      <?php 
        the_title();
      ?>
    </h1>
  </div>
      <div class="container text-center m-auto p-3">
        <?php 
            the_content();
        ?>
      </div>
</div>


<?php 
require_once('Partials/rellinks.php');
get_footer();
?>