<?php

include "connect.php";

if(!session_id()) {
session_start();
$_SESSION = array();
session_destroy();
}


//$mysqli=new mysqli('localhost:3306','root','1234','if_flower_db') or die(mysqli_error($mysqli));

$input_id='';
$input_pw='';


$input_id=$_POST['id'];
$input_pw=$_POST['pw'];



$result=$mysqli->query("SELECT * FROM customer WHERE customer_id='{$input_id}'") or die($mysqli->error());

$cart_check=$mysqli->query("SELECT * FROM cart WHERE customer_ssn='{$ssn}'") or die($mysqli->error());

//input이랑 일치해서 가져온 id가 있다면
if(mysqli_num_rows($result)==1){
  $row=$result->fetch_array();
  if($row['customer_pw']==$input_pw){
      session_start();
      $_SESSION['is_login']=true;
      $_SESSION['user_name']=$row['customer_name'];
      $_SESSION['message']="로그인에 성공했습니다!";
      $_SESSION['msg_type'] ='success';
      $_SESSION['login_alert']=true;
      $_SESSION['ssn']=$row['ssn'];
      $_SESSION['id']=$input_id;
      $ssn=$row['ssn'];
      $cart_check=$mysqli->query("SELECT * FROM cart WHERE customer_ssn='{$ssn}'") or die($mysqli->error());

      if(mysqli_num_rows($cart_check)==0){
      $mysqli->query("INSERT INTO cart (customer_ssn) VALUES('$ssn')") or die($mysqli->error);
      $cart=$mysqli->query("SELECT * FROM cart WHERE customer_ssn='{$ssn}'") or die($mysqli->error());
      $row_cart=$cart->fetch_array();
      $_SESSION['cart_id']=$row_cart['cart_id'];

      }else if(mysqli_num_rows($cart_check)==1){
          $cart=$mysqli->query("SELECT * FROM cart WHERE customer_ssn='{$ssn}'") or die($mysqli->error());
          $row_cart=$cart->fetch_array();
          $_SESSION['cart_id']=$row_cart['cart_id'];
      }

      //echo "<script>alert('로그인에 성공하였습니다'); location.href =\"main.php\";</script>";
      header("location:main.php");
    }elseif($row['customer_pw']!=$input_pw){
      echo "<script>alert('비밀번호를 잘못 입력하셨습니다'); location.href =\"index.php\";</script>";
    }
  }else{
    echo "<script>alert('존재하지 않는 회원입니다'); location.href =\"index.php\";</script>";
  }

 ?>
