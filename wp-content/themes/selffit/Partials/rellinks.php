<div class="container-fluid rellinks">
    <div class="row">
      <div class="col-md-6">
          <div class="container">
            <div class="container">
              <h4>Self Fit</h4>
            </div>
          </div>
          <div class="container py-3">
            <h6>Sobre Nosotros</h6>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequ. 
            
          </p>
          </div>
      </div>
    
      <div class="col-md-6 p-4">
        <div class="row">
          <div class="col-md-6">
            <h3>Related Links</h3>
            <?php 
						wp_nav_menu(array(
              'theme_location' => 'relLinksOne',
              // 'items_wrap' => false,
              'container' => false,
              'menu_class' => 'navbar-nav'
						));
					?>
            <!-- <ul style="list-style-type:none;">
              <li><a href="#">Protein Powder</a></li>
              <li><a href="#">Health Pills</a></li>
              <li><a href="#">Recipes</a></li>
              <li><a href="#">Supplements</a></li>
              <li><a href="#">Reviews</a></li>

            </ul> -->
          </div>
          <div class="col-md-6">
            <h3>Contact Us</h3>
            <div class="container">
              <p>
                <?php 
                  bloginfo('name');
                ?>
                <br>
                <a href="<?php bloginfo('url')?>">
                  <?php 
                    echo ucfirst(substr(get_bloginfo('url'), 8));
                  ?>
                </a>
                <br>
                <span>
                  <a href="mailto:<?php bloginfo('admin_url')?>">
                    <?php 
                    bloginfo('admin_email');
                    ?>
                  </a>
                </span>
                <br>
                <?php 
                  bloginfo('description');
                ?>
              </p>
              
            </div>
            <div class="container p-2">
              <ul>
                <li style="display:inline;padding:2.5%;font-size:25px;"><a href=""><i class="fab fa-facebook-f"></i></a></li>
                <li style="display:inline;padding:2.5%;font-size:25px;"><a href=""><i class="fab fa-instagram"></i></a></li>
                <li style="display:inline;padding:2.5%;font-size:25px;"><a href=""><i class="fab fa-twitter"></i></a></li>
                <li style="display:inline;padding:2.5%;font-size:25px;"><a href=""><i class="fab fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>