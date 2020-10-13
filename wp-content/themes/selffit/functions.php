<?php 

// Files
function selffit_files(){
    // Font Awesome
    wp_enqueue_style('font_awesome', '//use.fontawesome.com/releases/v5.14.0/css/all.css', null, '1.0', 'all');
    // Google Fonts
    wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css?family=Quicksand|Sedgwick+Ave+Display&display=swap', null, '1.0', 'all');
    // Bootstrap
    wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', null, '1.0', 'all');
    

    if(strstr($_SERVER['SERVER_NAME'], 'self-fit.local')){
      // Bundled Files
      wp_enqueue_script('main-selffit-scripts', 'http://localhost:3000/bundled.js', NULL, '1.0', true);// CSS
      wp_enqueue_style('my-style', get_theme_file_uri('/Css/style.css'), null, '1.0', 'all');
    } else{
  
        wp_enqueue_style('my-style', get_theme_file_uri('/Css/style.css'), null, '1.0', 'all');
      
        // CSS
        // wp_enqueue_style('my-style', get_theme_file_uri('/bundled-assets/undefined'), null, '1.0', 'all');
        wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/vendors~scripts.2dcf84883bb6263fa190.js'), NULL, '1.0', true);
        wp_enqueue_script('main-selffit-scripts', get_theme_file_uri('/bundled-assets/scripts.574d146c1ccc50cc6bf5.js'), NULL, '1.0', true);
      }



  // Jquery
  wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.5.1.slim.min.js', NULL, '1.0', true);
  // Popper
  wp_enqueue_script('popper', '//cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', NULL, '1.0', true);
  // Bootstrap JS
  wp_enqueue_script('bootsrap', '//stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'selffit_files');

// Features
function selffit_features(){
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  register_nav_menu('headerNav', 'Header');
  register_nav_menu('relLinksOne', 'Related Links 1');

}

add_action('after_setup_theme', 'selffit_features');



function mytheme_add_woocommerce_support() {
  add_theme_support( 'woocommerce', array(
      'thumbnail_image_width' => 150,
      'single_image_width'    => 300,

      'product_grid'          => array(
          'default_rows'    => 3,
          'min_rows'        => 2,
          'max_rows'        => 8,
          'default_columns' => 3,
          'min_columns'     => 2,
          'max_columns'     => 5,
      ),
  ) );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_shop_loop_item_title', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_shop_loop_item_title', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
    echo '<div class="container my-3 text-center">';
}

function my_theme_wrapper_end() {
    echo '</div>';
}



// Add Support
add_theme_support('post_thumbnails');


// Admin Bar
add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
  if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
  }
}

// Image Sizes
add_image_size('post_image', 1100, 750, true);
add_image_size('smallSquare', 500, 500, true);
add_image_size('blogSquare', 300, 300, true);



// Add Widgets
register_sidebar(
  array(
    'name' => 'Side Bar',
    'id' => 'side-bar',
    'class' => 'sideBar',
    'before_title' => '<h6>',
    'after_title' => '</h6>'
  )
  );
  
  register_sidebar(
  array(
    'name' => 'Blog Bar',
    'id' => 'blog-bar',
    'class' => 'blogSidebar',
    'before_title' => '<h6>',
    'after_title' => '</h6>'
  )
  );
  
  register_sidebar(
  array(
    'name' => 'Price Bar',
    'id' => 'price-bar',
    'class' => 'sideBar',
    'before_title' => '<h6>',
    'after_title' => '</h6>'
  )
  );

  // Filters
  remove_action( 'woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title', 10 );
  add_action('woocommerce_shop_loop_item_title', 'abChangeProductsTitle', 10 );
  function abChangeProductsTitle() {
      echo '
      <div class="container">
        <h4 class="woocommerce-loop-product_title">
          <a href="'.get_the_permalink().'">' . strtoupper(get_the_title()) . '
          </a>
        </h4>
        <p style="color:red">'. get_field('what_this_is').'</p>
          <div class="container">
            <ul style="list-style-type:none;margin:0;padding:0;text-align:left;">
              <li style="margin:0;padding:0;">Tipo: '. get_field('type').'</li>
              <li style="margin:0;padding:0;">Peso: '. get_field('weight').'</li>
              <li style="margin:0;padding:0;">Destacado: '. get_field('featured').'</li>
            </ul>
          </div>
        </div>';
  }

  // add_filter( 'woocommerce_enqueue_styles', '__return_false' );
