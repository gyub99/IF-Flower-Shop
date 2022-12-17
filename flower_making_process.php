<?php

include "connect.php";

session_start();


$flower_id=$_GET['id'];
$custom_product_id=$_SESSION['custom_product_id'];

$custom_making_check=$mysqli->query("SELECT * FROM custom_making WHERE custom_flower_id='{$flower_id}' and custom_product_id='{$custom_product_id}'") or die($mysqli->error());

if(mysqli_num_rows($custom_making_check)==0){
    $mysqli->query("INSERT INTO custom_making (custom_flower_id,custom_product_id,quantity) VALUES('$flower_id','$custom_product_id',1)") or die($mysqli->error);
}elseif(mysqli_num_rows($custom_making_check)==1){
    $mysqli->query("update custom_making set quantity=quantity+1") or die($mysqli->error);
}else {
    echo "<script>alert('오류입니다'); location.href =\"makeBouquet2.php\";</script>";
}

echo "<script>location.href =\"makeBouquet2.php\";</script>";

?>
