<div class="container text-center">
  <?php
    $big = 999999999;
      echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $showPost->max_num_pages,
        'prev_text' => '<i class="fas fa-arrow-circle-left"></i> Prev',
        'next_text' => 'Next <i class="fas fa-arrow-circle-right"></i>'

      )); 
      wp_reset_query();
      ?>  
  </div>