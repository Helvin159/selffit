<?php

  // echo phpinfo();

// Start Session
session_start();
// session_destroy();


require_once("php/CreateDb.php");
require_once("php/component.php");


// create instance of CreateDb Class
// $database = new CreateDb("Selffit", "Producttb");
$database = new CreateDb("mrrymer", "Producttb");


if(isset($_POST['add'])){
  // print_r($_POST['product_id']);
  if(isset($_SESSION['cart'])){
    
    $item_array_id = array_column($_SESSION['cart'], "product_id");

      if(in_array($_POST['product_id'], $item_array_id)){
        echo "<script>alert('Product is already in the cart.')</script>";
        echo "<script>window.location = 'index.php'</script>";
      } else{
        $count = count($_SESSION['cart']);
        $item_array = array(
          'product_id' => $_POST['product_id']
        );
        $_SESSION['cart'][$count] = $item_array;

      }

      // print_r($_SESSION['cart']);

  }else{
    $item_array = array(
      'product_id' => $_POST['product_id']
    );
    // Create New Session Variable

    $_SESSION['cart'][0] = $item_array;
    // print_r($_SESSION['cart']);
  }
};




  if(isset($_POST['remove'])){
    if($_GET['action'] == 'remove'){
      foreach($_SESSION['cart'] as $key => $val){
        if($val['product_id'] == $_GET['id']){
          unset($_SESSION['cart'][$key]);
          echo "<script>alert('Product Removed')</script>";
          echo "<script>window.location = 'cart.php'</scipt>";
        }
      }
    }
  }

?>

<!DOCTYPE html>
<html lang="en">

<?php
		require_once('Partials/head.php');
	?>

<body class="bg-light">
  <?php
    require_once("Partials/nav.php");
  ?>

<div class="container-fluid">
  <div class="row p-4 ">
    <div class="col-md-7">
      <div class="shopping-cart">
        <h6>My Cart</h6>
        <hr>
        <?php
        $total = 0;
        if (isset($_SESSION['cart'])){
          $product_id = array_column($_SESSION['cart'], 'product_id');

          $result = $database->getData();
          while($row = mysqli_fetch_assoc($result)){
            foreach($product_id as $id){
              if($row['id'] == $id){
                cartElement($row['product_image'], $row['product_name'], $row['product_price'], $row['id'], $row['featured']);
                $total = $total + (int)$row['product_price'];
              }
            }
          }
        }else{
          echo "<h5>Cart is Empty</h5>";
        }
        ?>


      </div>
    </div>
    <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">
      <div class="pt-4">
      <h6>PRICE DETAILS</h6>  
      <hr>
      <div class="row price-details">
        <div class="col-md-6">
          <?php
          if(isset($_SESSION['cart'])){
            $count = count($_SESSION['cart']);
            echo "<h6>Price ($count items)</h6>";
          }else{
            echo "<h6>Price (0 items)</h6>";
          }
          ?>
          <h6>Delivery Charges</h6>
          <hr>
          <h6>Amount Payable</h6>
        </div>
        <div class="col-md-6">
          <h6>$
            <?php
              echo $total;
            ?>
          </h6>
          <h6 class="text-success">
          <?php
          if ($total <= 500){
            $delivery = 350;
            echo "$350";
          }else if ($total >= 500){
            $delivery = 0;
            echo "FREE";
          }
          ?>
          </h6>
          <hr>
          <h6>$<?php
          $netTotal = $total + $delivery;
            echo $netTotal;
            echo "<input type=\"hidden\" value=\"$netTotal\" id=\"netTotal\" name=\"netTotal\">";
          ?></h6>
        </div>
        <div class="container">
          <div class="my-3" id="paypal-button-container"></div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>







<?php
		require_once('Partials/section5.php');
		require_once('Partials/section6.php');
	?>

<?php
		require_once('Partials/rellinks.php');
	?>

<?php
//		require_once('Partials/subscribe.php');
	?>
		
		

		<?php
		require_once('Partials/footer.php');
	?>

	<!-- Scripts -->
  <script
    src="https://www.paypal.com/sdk/js?client-id=AXsAofjN8ZaUuUjKR1uhb4H9ucva6U7fwQfEKrwSwr67AhK4-dvf9a3v49KWJaE2r-PJGXmcFqD37MB9"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
  </script>

  <script>
  var netTotal = document.getElementById("netTotal").value;
  console.log(netTotal);

  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: netTotal
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        alert('Transaction completed by ' + details.payer.name.given_name);
        console.log(details);
      });
    }
  }).render('#paypal-button-container');
  //This function displays Smart Payment Buttons on your web page.
</script>

		<?php
		require_once('Partials/scripts.php');
	?>


</body>

</html>
