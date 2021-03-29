
<?php

//Khoi Hoang - Team 3.

session_start();
include_once 'dbconnect.php';
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "cart1";

//$conn = new mysqli($servername, $username, $password, $dbname);
//If not logged in. Go back to index. Cannot see success page.
if (!isset($_SESSION['userSession'])) {
     header("Location: index.php");
  
 }

//Getting user information as an array.
$query = $DBcon->query("SELECT * FROM customer WHERE customerID=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();

?>

<?php require('header.php'); ?>
<?php require('menu.php'); ?>


<h1 style="color: black; text-align: center;">Та амжилттай нэвтэрч орлоо.</h1>


     
        
             <li style="list-style-type: none; float: none;"><a id="username" href="#"><span></span>Сайн байна уу. Эрхэм хэрэглэгч <font color=red> <?php echo $userRow['customerName']; ?> </font> та тавтай морил.<span></span></a></li> <br> <br>
             <li style="list-style-type: none; float: none;"><a id="logout" href="logout.php?logout"><span></span>&nbsp;Гарах</a></li>
       


<h3 style="text-align: center; text-decoration: none;"><a id="order" href="checkout.php"> Та захиалсан бараагаа энд дарж үзнэ үү.</a></h3>

<?php require('footer.php'); ?>