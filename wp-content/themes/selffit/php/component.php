<?php
  function component($productname, $productprice, $productimg, $productid){
    $element = "
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
      <form action=\"index.php\" method=\"post\">
        <div class=\"card shadow\">
          <div>
            <img class=\"img-fluid card-img-top\" src=\"$productimg\" alt=\"Image1\">
          </div>
          <div class=\"card-body\">
            <h5 class=\"card-title\">$productname</h5>
            <h6>
            <i class=\"fas fa-star\"></i>
            <i class=\"fas fa-star\"></i>
            <i class=\"fas fa-star\"></i>
            <i class=\"fas fa-star\"></i>
            <i class=\"far fa-star\"></i>
            </h6>
            <p class=\"card-text\">
            Some text
            </p>
            <h5>
              <small><s class=\"text-secondary\">$619</s></small>
              <span class=\"price\">$$productprice</span>
            </h5>
            <button class=\"btn btn-warning my-3\" type=\"submit\" name=\"add\">Add to Card <i class=\"fas fa-shopping-cart\"></i></button>
            <input type='hidden' name='product_id' value='$productid'>
          </div>
        </div>
      </form>
    </div>
    ";
    echo $element;
  };

  function menFeatured($productname, $productdecript, $productweight, $tablets, $productprice, $productimg, $productid){
    $element = "
    <div class=\"col-sm-6\">
    
    <img src=\"$productimg\" style=\"width: 300px;\" >
    </div>
    <div class=\"col-sm-6\">
    <h4 class=\"mfeatured\">Featured Product</h4>
    <h3>$productname</h3>
    <h6>$productdecript</h6>
    <ul style=\"list-style-type:none;\">
    <li>Weight: $productweight</li>
    <li>$tablets</li>
    <li>Product ID: $productid</li>
    </ul>
    <!-- <h6>$200.00</h6> -->
    <h2>$$productprice</h2>
    <form action=\"index.php\" method=\"post\">
    <button class=\"btn btn-lg\" style=\"background-color:#188C48;color:white;\" type=\"submit\" name=\"add\">
      ADD TO CART
    </button>
    <input type='hidden' name='product_id' value='$productid'>
    </form>
    </div>
    ";
    echo $element;
  }
  
  function womanFeatured($productname, $productdecript, $productweight, $tablets, $productprice, $productimg, $productid){
    $element = "
    <div class=\"col-sm-6\">
    <img src=\"$productimg\" style=\"width: 300px;\" >
    </div>
    <div class=\"col-sm-6\">
    <h4 class=\"wfeatured\">Featured Product</h4>
    <h3>$productname</h3>
    <h6>$productdecript</h6>
    <ul style=\"list-style-type:none;\">
    <li>Weight: $productweight</li>
    <li>$tablets</li>
    <li>Product ID: $productid</li>
    </ul>
    <!-- <h6>$200.00</h6> -->
    <h2>$$productprice</h2>
    <form action=\"index.php\" method=\"post\">
    <button class=\"btn btn-lg\" style=\"background-color:#188C48;color:white;\" type=\"submit\" name=\"add\">
      ADD TO CART
    </button>
    <input type='hidden' name='product_id' value='$productid'>
    </form>
    </div>
    ";
    echo $element;
  }
  
  function ads($productname, $productdecript, $productweight, $tablets, $productprice, $productimg, $productid){
    $element = "
    <div class=\"col-sm-4 p-4\">
    <form action=\"index.php\" method=\"post\">
        <div class=\"container adsbg3\">
          <div class=\"container p-3\">
					<img class=\"img-fluid\" src=\"$productimg\" alt=\"\">
          </div>
          <hr>
          <div class=\"container p-3\">
						<h5>$productname</h5>
            <h6>$productdecript</h6>
            <div class=\"container\">
              <p>Weight: $productweight</p>
              <p>$tablets</p>
              <p>Product ID: $productid</p>
            </div>
						<h5>$$productprice</h5>
						<button class=\"btn btn-md\" style=\"background-color:#188C48;color:white;\" type=\"submit\" name=\"add\">
      ADD TO CART
    </button>
    <input type='hidden' name='product_id' value='$productid'>
					</div>
        </div>
        </form>
			</div>
    ";
    echo $element;
  }

  function cartElement($productimg,$productname, $productprice, $productid, $featured){    
    $element = "<form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
    <div class=\"border rounded\">
      <div class=\"row bg-white\">
        <div class=\"col-md-3 pl-0\">
          <img src=$productimg alt=\"Image 1\" class=\"img-fluid\">
        </div>
        <div class=\"col-md-6\">
          <h5 class=\"pt-2\">$productname</h5>
          <small class=\"text-secondary\">Seller: DailyTuition</small>
          <h5 class=\"pt-2\">
            $$productprice
          </h5>
          <button class=\"btn btn-warning\" type=\"submit\" >
            Save for Later
          </button>
          <button class=\"btn btn-danger mx-2\" type=\"submit\" name=\"remove\">
            Remove
          </button>
        </div>
        <div class=\"col-md-3 py-5\">
          <div>
            <button type=\"button\" class=\"btn bg-light border rounded-circle\">
              <i class=\"fas fa-minus\"></i>
            </button>            
            <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">      
            <button type=\"button\" class=\"btn bg-light border rounded-circle\">
              <i class=\"fas fa-plus\"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    </form>";
    
    if($featured == true){
      echo $element;
    } 
  }


