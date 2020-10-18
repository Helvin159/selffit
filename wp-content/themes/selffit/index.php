<?php 
get_header();
require_once('Partials/banner.php');
?>

<div class="container-fluid py-5 storePage">
<?php
$showPost = new WP_Query(have_posts());

while($showPost->have_posts()){
  $showPost->the_post(); ?>
  <div class="container my-5">
    <div class="row">
      <div class="col-md-4 blogPost">
        <img class="img-fluid" alt="<?php the_title()?>" src="<?php the_post_thumbnail_url('blogSquare')?>" alt="" >
      </div>
      <div class="col-md-8 blogContent">
        <div class="container p-2">
          <h3 class="py-3"><a  href="<?php the_permalink()?>"><?php the_title()?></a></h3>
          <div class="container">
            <?php echo substr(get_the_excerpt(),0,425);?>
            <br>
            <div class="container my-1">
              <a href="<?php the_permalink()?>"> Ver Entrada Completa <i class="fas fa-long-arrow-alt-right"></i></a>              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } 
require_once('Partials/pagination.php');
?>
</div>

<?php 
require_once('Partials/rellinks.php');
get_footer();
?>