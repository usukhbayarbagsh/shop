<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cart1";

// Өгөгдлийн сантай холбогдох
$conn = new mysqli($servername, $username, $password, $dbname);
// Холболтыг шалгах
if($conn)
echo 'Холбогдсон';
else 
echo 'Холбогдоогүй';


$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Манай улсын ууган их сургууль">
    <link rel="stylesheet" href="nevtrekh1.css">
   
    <title>Хөдөө аж ахуйн их сургууль</title>
</head>
<body>
    <header>
        <nav id="navbar">
            <div class="container">
            <h1 class="logo"><a href="index.html"><img src="img/logo.png" alt="зургийн тайлбар" width="300px" ></a>
            </h1>
            <ul>
                <li><a class="current" href="index.html">Сургууль</a></li>
                <li><a href="#">Хөтөлбөр</a></li>
                <li><a href="#">Багш, ажиллагсад</a></li>
                <li><a href="#">Төгсөгчид</a></li>
            </ul>
            </div>

        </nav>
    </header>
    <header>
        <nav id="menu">
            <div id="container">
            <ul>
                    <li><a class="current" href="index.html">Нүүр </a></li>
                    <li><a href="tuhai.html">Бидний тухай</a></li>
                    <li><a href="elselt.html">Элсэлт</a></li>
                    <li><a href="#">Сургалт</a></li>
                    <li><a href="#">Судалгаа, инноваци</a></li>
                    <li><a href="#">Чанарын удирдлага</a></li>
                    <li><a href="#">Хамтын ажиллагаа</a></li>
                    <li><a href="#">Сургуулийн орчин</a></li>
                    <li><a href="#">Холбоо барих</a></li> 
            </ul>
                <input type="text"  placeholder="Хайх..">
                </div>
    
        </nav>     
    </header>  
    
    <!-- Бүртгэх хэсэг -->
    <section id="container1">
        <div class="container1">
            <h1 class="label">БҮРТГҮҮЛЭХ ХЭСЭГ</h1>
            <form class="login_form" action="insert2.php" method="POST">
                 <div class="font">Овог</div>
                 <input type="text" name="productName">
                 <div class="font">Нэр</div>
                 <input type="text" name="productPrice">
                 <div class="font">Регистрийн дугаар</div>
                 <input type="text" name="productImage">
                 <div class="font">Дүүрэг</div>                
                 <input type="text" name="productType">
                
                <button type="submit">БҮРТГҮҮЛЭХ</button>
            </form>
        </div>
       
    </section>
    
 <!-- Холбоо барих хэсэг /Хөл мэдээлэл/ -->
<section id="container4">
    <div class="item2 item-5"><img src="img/logo-mb-2.png" > </div>
    <div class="item2 item-6"><h3 style="color: white;">Бүрэлдэхүүний сургуулиуд</h3> 
      
     <p><a class="holboo" href="https://muls.edu.mn">Мал эмнэлгийн сургууль</a></p>
     <p><a class="holboo" href="https://muls.edu.mn">Мал аж ахуй, биотехнологийн сургууль</a></p>
     <p><a class="holboo" href="https://muls.edu.mn">Инженер технологийн сургууль</a></p>
     <p><a class="holboo" href="https://muls.edu.mn">Агроэкологийн сургууль</a></p>
     <p><a class="holboo" href="https://muls.edu.mn">Эдийн засаг бизнесийн сургууль</a></p>
     <p><a class="holboo" href="https://muls.edu.mn">Магистр, докторын сургууль</a></p>
     <p><a class="holboo" href="https://muls.edu.mn">Агроэкологи бизнесийн сургууль</a></p>
     <p><a class="holboo" href="https://muls.edu.mn">Хөдөө аж ахуйн эдийн засаг, инноваци хөгжлийн төв</a></p>
    </div> 
    <div class="item2 item-7"><h3 style="color: white;">Холбоо барих</h3> 
      
        <p class="holboo" >&#9829; 17024 Улаанбаатар, Хан-Уул дүүрэг, Зайсан</p>
        <p class="holboo" >&phone; 976-75107777, 976-11341377</p>
        <p class="holboo" >&#x2709; info@muls.edu.mn</p>
        <p class="holboo" >&#x2709; admin@muls.edu.mn</p>
        <p><a class="holboo" href="https://www.facebook.com">&#9755; Facebook хаяг</a></p>
        <p><a class="holboo" href="https://www.youtube.com">&#9755; Youtube хаяг</a></p>
        <p><a class="holboo" href="https://www.twitter.com/">&#9755; Twitter хаяг</a></p>
        
       </div> 
</section> 
<!-- Footer хэсэг -->
<footer id="footer">
    <p class="text-center">Copyright &copy; Зохиогчийн эрхээр хамгаалагдсан 2020 он</p>
  </footer>  
</body>
</html