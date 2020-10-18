<div class="fluid-container hero" style="height:40vh; width:100vw;">
	<div class="container text-center p-5">
		<?php 
		if($_SERVER['REQUEST_URI'] == '/blog/'){ ?>
			<h1 class="display-1 mt-4">Blog</h1>
		<?php }else if($_SERVER['REQUEST_URI'] == '/shop/'){ ?>
			<h1 class="display-1 mt-4">Tienda</h1>
		<?php }else{ ?>
			<h1 class="display-1 mt-4"><?php the_title()?></h1>
		<?php }
		?>
	</div>
</div>