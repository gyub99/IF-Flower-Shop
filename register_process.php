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


$coupon_custom_discount_id = 1;
$expired_date_discount = '2023-12-31';

$coupon_free_shipping_id = 2;
$expired_date_shipping = '2023-01-01';

$coupon=$mysqli->query("INSERT INTO customer_coupon_list (customer_id, coupon_id, expired_date) VALUES
((Select ssn FROM CUSTOMER WHERE customer_id = '$id'),'$coupon_custom_discount_id','$expired_date_discount'),
((Select ssn FROM CUSTOMER WHERE customer_id = '$id'),'$coupon_free_shipping_id','$expired_date_shipping')") or die($coupon->error);

$_SESSION['message']="회원가입에 성공했습니다!";
$_SESSION['message']="신규회원 WELCOME 쿠폰이 발급되었습니다!";
$_SESSION['msg_type']='info';
$_SESSION['signup_alert']=true;


header("location:index.php");

 ?>
