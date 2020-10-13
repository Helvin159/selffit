<div class="container-fluid reviews py-5">
  <h1>Opiniones De Los Clientes</h1>
  <div class="container">
    <div class="row">
      <?php 
        $showPost = new WP_Query(array(
          'posts_per_page' => 2,
          'post_type' => 'reviews',
          'paged' => false
        ));
        while($showPost->have_posts()){
          $showPost->the_post(); ?>
            <div class="col-md-6 p-5">
              <div class="container comments">
                <div class="container">
                  <h4><?php the_title();?></h4>
                </div>
                <div class="container">
                <p>
                  <?php the_content();?>
                </p>
              </div>
            </div>
          </div>
        <?php }


      ?>
    </div>
  </div>
</div>  