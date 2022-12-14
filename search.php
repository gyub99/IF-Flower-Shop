<!DOCTYPE html>
<html>
  <head>
    <title> IF Flower Shop </title>
    <meta charset="utf-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <!-- 폰트 -->
<link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">
<!-- 위에 2개가 폰트 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/product.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="javascript/product.js"></script>
  <script type="text/javascript" src="javascript/get_index.js"></script>


  <style>

  @font-face {
       font-family: 'S-CoreDream-3Light';
       src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_six@1.2/S-CoreDream-3Light.woff') format('woff');
       font-weight: normal;
       font-style: normal;
  }

  </style>
    </head>

<body>

  <?php

  include "connect.php";

  if(!session_id()) {
  session_start();
}
  ?>

  <!-- 헤더부분 -->
  <div class="header">
    <div class="container-fluid">
      <div class="register">
          <?php
          echo $_SESSION['user_name']."님"
          ?>
        &nbsp;|&nbsp;
        <a href="shopping basket.php" style="margin:10px; color:black;">My page</a>
        &nbsp;|&nbsp;
        <a href="logout.php" style="margin:10px; color:black;">Logout</a>


    <p style="text-align:center;"><a href="main.php"><img src="picture/logo/logo2.png" class="img-responsive img" id="logo_style"></a></p>
      </div>
    </div>
  </div>



    <!-- 네비게이션 -->
  <!-- 네비게이션 부분 -->
  <nav class="navbar navbar-default">
    <div class="navcontainer row">
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav" >
          <li class="nav-li"><a href="main.php" >Home</a></li>
          <li class="nav-li"><a href="makeBouquet.php" >Make Flower</a></li>
          <li class="nav-li"><a href="product.php">Product</a></li>
          <li class="nav-li"><a href="product.php">Event</a></li>
          <li class="nav-li"><a href="product.php">Q & A</a></li>
        </ul>
        <form class="form-inline" method="post" action="search.php">
          <input class="form-control mr-sm-2" name="search" type="search" placeholder="찾으시는 꽃의 이름을 검색해주세요" aria-label="Search" style = "border: 1.5px solid #c4dfaa; width:300px;">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>


<?php
$search = $_POST['search'];

$result=$mysqli->query("SELECT * FROM product WHERE (product_name LIKE '%{$search}%' OR product_description LIKE '%{$search}%')") or die($mysqli->error());


if (mysqli_num_rows($result) >= 1) { ?>
<div class="container-fluid bg-main-suggest text-center">
        <h3 style="font-family: 'NanumSquare', sans-serif;"><strong>검색결과</strong></h3>
        <p style="font-family: 'Nanum Gothic', sans-serif;">키워드 <strong>"<?php echo $search ?>"</p><br>
        <div class="row pic-container">
        <?php

  while ($row = $result->fetch_assoc()) {
        ?>
                <div class="col-sm-3">
                <a href="product_detail.php?product_id=<?php echo $row['product_id']; ?>"><img src="<?php echo $row["product_image"] ?>" onmouseover="img_mouseover(this)" onmouseout="img_mouseout(this)" alt="best" class="img-responsive" />
                <p class="title">
                    <?php
    echo "[";
    echo $row["product_name"];
    echo "]"; ?>
                </p>
                <p class="bestprice">
                    <?php echo number_format($row["product_price"]);
    echo "원" ?>
                </p>
                </a></div>
                <?php } ?>
        </div>
      </div>

<?php }
else
{
  echo "<script>alert('이런, 검색결과가 존재하지 않습니다! 다른 키워드를 입력해주세요'); location.href =\"main.php\";</script>";
}

 ?>

 <footer class="container-fluid bg-main-footer">
      <div class="row footer-container">
        <div class="col-sm-6">
          <h2 style="font-family: 'Cafe24Oneprettynight';">IF 고객센터</h2><h4>&#128222; 1644-1777</h4><br>
          <p style="font-family: 'S-CoreDream-3Light';"><strong>365 고객센터</strong>: 오전 7시 - 오후 7시</p>
          <p style="font-family: 'S-CoreDream-3Light';"><strong>24시간 접수가능</strong> : 고객센터 운영시간에 순차적으로 답변해드리겠습니다.</p>
        </div>
        <div class="col-sm-6">
          <h2 style="font-family: 'Cafe24Oneprettynight';">IF 꽃집</h2><br>
          <p style="font-family: 'S-CoreDream-3Light';">사업자 등록번호 : 123-45-6789<br>
            통신판매업 신고번호 : 2022-청주 충북대-99999<br>
            주소 : 충북 청주시 서원구 충대로 1, 전자정보대학 소프트웨어학부 S4-1동(전자정보 3관)<br>
            COPYRIGHTⓒ 2022 IF FLOWER. ALL RIGHTS RESERVED</p>
        </div>
      </div>
    </footer>

</body>
</html>
