<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cart1";

// Өгөгдлийн сантай холбогдох
$conn = new mysqli($servername, $username, $password, $dbname);
// Холболтыг шалгах
if ($conn->connect_error) {
  die("Өгөгдлийн сантай холбогдож чадсангүй: " . $conn->connect_error);
}

// burtgel хүснэгтэнд өгөгдөл оруулах 
$sql =  "INSERT INTO products (productName, productPrice, productImage, productType) VALUES ('{$_POST['productName']}', '{$_POST['productPrice']}', '{$_POST['productImage']}', '{$_POST['productType']}')";


if ($conn->query($sql) === TRUE) {
  echo "Шинэ бичлэг нэмэгдлээ.";
} else {
  echo "Алдаа гарлаа: " . $sql . "<br>" . $conn->error;
}
//header( 'location: ../php_lesson/burtgekh.php');
 $conn->close();
?>
