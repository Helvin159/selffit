<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#E9E9EA;">
  <a class="navbar-brand" href="<?php echo esc_url(site_url(''))?>">Self-Fit</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
      <?php 
						wp_nav_menu(array(
              'theme_location' => 'headerNav',
              // 'items_wrap' => false,
              'container' => false,
              'menu_class' => 'navbar-nav px-2 my-3'
						));
					?>
        <a href="<?php echo esc_url(site_url('/cart'))?>" class="cartIcon d-inline ">
          <h3 class="mt-3 cart">
            <i class="fas fa-shopping-cart px-1"></i>
          </h3>
        </a>
  </div>
</nav>