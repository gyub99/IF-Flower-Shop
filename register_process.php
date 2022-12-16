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



$_SESSION['message']="회원가입에 성공했습니다!";
$_SESSION['msg_type']='info';
$_SESSION['signup_alert']=true;


header("location:index.php");

 ?>
