<div class="container-fluid cardrow">
  <div class="row ">
    <?php  
    

    $showPost = new WP_Query($args);
    
      while($showPost->have_posts){
        $showPost->the_post(); ?>
      <div class="col-sm-3 cards">
        <div class="container card">
          <div class="container">
            <img src="<?php echo get_theme_file_uri('Assets/img/8.JPG')?>" alt="<?php the_title()?>" style="max-width:150px; border-radius:10px;">
          </div>
          <div class="container">
            <h4>This will </h4>
          </div>
          <div class="container">
            <ul>
              <li>Loerum</li>
              <li>Ipsum</li>
              <li>Loerum</li>
            </ul>
          </div>
        </div>  
      </div>
      
      <?php }; ?> 
      

      

      <div class="col-sm-3 cards">
      <div class="container card">
        <div class="container">
          <img src="<?php echo get_theme_file_uri('Assets/img/8.JPG')?>" alt="<?php the_title()?>" style="max-width:150px; border-radius:10px;">
        </div>
        <div class="container">
          <h4>With Different</h4>
        </div>
        <div class="container">
          <ul>
            <li>Loerum</li>
            <li>Ipsum</li>
            <li>Loerum</li>
          </ul>
        </div>
        </div>
      </div>

  </div>
</div>

