<div class="container-fluid productsTwo">
	<div class="row">
		<div class="col-2 text-center ">
			<img src="<?php echo get_theme_file_uri('Assets/img/1.jpg')?>" alt="" style="width:50%; border-radius:5px; box-shadow:2px 2px 8px rgba(0,0,0,0.5)">
		</div>
		<div class="col-10">
			<form class="form-inline" action="products.php" method="get">
				<input type="search" placeholder="Search" class="w-75 form-control" style="height:40px;color:#000000; box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.5);">
				<input class="btn mx-1 " type="submit" value="Search" style="background-color:#659157; color:#F9E7E7; box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.5);">
			</form>
		</div>
	</div>

	<div class="row my-5">
		<div class="col-2">
			<?php echo get_sidebar()?>
		</div>

		<div class="col-8">
			<div class="container py-3" id="">
				<div class="row">
					<div class="col-6">
						<div class="container py-3" id="">
							<ul class="nav nav-tabs">
								<li class="nav-item">
									<a class="nav-link active" href="#">Active</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Link</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Link</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-6">
						<div class="container py-3" id="">
							<div class="dropdown">
								<a class="btn btn-secondary dropdown-toggle btn-sm" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown link
								</a>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-2 text-center">
			<h1>ads</h1>
			<div class="container my-5">
				<h3>Ad 1</h3>
				<img class="img-fluid" src="<?php echo get_theme_file_uri('Assets/img/prod1.png')?>" alt="">
			</div>
			<div class="container my-5">
				<h3>Ad 2</h3>
				<img class="img-fluid" src="<?php echo get_theme_file_uri('Assets/img/prod1.png')?>" alt="">
			</div>
		</div>
	</div>
</div>