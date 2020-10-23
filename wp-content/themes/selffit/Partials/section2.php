<div class="container-fluid ads adsbg1 py-5" >
  <h1>Productos Destacados
</h1>
	<div class="row">

    <?php 
    $args = array(
      'posts_per_page' => 4,
      'post_type' => 'product',
      'meta_key' => 'featured',
      'orderby' => 'meta_value',
      'order' => 'ASC',
      'paged' => false,
      'meta_query' => array(
        array(
          'key' => 'featured_men',
          'compare' => '>=',
          'value' => 'si'
        )
      )
    );

    $showPost = new WP_Query($args);

    while( $showPost->have_posts()){
      $showPost->the_post(); ?>
      
			<div class="col-md-3 " <?php wc_product_class( '', $product ); ?>>
<div id="<?php echo get_the_ID()?>" class="container productCards homeProducts text-center ">
        <?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>
	</div>
        </div>
      
    <?php }
      ?>
        
      
    
  </div>
</div>