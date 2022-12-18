<?php
if(!session_id()) {
session_start();
}
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

echo "포장지 번호: ".$mybouquet."<br>";
echo "리본 번호: ".$myribbon."<br>";
echo "총 가격: ".$total_price."<br>";
echo "1번 꽃 개수: ".$flower1_count."<br>";
echo "2번 꽃 개수: ".$flower2_count."<br>";
echo "3번 꽃 개수: ".$flower3_count."<br>";
echo "4번 꽃 개수: ".$flower4_count."<br>";
echo "5번 꽃 개수: ".$flower5_count."<br>";
echo "6번 꽃 개수: ".$flower6_count."<br>";
echo "7번 꽃 개수: ".$flower7_count."<br>";
echo "8번 꽃 개수: ".$flower8_count."<br>";



?>
