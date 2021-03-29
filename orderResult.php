<?php

   date_default_timezone_set('America/New_York');
   session_start();
   require_once 'dbconnect.php';
   
	//Get customerID.
   $id = $_SESSION['userSession']; 
   $query = $DBcon->query("SELECT customerName, customerAddress, customerPhone, customerEmail FROM customer WHERE customerID='$id'");
   $row = $query->fetch_array();
   
   $name = $row['customerName'];
   $address = $row['customerAddress'];
   $phone = $row['customerPhone'];
   $email = $row['customerEmail'];
?>

<?php require('header.php'); ?>

<?php require('menu.php'); ?>

      <?php
         echo "<p style=\"text-align: center\">Захиалга хийсэн он сар ".date('H:i, jS F Y')."</p>";
         
         echo "<p style=\"text-align: center\"> Захиалагч: <b>$name</b> </p>" ;
         
         echo "<p style=\"text-align: center\"> Хүргэлтийн хаяг: <b>$address</b></p>" ;
         
         echo "<p style=\"text-align: center\"> Утасны дугаар: <b>$phone</b> </p>" ;
         
         echo "<p style=\"text-align: center\"> Email хаяг: <b>$email</b> </p>" ;

         
         
         echo "<p style=\"text-align: center\"><h1 style=\"color: black;\"> Таны захиалсан бараа: </h1></p>";
      
      $total = 0;   
      
		
		//If cart is not empty. Display item.
      if(!empty($_SESSION["cart"]))
      {
         
         foreach($_SESSION["cart"] as $keys => $values)
         {
            echo '<center>';
            echo '<br>';
            echo '<p> Захиалсан барааны нэр: <b>'. $values["item_name"]. '</b></p>'; 
            echo '<p> Захиалсан барааны төрөл: <b>'. $values["item_type"]. '</b></p>'; 
            echo '<p> Тоо хэмжээ: <b>'. $values["item_quantity"]. '</b></p>';
            echo '<p> Үнэ: <b>'. $values["product_price"]. '</b></p>';
            echo '<br>';
            echo '</center>';
            
			$total = $total + ($values["item_quantity"] * $values["product_price"]);
		}
		
	}

      ?>
      
      
    

	<center>
	<div>
		<p><u>Захиалгын дүн:</u>₮ <?php echo number_format($total,2); ?> </p>
		<p><u>НӨАТ: </u>₮ <?php echo number_format($total*0.1,2); ?> </p>
		<h3><u>Нийт дүн: </u>₮ <?php echo number_format($total*1.1,2); ?> </h3>
		<br>
      <!-- <h2 style="color: red">Thank you for ordering at Sonic Tech Store!</h2>
      <h2><a id="continue" href="product.php"> Click here to continue shopping</a></h2> -->
      
	</div>
	</center>
   


<?php
 //Clear the cart after checked out.

 unset($_SESSION['cart']);

?>
<center>
<div>
      <h2 style="color: red">Манайд захиалга өгсөн танд баярлалаа.</h2>
      <h2><a id="continue" href="product.php"> Дахин захиалга хийх бол энд дарна уу. Баярлалаа</a></h2>
      
	</div>
	</center>
   <div>
<?php require('footer.php'); ?>
</div>