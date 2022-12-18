<?php
include "connect.php";

if(!session_id()) {
session_start();
}
$cart_id=$_SESSION['cart_id'];
$ssn=$_SESSION['ssn'];

// if($_SESSION['custom_product_id']==0){
//     $mysqli->query("INSERT INTO custom_product (customer_ssn,cart_id) VALUES('$ssn','$cart_id')") or die($mysqli->error);
// }

$custom_product_id=$_SESSION['custom_product_id'];

$mybouquet=$_POST['mybouquet'];
$myribbon=$_POST['myribbon'];
$total_price=$_POST['total_price'];
$flower1_count=$_POST['flower1_count'];
$flower2_count=$_POST['flower2_count'];
$flower3_count=$_POST['flower3_count'];
$flower4_count=$_POST['flower4_count'];
$flower5_count=$_POST['flower5_count'];
$flower6_count=$_POST['flower6_count'];
$flower7_count=$_POST['flower7_count'];
$flower8_count=$_POST['flower8_count'];

$flower1_total=7000*$flower1_count;
$flower2_total=9000*$flower2_count;
$flower3_total=9000*$flower3_count;
$flower4_total=7000*$flower4_count;
$flower5_total=6000*$flower5_count;
$flower6_total=5000*$flower6_count;
$flower7_total=6000*$flower7_count;
$flower8_total=5000*$flower8_count;

$all_custom_flowers=$mysqli->query("SELECT * FROM custom_flower") or die($mysqli->error);




//개수 대입이 끝나면 세션$_SESSION['custom_product_id']; 에 0을 집어넣을까?
//더 쉬운방법 있을거같은데 아직 모르겠다
//custom_product_id가 겹쳐서..같은 회원이 제작상품 다시 만드려면 지금은 custom_making테이블을 truncate해야한다
//다시 페이지에 들어갈때마다 custom_product_id추가해서 그거에대한 정보 추가하는방법 생각해야함

//배열 쓰면 괜찮을거 같은데

if($_SESSION['custom_product_id']!=0){
if($flower1_count!=0){
    $mysqli->query("INSERT INTO custom_making (custom_flower_id,custom_product_id,quantity,custom_making_total) VALUES(1,'$custom_product_id','$flower1_count','$flower1_total')") or die($mysqli->error);
}
if($flower2_count!=0){
    $mysqli->query("INSERT INTO custom_making (custom_flower_id,custom_product_id,quantity,custom_making_total) VALUES(2,'$custom_product_id','$flower2_count','$flower2_total')") or die($mysqli->error);
}
if($flower3_count!=0){
    $mysqli->query("INSERT INTO custom_making (custom_flower_id,custom_product_id,quantity,custom_making_total) VALUES(3,'$custom_product_id','$flower3_count','$flower3_total')") or die($mysqli->error);
}
if($flower4_count!=0){
    $mysqli->query("INSERT INTO custom_making (custom_flower_id,custom_product_id,quantity,custom_making_total) VALUES(4,'$custom_product_id','$flower4_count','$flower4_total')") or die($mysqli->error);
}
if($flower5_count!=0){
    $mysqli->query("INSERT INTO custom_making (custom_flower_id,custom_product_id,quantity,custom_making_total) VALUES(5,'$custom_product_id','$flower5_count','$flower5_total')") or die($mysqli->error);
}
if($flower6_count!=0){
    $mysqli->query("INSERT INTO custom_making (custom_flower_id,custom_product_id,quantity,custom_making_total) VALUES(6,'$custom_product_id','$flower6_count','$flower6_total')") or die($mysqli->error);
}
if($flower7_count!=0){
    $mysqli->query("INSERT INTO custom_making (custom_flower_id,custom_product_id,quantity,custom_making_total) VALUES(7,'$custom_product_id','$flower7_count','$flower7_total')") or die($mysqli->error);
}
if($flower8_count!=0){
    $mysqli->query("INSERT INTO custom_making (custom_flower_id,custom_product_id,quantity,custom_making_total) VALUES(8,'$custom_product_id','$flower8_count','$flower8_total')") or die($mysqli->error);
}

// while($row_flowers=$all_custom_flowers->fetch_assoc()){
//     $total=$row_flowers['custom_flower_price'];
//     $custom_making_check=$mysqli->query("SELECT * FROM custom_making WHERE custom_flower_id='{$row_flowers['custom_flower_id']}'") or die($mysqli->error());
//     if(mysqli_num_rows($custom_making_check)==1){
//         $mysqli->query("INSERT INTO custom_making (custom_flower_id,custom_product_id,quantity) VALUES('$flower_id','$custom_product_id',1)") or die($mysqli->error);
//     }elseif(mysqli_num_rows($custom_making_check)==1){
//
// }
// }
}
//$_SESSION['custom_product_id']=0;



echo "<script>location.href =\"shopping basket.php\";</script>";

// echo "포장지 번호: ".$mybouquet."<br>";
// echo "리본 번호: ".$myribbon."<br>";
// echo "총 가격: ".$total_price."<br>";
// echo "1번 꽃 개수: ".$flower1_count."<br>";
// echo "2번 꽃 개수: ".$flower2_count."<br>";
// echo "3번 꽃 개수: ".$flower3_count."<br>";
// echo "4번 꽃 개수: ".$flower4_count."<br>";
// echo "5번 꽃 개수: ".$flower5_count."<br>";
// echo "6번 꽃 개수: ".$flower6_count."<br>";
// echo "7번 꽃 개수: ".$flower7_count."<br>";
// echo "8번 꽃 개수: ".$flower8_count."<br>";

?>
