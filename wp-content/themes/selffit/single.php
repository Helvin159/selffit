<?php 
get_header();
require_once('Partials/banner.php'); 
?>

<div class="container-fluid p-5">
  <div class="container py-5"> 
    <h1>
      <?php 
        the_title();
      ?>
    </h1>
  </div>
  <div class="container">
    <div class="container">
      <div class="container text-center">
        <?php the_post_thumbnail('smallSquare'); ?>
      </div>
      <div class="container theContent">
        <?php 
          the_content();
        ?>
      </div>
    </div>
    <div class="container py-5">
      <a href="<?php echo esc_url(site_url('/blog')); ?>"><i class="fas fa-arrow-circle-left"></i> Volver a las Publicaciones del Blog</a>
    </div>
  </div>
</div>


<?php 
require_once('Partials/rellinks.php');
get_footer();
?>