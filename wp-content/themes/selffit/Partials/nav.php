<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">Logo</a>
  </div>
</nav> -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#E9E9EA;">
  <a class="navbar-brand" href="<?php echo esc_url(site_url(''))?>">Self-Fit</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <!-- <ul class="navbar-nav"> -->
      <!-- <li class="nav-item active">
        <a class="nav-link" href="<?php echo esc_url(site_url(''))?>">Home <span class="sr-only">(current)</span></a>
      </li> -->

      <?php 
						wp_nav_menu(array(
              'theme_location' => 'headerNav',
              // 'items_wrap' => false,
              'container' => false,
              'menu_class' => 'navbar-nav'
						));
					?>
        <a href="<?php echo esc_url(site_url('/cart'))?>" class="cartIcon active d-inline ">
          <h6 class="mt-3 cart" style="font-family: 'Open Sans', sans-serif;">
            <i class="fas fa-shopping-cart"></i>
              Cart
          </h6>
        </a>
</nav>