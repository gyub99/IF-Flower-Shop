<?php
    include "connect.php"
?>


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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="javascript/product.js"></script>
  <script type="text/javascript" src="javascript/get_index.js"></script>
  <script>
    function img_mouseover(m){
      m.style.transform = "scale(1.05)";
      m.style.zIndex = 1;
      m.style.transition = "all 0.5s";
    }
    function img_mouseout(m){
      m.style.transform = "scale(1)";
      m.style.zIndex = 0;
      m.style.transition = "all 0.5s";
    }


  </script>
<style>
@font-face {
    font-family: 'Cafe24Oneprettynight';
    src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_twelve@1.1/Cafe24Oneprettynight.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'GongGothicLight';
    src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_20-10@1.0/GongGothicLight.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'NEXON Lv1 Gothic OTF';
    src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_20-04@2.1/NEXON Lv1 Gothic OTF.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}

@font-face {
     font-family: 'S-CoreDream-3Light';
     src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_six@1.2/S-CoreDream-3Light.woff') format('woff');
     font-weight: normal;
     font-style: normal;
}

/* 폰트 사용법 : 위에 @font-face 복사하기 &위에 2개가 폰트라고 써져있는 부분 링크 복사해서 추가

주로 제목이나 타이틀에 적용하는 폰트 (깔끔한 폰트)
에스코어드림 ->  font-family: 'S-CoreDream-3Light';
나눔스퀘어 -> font-family: 'NanumSquare', sans-serif;
나눔고딕 -> font-family: 'Nanum Gothic', sans-serif;

튀는 폰트
카페 24-> font-family: 'Cafe24Oneprettynight';
공고딕 -> font-family: 'GongGothicLight';
넥슨 폰트 -> font-family: 'NEXON Lv1 Gothic OTF'; */



</style>
  </head>

  <body>
    <?php
    //세션 스타트 해주여야 session전역변수 사용할 수 있다.
    if(!session_id()) {
  	session_start();
    }
    if(isset($_SESSION['login_alert'])){
      if (isset($_SESSION['message']) && $_SESSION['is_login']==true && $_SESSION['login_alert']==true ):
     ?>
     <div class="alert alert-<?=$_SESSION['msg_type']?>">
       <?php
        echo $_SESSION['message'];
        echo "<br>".$_SESSION['user_name']."님 안녕하세요 IF 꽃집입니다";
        $_SESSION['login_alert']=false;
        ?>

      </div>
    <?php endif; } ?>

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
            <li class="nav-li"><a href="event.php" >Event</a></li>
            <li class="nav-li"><a href="qna.php" >Q & A</a></li>
          </ul>
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="찾으시는 꽃의 이름을 검색해주세요" aria-label="Search" style = "border: 1.5px solid #c4dfaa; width:300px;">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <!-- 사진 슬라이드 -->
    <div id="mycarousel" class="carousel slide text-center" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
          <li data-target="#mycarousel" data-slide-to="1"></li>
          <li data-target="#mycarousel" data-slide-to="2"></li>
        </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="picture/slide1.png" class="img-responsive" alt="slide1" style="margin-left: auto; margin-right: auto;">
        </div>
        <div class="item">
          <img src="picture/slide2.jpg" class="img-responsive" alt="slide2" style="margin-left: auto; margin-right: auto;">
        </div>
        <div class="item">
          <img src="picture/slide3.png" class="img-responsive" alt="slide3" style="margin-left: auto; margin-right: auto;">
        </div>
      </div>
      <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!-- IF꽃집 소개 -->
      <div class="container-fluid bg-aboutus">
        <div class="row">
          <div class="col-sm-6">
            <img src="picture/logo/logo2.png" alt="IF꽃집 로고" class="img-responsive" style="max-height:250px;float:right;">
          </div>
          <div class="col-sm-6">
            <h3 style="font-family: 'Nanum Gothic', sans-serif;"><strong>About IF...</strong></h3><br>
            <p id="about">IF Flower Shop에 오신것을 환영합니다.<br>
              IF꽃집은 일상에서 느낄 수 있는 행복을 주는것을 목표로 시작되었습니다.<br>
              평범한 날에도, 특별한 날에도 여러분의 일상에 행복을 선물해드립니다.<br>
              특별한 날에만 즐기던 꽃을 일상에서도 쉽고 합리적인 가격으로 만날 수 있도록<br>
              당신을 위해 오늘 가장 신선한 꽃을 수확합니다.<br>
            </p>
          </div>
        </div>
      </div>

         <?php

      $best_products=$mysqli->query("SELECT * FROM product where product_best = true") or die($mysqli->error);
      $sale_products=$mysqli->query("SELECT * FROM product where product_sale = true") or die($mysqli->error);
      $recommendation_products=$mysqli->query("SELECT * FROM product where product_recommendation = true") or die($mysqli->error);
      $all_products=$mysqli->query("SELECT * FROM product") or die($mysqli->error);
    ?>

      <!-- 베스트상품 -->
      <div class="container-fluid bg-main-best text-center">
        <h3 style="font-family: 'NanumSquare', sans-serif;"><strong>IF Flower Shop의 베스트 상품</strong></h3>
        <p style="font-family: 'Nanum Gothic', sans-serif;"> 소중한 사람에게 꽃을 선물해보세요</p><br>
        <div class="row pic-container">
        <?php
          while ($row=$best_products->fetch_assoc()) {
                ?>
                <div class="col-sm-3">
                <a href="product_detail.php?product_id=<?php echo $row['product_id']; ?>"><img src="<?php echo $row["product_image"]?>" onmouseover="img_mouseover(this)" onmouseout="img_mouseout(this)" alt="best" class="img-responsive" />
                <p class="title">
                    <?php
                    echo "[";
                    echo $row["product_name"];
                    echo "]";?>
                </p>
                <p class="bestprice">
                    <?php echo number_format($row["product_price"]);
                    echo "원"?>
                </p>
                </a></div>
                <?php }?>

        </div>
      </div>

      <!-- 추천상품 -->
      <div class="container-fluid bg-main-suggest text-center">
        <h3 style="font-family: 'NanumSquare', sans-serif;"><strong>오늘의 추천상품</strong></h3>
        <p style="font-family: 'Nanum Gothic', sans-serif;">12월의 추천꽃 라일락, 장미</p><br>
        <div class="row pic-container">
        <?php
          while ($row=$recommendation_products->fetch_assoc()) {
                ?>
                <div class="col-sm-3">
                <a href="product_detail.php?product_id=<?php echo $row['product_id']; ?>"><img src="<?php echo $row["product_image"]?>" onmouseover="img_mouseover(this)" onmouseout="img_mouseout(this)" alt="best" class="img-responsive" />
                <p class="title">
                    <?php
                    echo "[";
                    echo $row["product_name"];
                    echo "]";?>
                </p>
                <p class="bestprice">
                    <?php echo number_format($row["product_price"]);
                    echo "원"?>
                </p>
                </a></div>
                <?php }?>

        </div>
      </div>



      <!-- footer -->
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
