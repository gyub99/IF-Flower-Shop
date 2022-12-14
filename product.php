<!DOCTYPE html>
<html>
  <head>
    <title>IF Flower Shop</title>
    <meta charset="utf-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"/>
    <link rel="stylesheet" href="css/product.css" />
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
    </style>
  </head>
  <body>
    <!-- 헤더부분 -->
    <?php
    //세션 스타트 해주여야 session전역변수 사용할 수 있다.
    if(!session_id()) {
  	session_start();
    }
    if (isset($_SESSION['message']) && $_SESSION['is_login']==true && $_SESSION['login_alert']==true):
     ?>
     <div class="alert alert-<?=$_SESSION['msg_type']?>">
       <?php
        echo $_SESSION['message'];
        echo "<br>".$_SESSION['user_name']."님 안녕하세요 IF 꽃집입니다";
        $_SESSION['login_alert']=false;
        ?>

      </div>
    <?php endif ?>

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
            <li class="nav-li"><a href="product.php" >Event</a></li>
            <li class="nav-li"><a href="product.php" >Q & A</a></li>
          </ul>
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="찾으시는 꽃의 이름을 검색해주세요" aria-label="Search" style = "border: 1.5px solid #c4dfaa; width:300px;">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    
    <div class="container-fluid best-product text-center">
      <h2><strong>IF 꽃집 베스트 상품</strong></h2>
      <h4>요즘 잘 나가는 이 상품은 어떠세요?</h4>
      <br />
      <div class="row">
        <div class="col-sm-1"></div>
          <div class ="col-sm-10">
          <div class="row">
        <script>
          for (var i=0;i<product_list.length; i++){
            if (i==2 || i==3 || i==5 || i==6){
              document.write('<div class="col-sm-3">');
              document.write('<a onclick="linking('+i+')">');
              document.write('<img src="picture/product/' + i + '.PNG" onmouseover="img_mouseover(this)" onmouseout="img_mouseout(this)" alt="best" class="img-responsive" />');
              document.write('<div class="best-comment">' + product_list[i].comment + '</div>');
              document.write('<div class="best-name">' + product_list[i].name + '</div>');
              document.write('<div class="best-price">' + product_list[i].price + '</div>');
              document.write('</a></div>');
            }
          }
        </script>
        </div>
          </div>
        <div class="col-sm-2"></div>
      </div>
    </div>

    <div class="container-fluid sale-product text-center">
      <h2><strong>IF 꽃집 할인 상품</strong></h2>
      <h4>아름다운 꽃을 저렴한 가격으로 구매하세요!</h4>
      <br />
      <div class="row">
        <div class="col-sm-1"></div>
        <div class ="col-sm-10">
        <div class="row">
        <script>
          for (var i=0;i<product_list.length; i++){
            if (i==0 || i==7 || i==9 || i==14){
              document.write('<div class="col-sm-3">');
                document.write('<a onclick="linking('+i+')">');
              document.write('<img src="picture/product/' + i + '.PNG" onmouseover="img_mouseover(this)" onmouseout="img_mouseout(this)" alt="sale" class="img-responsive" />');
              document.write('<div class="sale-comment">' + product_list[i].comment + '</div>');
              document.write('<div class="sale-name">' + product_list[i].name + '</div>');
              document.write('<div class="sale-price"><span class="original">' + product_list[i].original + '</span> ' + product_list[i].price + '</div>');
              document.write('</a></div>');
            }
          }
        </script>
        </div>
      </div>
      </div>
    </div>

    <div class="container-fluid product-list text-center">
      <h2><strong>오늘같은 날, 꽃 선물은 어떠세요?</strong></h2>
      <h4>12월의 추천꽃 <strong>"장미"</strong></h4>
      <div class="item_list">
        <script>
          for (var i=0;i<4;i++){
            document.write('<div class="row product-item">');
              document.write('<div class="col-sm-1"></div><div class ="col-sm-10"><div class="row">');
            for (var j=0; j<4; j++){
              document.write('<div class="col-sm-3">');
              document.write('<a onclick="linking('+(i*4+j)+')">');
              document.write('<img src="picture/product/' + (i*4+j) + '.PNG" onmouseover="img_mouseover(this)" onmouseout="img_mouseout(this)" alt="sale' + (i*4+j) + '" class="img-responsive" />');
              document.write('<div class="comment">' + product_list[4*i+j].comment + '</div>');
              document.write('<div class="name">' + product_list[4*i+j].name + '</div>');
              if ((i*4+j)==0 || (i*4+j)==7 || (i*4+j)==9 || (i*4+j)==14){
                document.write('<div class="sale-price"><span class="original">' + product_list[4*i+j].original + '</span> ' + product_list[4*i+j].price + '</div></a></div>');
              }
              else {
                document.write('<div class="price">' + product_list[4*i+j].price + '</div></a></div>');
              }
            }
            document.write('</div></div></div>');
          }
        </script>
      </div>
      <div class="page-control">
        <p>
          <span href="product2.php" class="glyphicon glyphicon-chevron-left" id="left"></span>
          <span>
            <a href="product2.php" class="glyphicon glyphicon-chevron-right" id="right"></a>
          </span>
        </p>
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