function details($productname, $productdecript, $productweight, $tablets, $productprice, $productimg, $productid){
  $element = "
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-6\">
        <div class=\"container\">
          <img src=\"$productimg\" alt=\"\" class=\"img-fluid\">
        </div>
      </div>
      <div class=\"col-md-6 p-5\">
        <div class=\"container p-5 text-center\">
          <h3>$productname | Sub-Title</h3>
            <div class=\"container text-left py-3\">
              <p>
                $productdecript
              </p>
              <h4 class=\"py-3\">Price:</h4>
              <h5 class=\"py-3\">$productprice</h5>
              <form action=\"productpg.php\" method=\"post\">
                <button class=\"btn btn-md\" style=\"background-color:#188C48;color:white;\" type=\"submit\" name=\"add\">ADD TO CART
                </button>
                <input type=\"hidden\" name=\"product_id\" value=\"$productid\">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  <div class=\"container-fluid\">
    <div class=\"container p-5\">
      <h1 class=\"py-3\">Overview</h1>
      <p>
        $productdecript
          <br>
          <br>
        $productdecript
          <br>
          <br>
        $productdecript
          <br>
      </p>
    </div>
  </div>";

  echo $element;
}




?>

<?php

function paginatedProducts(){

  // connect to database
  $con = mysqli_connect('localhost','root','root', 'Selffit');
  // $con = mysqli_connect('localhost','helvin','dora0411','mrrymer');

  // define how many results you want per page
  $results_per_page = 9;

  // find out the number of results stored in database
  $sql= "select * from Producttb;";
  $result = mysqli_query($con, $sql);
  $number_of_results = mysqli_num_rows($result);

  // determine number of total pages available
  $number_of_pages = ceil($number_of_results/$results_per_page);

  // determine which page number visitor is currently on
  if (!isset($_GET['page'])) {
  $page = 1;
  } else {
  $page = $_GET['page'];
  }

  // determine the sql LIMIT starting number for the results on the displaying page
  $this_page_first_result = ($page - 1) * $results_per_page;
  // print_r($this_page_first_result);

  // retrieve selected results from database and display them on page
  $sql='SELECT * FROM Producttb LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
  $result = mysqli_query($con, $sql);




	foreach($result as $k => $v){ 
    if ($v['quantity'] != 0){
      echo '<div class="col-md-4 product" id="#products">
              
                <div class="container productCard" id="">
                  <div class="container" id="">
                    <img src="'.$v['product_image'].'" class="img-fluid" alt="" style="max-width:200px; max-height:200px;border-radius:5px; box-shadow:2px 2px 8px rgba(0,0,0,0.5)">
                  </div>
                  <div class="container">
                    <hr>
                  </div>
                  <div class="container" id="">
                    <h5>'.$v['product_name'].'</h5>
                    <h6>$'.$v['product_price'].'</h6>
                    <h6>sku:'.$v['id'].'</h6>
                    <div class="row my-5">
                      <div class="col-4">
                        <form action="productpg.php" method="get">
                          <input type="hidden" value="'.$v['id'].'" name="viewProduct">
                          <button value="Add to Cart " class="btn btn-md" type="submit" style="background-color:#659157; color:#F9E7E7; box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.5);" <!--data-toggle="modal" data-target="#exampleModal"-- >Details</button>
                          <input type="hidden" name="product_id" value="'.$v['id'].'">
                        </form>
                    </div>
                    <div class="col-8">
                      <form action="products.php" method="post">
                        <input type="hidden" value="$'.$v['id'].'" name="add">
                        <button value="Add to Cart " class="btn btn-md" type="submit" style="background-color:#659157; color:#F9E7E7; box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.5);" <!--data-toggle="modal" data-target="#exampleModal"-- >Add to Cart <i class="fas fa-shopping-cart"></i></button>
                        <input type="hidden" name="product_id" value="'.$v['id'].'">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>';
    }
      
			}
  

      mysqli_close($con);

}

function buttons(){
    // connect to database
    $con = mysqli_connect('localhost','root','root', 'Selffit');
    // $con = mysqli_connect('localhost','helvin','dora0411','mrrymer');
  
    // define how many results you want per page
    $results_per_page = 9;
  
    // find out the number of results stored in database
    $sql= "select * from Producttb;";
    $result = mysqli_query($con, $sql);
    $number_of_results = mysqli_num_rows($result);
  
    // determine number of total pages available
    $number_of_pages = ceil($number_of_results/$results_per_page);
  
    // determine which page number visitor is currently on
    if (!isset($_GET['page'])) {
    $page = 1;
    } else {
    $page = $_GET['page'];
    }
  
    // determine the sql LIMIT starting number for the results on the displaying page
    $this_page_first_result = ($page - 1) * ($results_per_page);
    // print_r($this_page_first_result);
  
    // retrieve selected results from database and display them on page
    $sql='SELECT * FROM Producttb LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
    $result = mysqli_query($con, $sql);

  // display the links to the pages
  for ($page=1;$page<=$number_of_pages;$page++) {
    echo '
    
    <a class="container btn-sm p-3 m-1 btn-dark " href="products.php?page='.$page.'?#products" style="color:#ffffff">'.$page.'</a>
          ';
  }
  mysqli_close($con);
}

?>


