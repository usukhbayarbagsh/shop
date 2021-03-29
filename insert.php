<?php // Khoi Hoang - Team 3.
      // Mazen Aljuaid

session_start();
require_once 'dbconnect.php';

//If already logged in. Show success page.
if (isset($_SESSION['userSession'])!="") {
 header("Location: success.php");
 exit;
}


//If user click button login. Get username and password.
if (isset($_POST['btn-login'])) {
 
 $userName = strip_tags($_POST['username']);
 $userPass = strip_tags($_POST['password']);
 
 $userName = $DBcon->real_escape_string($userName);
 $userPass = $DBcon->real_escape_string($userPass);
 
 
 //Getting user information by using username. Then compare password.
 $query = $DBcon->query("SELECT customerID, userName, userPassword FROM Customers WHERE userName='$userName'");
 $row=$query->fetch_array();
 
 //If user exists. $count must = 1.
 $count = $query->num_rows; 
 
 //Check if password is correct or not. If match, show success page.
 if (password_verify($userPass, $row['userPassword']) && $count==1) {
  $_SESSION['userSession'] = $row['customerID'];
  header("Location: success.php");
 }
 
 
 //If password not match, show error.
 else {
  $msg = "<div>
          <h3 style=\"color: red\"> &nbsp; Хэрэглэгчийн нэр эсвэл нууц үг буруу байна!</h3>
          </div>";
 }
 $DBcon->close();
}
?>

<?php require('header.php'); ?>
<?php require('menu_admin.php'); ?>


<center>
<<!-- Бүртгэх хэсэг -->
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