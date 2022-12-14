<?php

if(!session_id()) {
session_start();
$_SESSION = array();
session_destroy();
}


$mysqli=new mysqli('localhost:3306','root','1234','dingadb') or die(mysqli_error($mysqli));

$input_id='';
$input_pw='';


$input_id=$_POST['id'];
$input_pw=$_POST['pw'];



$result=$mysqli->query("SELECT * FROM person WHERE person_id='{$input_id}'") or die($mysqli->error());

//input이랑 일치해서 가져온 id가 있다면
if(mysqli_num_rows($result)==1){
  $row=$result->fetch_array();
  if($row['person_pw']==$input_pw){
      session_start();
      $_SESSION['is_login']=true;
      $_SESSION['user_name']=$row['person_name'];
      $_SESSION['message']="로그인에 성공했습니다!";
      $_SESSION['msg_type'] ='success';
      $_SESSION['login_alert']=true;
      header("location:main.php");
      exit;
    }
  }else{
     echo '로그인에 실패하였습니다';
     header("location:index.php");
  }

 ?>
