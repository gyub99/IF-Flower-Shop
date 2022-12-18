<?php
include "connect.php";

if(!session_id()) {
    session_start();
  }


$user_id= $_SESSION['id'];
$content='';

$content=$_POST['question'];

$mysqli->query("INSERT INTO qna (user_id, question_contents) VALUES('$user_id','$content')") or die($mysqli->error);



$_SESSION['message']="질문을 등록하였습니다.";
$_SESSION['msg_type']='info';
$_SESSION['signup_alert']=true;


header("location:qna.php");

 ?>
