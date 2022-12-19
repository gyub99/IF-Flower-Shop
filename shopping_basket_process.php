<?php
include "connect.php";
session_start();

//$mysqli=new mysqli('localhost:3306','root','1234','if_flower_db') or die(mysqli_error($mysqli));



if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $mysqli->query("DELETE FROM cart_item WHERE product_id=$id")or die($mysqli->error);

    header("location:shopping basket.php");

}

 ?>
