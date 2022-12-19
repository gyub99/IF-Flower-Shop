<?php include "connect.php" ?>
<?php if(!session_id()) {
session_start();
}
?>
<!DOCTYPE html>

<html>
  <head>
    <title>IF Flower Shop</title>
    <meta charset="utf-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/makeBouquet.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <script type="text/javascript" src="javascript/makeflower.js"></script>

    <script type="text/javascript" src="javascript/get_index.js"></script>

  </head>
  <style>
  @font-face {
       font-family: 'S-CoreDream-3Light';
       src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_six@1.2/S-CoreDream-3Light.woff') format('woff');
       font-weight: normal;
       font-style: normal;
  }

  @font-face {
      font-family: 'Cafe24Oneprettynight';
      src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_twelve@1.1/Cafe24Oneprettynight.woff') format('woff');
      font-weight: normal;
      font-style: normal;
  }

</style>
  <script src="jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="javascript/makeflower.js"></script>

  <body>
    <!-- 헤더부분 -->
    <?php
    //세션 스타트 해주여야 session전역변수 사용할 수 있다.
    if(!session_id()) {
  	session_start();
    }?>



    <?php
    $all_custom_flowers=$mysqli->query("SELECT * FROM custom_flower") or die($mysqli->error);
    ?>

    <?php
    $cart_id=$_SESSION['cart_id'];
    $ssn=$_SESSION['ssn'];
    $custom_product_check=$mysqli->query("SELECT * FROM custom_product WHERE customer_ssn='{$ssn}'") or die($mysqli->error());
    if(mysqli_num_rows($custom_product_check)==0){
    $mysqli->query("INSERT INTO custom_product (customer_ssn,cart_id) VALUES('$ssn','$cart_id')") or die($mysqli->error);
    }
    $row_custom_product=$custom_product_check->fetch_array();
    $_SESSION['custom_product_id']=$row_custom_product['custom_product_id'];

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
            <li class="nav-li"><a href="main.php">Home</a></li>
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


    <div class="container title">
      <div class="title">
      <h2 class="make-bouquet-title"><strong>나만의 꽃다발을 만들어봐요!</strong></h2>
      <h5>이곳에서 원하는 색상, 꽃 종류, 스타일을 선택해보세요!</h5>
    </div>


    <div class="contents" >
      <div class="product row">
        <div class="preview-container col-sm-6">
          <div id="preview" class="preview">

          </div>
          <div class="refresh-button" style="padding:10px;"><button id="refresh" class="btn" style="font-size:20px;"><i class="glyphicon glyphicon-refresh" style="color:#73a9ad;margin-right:15px;"></i>초기화</button></div>
        </div>

        <div class="choosing col-sm-6">

          <div class="row">

              <?php
              while ($row=$all_custom_flowers->fetch_assoc()) {
                    ?>
              <div class="col-sm-3 choose-flower">
                <button type="button" id="button<?php echo $row['custom_flower_id'] ?>" class="select-flower"><img class="img-responsive" src="<?php echo $row["custom_flower_image"]?>" alt="flower<?php echo $row['custom_flower_id'] ?>"/>
                <div class="price" id="flower<?php echo $row['custom_flower_id'] ?>"><?php echo $row["custom_flower_price"]?></div></button>
              </div>
                <?php }?>

            </div>

            <!-- // 구분선 -->
            <div class="image-gallery-thumbnails-wrapper row" style="margin-top:10px;">


            <hr>
            <div class="color-container">
              <table>
                <tr>
                  <td style=" font-family: 'S-CoreDream-3Light';"><strong>포장지 색 선택</strong></td>
                  <td>
                    <div class="row choose-bouquet">
                      <a role='button' onclick="choose_bouquet(0)"><span id="c1" class="color col-sm-2 img-circle bouquet" style="background-color: #7ea8cc;"> </span></a>
                      <a role='button' onclick="choose_bouquet(1)"><span id="c2" class="color col-sm-2 img-circle bouquet"  style="background-color: #E69A65"> </span></a>
                      <a role='button' onclick="choose_bouquet(2)"><span id="c3" class="color col-sm-2 img-circle bouquet"  style="background-color: #D7E691"> </span></a>
                      <a role='button' onclick="choose_bouquet(3)"><span id="c4" class="color col-sm-2 img-circle bouquet"  style="background-color: #87bdaa;"> </span></a>
                      <a role='button' onclick="choose_bouquet(4)"><span id="c5" class="color col-sm-2 img-circle bouquet"  style="background-color: #F5F6CE;"> </span></a>
                      <a role='button' onclick="choose_bouquet(5)"><span id="c6" class="color col-sm-2 img-circle bouquet"  style="background-color: #E65F4C"> </span></a>
                    </div>
                  </td>
                </tr>
                  <tr>
                    <td style=" font-family: 'S-CoreDream-3Light';"><strong>리본 색 선택&nbsp&nbsp&nbsp&nbsp</strong></td>
                    <td>
                      <div class="row choose-ribbon">
                        <a role='button' onclick="choose_ribbon(0)"><span id="r1" class="color col-sm-2 img-circle ribbon" style="background-color: #5767E6"> </span></a>
                        <a role='button' onclick="choose_ribbon(1)"><span id="r2" class="color col-sm-2 img-circle ribbon" style="background-color: #E68393"> </span></a>
                        <a role='button' onclick="choose_ribbon(2)"><span id="r3" class="color col-sm-2 img-circle ribbon" style="background-color: #f7c934;"> </span></a>
                        <a role='button' onclick="choose_ribbon(3)"><span id="r4" class="color col-sm-2 img-circle ribbon" style="background-color: #8BE67A"> </span></a>
                        <a role='button' onclick="choose_ribbon(4)"><span id="r5" class="color col-sm-2 img-circle ribbon" style="background-color: #6CDEE6;"> </span></a>
                        <a role='button' onclick="choose_ribbon(5)"><span id="r6" class="color col-sm-2 img-circle ribbon" style="background-color: #9f65fc;"> </span></a>
                      </div>
                    </td>
                  </tr>
                </table>
              </div>


            <div class="buy row">
              <div class="col-sm-5"></div>

              <form method="POST" action="process.php">
              <button class="buy-item col-sm-5" onclick="check_order();">장바구니</button>
              <input type="hidden" id="myribbon" name="myribbon">
              <input type="hidden" id="mybouquet" name="mybouquet">
              <input type="hidden" id="total_price" name="total_price">
              <input type="hidden" id="flower1_count" name="flower1_count">
              <input type="hidden" id="flower2_count" name="flower2_count">
              <input type="hidden" id="flower3_count" name="flower3_count">
              <input type="hidden" id="flower4_count" name="flower4_count">
              <input type="hidden" id="flower5_count" name="flower5_count">
              <input type="hidden" id="flower6_count" name="flower6_count">
              <input type="hidden" id="flower7_count" name="flower7_count">
              <input type="hidden" id="flower8_count" name="flower8_count">
              </form>
            </div>


          </div>
        </div>
      </div>
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
