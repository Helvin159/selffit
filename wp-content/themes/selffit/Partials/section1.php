<div class="container-fluid topcategories">
	<h1 class="py-5 text-center">DESTACADO PARA <span style="color:#009CCC;">HOMBRES</span></h1>
  <div class="container">
	  <div class="row thumbs">
    
    <?php 
    $showCustomPost = new WP_Query(
      array(
        'posts_per_page' => 1,
        'post_type' => 'product',
        'paged' => false,
        'meta_key' => 'featured_men',
        'orderby' => 'date',
        'order' => 'ASC',
        'paged' => false,
        'meta_query' => array(
          array( 
          'key' => 'featured_men',
          'compare' => '>=',
          'value' => 'si'
        )
      )

      )
    );

    while($showCustomPost->have_posts()){
      $showCustomPost->the_post(); 
      ?>
      <div class="col-md-6">
        <img  class="img-fluid p-3" src="<?php the_post_thumbnail_url()?>" style=" max-width:400px" >
      </div>
      <div class="col-md-6">
        <div class="container">
          <h5 class="mfeatured">Producto Destacado</h5>
          <h3><?php echo strtoupper( get_the_title() );?></h3>
          <div class="container">
            <h6>Descripción:</h6> 
            <?php the_content();?>
          </div>
          <div class="container py-3">
          <ul style="list-style-type:none;margin:0;padding:0;">
            <li>Peso: <?php echo get_field('weight');?></li>
            <li>Tipo: <?php echo get_field('type');?> </li>
          </ul>
          </div>
          <?php 
            global $product;
            if ( $price_html = $product->get_price_html() ) { ?>
              
              <div class="container price text-center">
                <h2><?php echo $price_html; ?></h2>
                <a  href="<?php the_permalink()?>" class="btn btn-md" style="background-color:#188C48;color:white;" name="add">
                  Ver Detalles Del Producto
                </a>
              </div>
          
            <?php } ?>
        </div>
      </div>
<?php }
    ?>  
    </div>
  </div>
</div>
