<?php /* Khoi Hoang - Team 3 */ ?>

<?php
session_start();
require_once 'dbconnect.php';
?>

<?php require('header.php'); ?>

<?php require('menu.php'); ?>


    <h2 style="text-align: center; color: blue;">Таны бараа захиалсан сагс</h2>
    <div>
    <table style="width: 100%">
    <tr>
    <th class="cart">Барааны нэр</th>
    <th class="cart">Барааны төрөл</th>
    <th class="cart">Барааны тоо, хэмжээ</th>
    <th class="cart">Барааны үнэ</th>
    <th class="cart">Нийт үнэ</th>
    <th class="cart">Барааг устгах</th>
    </tr>
    <?php
	$total = 0;
    
    //If have something in the cart. Display it.
	if(!empty($_SESSION["cart"]))
	{
	
		foreach($_SESSION["cart"] as $keys => $values)
		{
			?>
            <tr class="cart">
            <td style="background-color: #d3dcf2"><?php echo $values["item_name"]; ?></td>
            <td class="cart"> <?php echo $values["item_type"] ?></td>
            <td class="cart"><?php echo $values["item_quantity"] ?></td>
            <td class="cart">₮<?php echo $values["product_price"]; ?></td>
            <td class="cart">₮ <?php echo number_format($values["item_quantity"] * $values["product_price"], 2); ?></td>
            <td class="cart"><a id="delete" href="shop.php?action=delete&id=<?php echo $values["product_id"]; ?>"><span> X</span></a></td>
            </tr>
            <?php 
			$total = $total + ($values["item_quantity"] * $values["product_price"]);
		}
		
	}
	?>
    </table>
    </div>
	<center>
	<div>
		<p><u>Захиалгын үнэ:</u> ₮ <?php echo number_format($total,2); ?> </p>
		<p><u>НӨАТ:</u> ₮ <?php echo number_format($total*0.1,2); ?> </p>
		<h3>Нийт дүн: ₮ <?php echo number_format($total*1.1,2); ?> </h3>
		<h2><a id="checkout" href="checkout.php"> Та захиалсан бараагаа энд дарж үзнэ үү</a></h2>
	</div>
	</center>







<?php require('footer.php'); ?>