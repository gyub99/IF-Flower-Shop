<?php
include "connect.php";
session_start();

//$mysqli=new mysqli('localhost:3306','root','1234','if_flower_db') or die(mysqli_error($mysqli));

$id= '';
$pw='';
$name='';
$email='';
$address='';

$id=$_POST['id'];
$pw=$_POST['pw'];
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];

$mysqli->query("INSERT INTO customer (customer_id,customer_pw,customer_name,customer_email,customer_address) VALUES('$id','$pw','$name','$email','$address')") or die($mysqli->error);


$coupon_free_shipping = '배송비 무료 3장 쿠폰';
$expired_date_shipping = '2023-12-31';

$coupon_custom_discount = '제작상품 10% 할인쿠폰 ';
$expired_date_discount = '2023-01-01';

$coupon=$mysqli->query("INSERT INTO coupon (user_id, coupon_contents, expired_date) VALUES
('$id','$coupon_free_shipping','$expired_date_shipping'),
('$id','$coupon_custom_discount','$expired_date_discount')") or die($coupon->error);

$_SESSION['message']="회원가입에 성공했습니다!";
$_SESSION['message']="신규회원 WELCOME 쿠폰이 발급되었습니다!";
$_SESSION['msg_type']='info';
$_SESSION['signup_alert']=true;


header("location:index.php");

 ?>
