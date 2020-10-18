<?php 
    if($_SERVER['REQUEST_URI'] != '/categories/'){ ?>
        <div class="container my-5"><?php dynamic_sidebar('side-bar'); ?></div>
    <?php }
?>
<div class="container my-5"><?php dynamic_sidebar('price-bar'); ?></div>
<div class="container my-5"><?php dynamic_sidebar('blog-bar'); ?></div>
<div class="container my-5"><?php dynamic_sidebar('tags-bar'); ?></div>
<div class="container my-5"><?php dynamic_sidebar('revently-viewed-bar'); ?></div>
