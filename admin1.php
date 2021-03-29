<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cart1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Холбогдож чадсангүй: " . $conn->connect_error);
}
echo "Холбогдсон";
	
if(isset($_POST["btn-login"]))
{
	 $username=$_POST["username"];
	$password=$_POST["password"];
	$query="(select * from admin1 where userName='$username' and userPassword='$password')";
	$result=mysqli_query($conn, $query);
	$row=mysqli_fetch_array($result);
	if($row['userName']==$username && $row['userPassword']==$password)
	{
		header("location: undaa.php");
	}
	else
	{
		$msg = "<div>
          <h3 style=\"color: red\"> &nbsp; Хэрэглэгчийн нэр эсвэл нууц үг буруу байна!</h3>
          </div>";
            // echo "<script> alert ('Хэрэглэгчийн нэр эсвэл нууц үг буруу байна'); </script>";
	}
	}
?>

<?php require('header.php'); ?>
<?php require('menu.php'); ?>


<center>
       <form method="post" id="login-form">
      
        <h2>ADMIN НЭВТРЭХ ХЭСЭГ</h2>
        
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
            
          
            </div>

      </form>

</center>

<?php require('footer.php'); ?>