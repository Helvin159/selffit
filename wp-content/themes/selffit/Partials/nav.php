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
              'menu_class' => 'navbar-nav mx-3 my-3'
            ));
            ?>
  </div>
  
</nav>