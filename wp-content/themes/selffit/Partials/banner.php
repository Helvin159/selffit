<div class="fluid-container hero" style="background: linear-gradient(90deg, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 1), rgba(0, 0, 0, 0.8)), url(<?php echo get_theme_file_uri('Assets/img/5.JPG') ?>);background-size:cover;background-position:center;height:40vh; width:100vw;">
	<div class="container text-center p-5">
		<?php 
		if($_SERVER['REQUEST_URI'] == '/blog/'){ ?>
			<h1 class="display-1 mt-4">Blog</h1>
			<hr class="bannerHr">
		<?php }else if($_SERVER['REQUEST_URI'] == '/shop/'){ ?>
			<h1 class="display-1 mt-4">Tienda</h1>
			<hr class="bannerHr">
		<?php }else{ ?>
			<h1 class="display-1 mt-4"><?php the_title()?></h1>
			<hr class="bannerHr">
		<?php }
		?>
	</div>
</div>