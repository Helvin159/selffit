<?php 
get_header();

require_once('Partials/banner.php');
?>

<div class="container-fluid p-5 storePage">
  <div class="container py-5"> 
    <h1>
      <?php 
        the_title();
      ?>
    </h1>
  </div>

        <?php 
            the_content();
        ?>

</div>


<?php 
require_once('Partials/rellinks.php');
get_footer();
?>