<?php
include "connect.php";

session_start();
$cart_id=$_SESSION['cart_id'];
$ssn=$_SESSION['ssn'];
$product_id=$_SESSION['product_id'];

$mybouquet=(int)$_POST['mybouquet']+1;
$myribbon=(int)$_POST['myribbon']+1;

$mysqli->query("INSERT INTO cart_item (product_id,cart_id,wrapping_color,ribbon_color) VALUES('$product_id','$cart_id','$mybouquet','$myribbon')") or die($mysqli->error);
// echo "포장지 번호: ".$mybouquet."<br>";
// echo "리본 번호: ".$myribbon."<br>";

echo "<script>location.href =\"shopping basket.php\";</script>";
 ?>
