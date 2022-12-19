<?php
include "connect.php";


if(!session_id()) {
    session_start();
  }


$name= '';
$zip_code='';
$address1='';
$address2='';
$phone='';
$delivery_message='';


$name=$_POST['name'];
$zip_code=$_POST['zip_code'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];
$phone=$_POST['phone'];
$delivery_message=$_POST['delivery_message'];

$address = $address1.$address2 ;

$mysqli->query("INSERT INTO order_information (ssn,name,zip_code,delivery_address,phone,delivery_message) VALUES('$ssn','$name','$zip_code','$address','$phone','$delivery_message')") or die($mysqli->error);



// $_SESSION['message']="회원가입에 성공했습니다!";
// $_SESSION['message']="신규회원 WELCOME 쿠폰이 발급되었습니다!";

echo "<script>location.href =\"shopping basket.php\";</script>";

header("location:order.php");

 ?>
