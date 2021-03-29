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
 $query = $DBcon->query("SELECT customerID, userName, userPassword FROM customer WHERE userName='$userName'");
 $row=$query->fetch_array();
 
 //If user exists. $count must = 1.
 $count = $query->num_rows; 
 
 //Check if password is correct or not. If match, show success page.
 if ($row['userPassword']==$userPass) {
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
<?php require('menu.php'); ?>


<center>
       <form method="post" id="login-form">
      
        <h2>НЭВТРЭХ ХЭСЭГ</h2>
        
        <hr />

        
      <?php
           if(isset($msg)) {
                 echo $msg;
           }
      ?>
        <div>
        <input style="width: 25%; height: 5%; border-radius: 5px;" type="text" class="form-control" placeholder="Хэрэглэгчийн нэрээ оруулах" name="username" required />
        <span></span>
        </div>
        

        <div>
        <input style="width: 25%; height: 5%; border-radius: 5px;" type="password" class="form-control" placeholder="Хэрэглэгчийн нууц үгээ оруулах" name="password" required />
        </div>
       
      <hr />

            <br>
            <button style="width: 25%; height: 3%" type="submit" class="btn btn-default" name="btn-login" id="btn-login">
            <span></span> &nbsp; НЭВТРЭХ
            </button> 
            
            <br>
            <br>
            <a id="signup" href="register.php" class="btn btn-default">Та бүртгүүлэхийн тулд энд дарна уу.</a>
            <br>
            <div>
            <a id="signup" href="admin1.php" class="btn btn-default">Аdmin хэсэг.</a>
            </div>

      </form>

</center>

<?php require('footer.php'); ?>