<?php

//Khoi Hoang - Team 3.

session_start();
include_once 'dbconnect.php';

// //If not logged in. Go back to index. Cannot see success page.
// if (!isset($_SESSION['userSession'])) {
//  header("Location: undaa.php");
// }

// //Getting user information as an array.
// $query = $DBcon->query("SELECT * FROM Customers WHERE customerID=".$_SESSION['userSession']);
// $userRow=$query->fetch_array();
// $DBcon->close();

?>

<?php require('header.php'); ?>
<?php require('menu_admin.php'); ?>

<center>
<!-- Бүртгэх хэсэг -->
<link rel="stylesheet" href="nevtrekh1.css">
<section id="container1">
        <div class="container1">
            <h1 class="label">УНДААНЫ МЭДЭЭЛЭЛ ОРУУЛАХ ХЭСЭГ</h1>
            <form class="login_form" action="insert2.php" method="POST">
                 <div class="font">Ундааны нэр</div>
                 <input type="text" name="productName">
                 <div class="font">Ундааны үнэ</div>
                 <input type="text" name="productPrice">
                 <div class="font">Ундааны зураг</div>
                 <input type="text" name="productImage">
                 <div class="font">Ундааны төрөл</div>                
                 <input type="text" name="productType">
                
                <button type="submit">МЭДЭЭЛЭЛ ОРУУЛАХ</button>
            </form>
        </div>
       
    </section>

</center>

<?php require('footer.php'); ?>