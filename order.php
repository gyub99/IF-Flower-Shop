<!DOCTYPE html>

<html>
  <head>
    <title>IF flower Shop </title>
    <meta charset="utf-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/order.css">
  <link rel="stylesheet" href="css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>

  function checkOnlyOne(element) {

  const checkboxes  = document.getElementsByName("check");

  checkboxes.forEach((cb) => {
    cb.checked = false;
  })

  element.checked = true;
}

    function mailcheck(){
      i=document.join.mail_sel.selectedIndex
      var mail=document.join.mail_sel.options[i].value
      document.join.mail.value=mail
  }


  </script>
  <style>
  @font-face {
       font-family: 'S-CoreDream-3Light';
       src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_six@1.2/S-CoreDream-3Light.woff') format('woff');
       font-weight: normal;
       font-style: normal;z-index:
  }
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
      font-family: 'GmarketSansBold';
      src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2001@1.1/GmarketSansBold.woff') format('woff');
      font-weight: normal;
      font-style: normal;
  }

  @font-face {
      font-family: 'GmarketSansLight';
      src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2001@1.1/GmarketSansLight.woff') format('woff');
      font-weight: normal;
      font-style: normal;
  }

td,th{
  font-family: 'S-CoreDream-3Light';
  font-size: 14px;

}

.bg-info{
  background-color:#f6f6f6;
  padding-bottom: 20px;
  padding-top:10px;
  width:1000px;
  margin-left: auto;
  margin-right: auto;
}

.none-border{
  border-style: hidden;
}

.tb_box{
  width:1000px;
  margin-left: auto;
  margin-right: auto;
}
.bigbox{
  width:1000px;
  margin-left: auto;
 margin-right: auto;
 margin-top: 100px;
 margin-bottom: 100px;
}

</style>
  </head>
  <!-- <body  style="overflow-x:hidden;"> -->

  <!-- 헤더부분 -->
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
        <form class="form-inline" method="post" action="search.php">
          <input class="form-control mr-sm-2" name="search" type="search" placeholder="찾으시는 꽃의 이름을 검색해주세요" aria-label="Search" style = "border: 1.5px solid #c4dfaa; width:300px;">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
          <!-- 배송정보 -->

    <div class="container-fluid">
      <h2 style=" text-align:center; font-weight:bold; margin-top:50px; margin-bottom:30px; font-family: 'S-CoreDream-3Light'; font-weight:bold;"> 주문서</h2>
    </div>

    <div class="container-fluid bg-info">
      <h3 style=" font-weight: bold; margin-bottom: 20px; text-align:center; font-family: 'S-CoreDream-3Light'; font-size:20px;"> 주문 지역(대전/충청 일부)에 신선배송 서비스가 시작됩니다!</h3>
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
          <table class="none-border">
            <tr>
              <td style="width:80px;">
                <img src="picture/order/pic2.jpg" alt="delivery" class="img-circle img-responsive" width="70px" height="70px">
              </td>
              <td style="border-style: hidden; padding-left:20px;">
                <h3 style="margin-left: 0px; margin-top:10px; font-family: 'S-CoreDream-3Light';"> <b>이제부터 새벽에 배송됩니다.</b><br><br>
             매일 23시까지 주문하시면 <br>다음날 7시까지 배송됩니다.</h3>
           </td>
         </tr>
       </table>
        </div>

        <div class="col-sm-5">
          <table class="none-border">
            <tr>
              <td style="width:80px;">
                <img src="picture/order/pic1.jpg" alt="lock" class="img-circle" width="70px" height="70px">
              </td>
              <td style="border-style: hidden; padding-left:20px;">
                <h3 style="margin-left: 0px; margin-top:10px; font-family: 'S-CoreDream-3Light';"><b>공동현관 비밀번호를 입력해주세요</b><br><br>
                새벽 시간 공동 현관 출입이 불가할 경우,<br>공동현관 앞에 배송될 수 있습니다.</h3>
           </td>
         </tr>
       </table>
       </div>
     </div>
   </div>




   <div class="bigbox">
        <h2 style="font-family: 'NEXON Lv1 Gothic OTF'; text-align:center;">배송지 입력</h2>
          <div class="title">
            <h3 style="font-family: 'NEXON Lv1 Gothic OTF'; display: inline-block; text-align:center;">배송 정보</h3>
              <span class="star"><img src="http://img.echosting.cafe24.com/skin/base_ko_KR/order/ico_required.gif" alt="필수"/>필수입력사항</span>
          </div>

          <div class="tb_box">
            <form method="post" action="order_process.php">
              <table border="1">
                <thead>
                    <tr>
                        <th scope="row">수령자 이름 <img src="http://img.echosting.cafe24.com/skin/base_ko_KR/order/ico_required.gif" alt="필수" /></th>
                            <td>
                              <div class="re_box">
                              <input type="text" name="name" class="re_name" placeholder="이름을 입력하세요" required autofocus>
                              </div>
                            </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">주소 <img src="http://img.echosting.cafe24.com/skin/base_ko_KR/order/ico_required.gif" alt="필수" /></th>
                          <td>
                            <div class="addr">
                            <input type="text" name="zip code" class="zip_code" placeholder="우편번호" required><br>
                            <input type="text" name="address1" class="addr1" placeholder="주소" required>
                            <span style="font-size: 14px;" class="grid">기본 주소</span><br>
                            <input type="text" name="address2" class="addr1" placeholder="상세주소" required>
                            <span style="font-size: 14px;" class="grid">나머지 주소</span>
                            </div>
                          </td>
                    </tr>
                    <tr>
                        <th scope="row">휴대전화 <img src="http://img.echosting.cafe24.com/skin/base_ko_KR/order/ico_required.gif" alt="필수" /></th>
                          <td>
                            <div class="ph_box">
                            <input type="text" name="phone" class="ph_num" placeholder="전화번호를 입력하세요" required>
                            </div>
                          </td>
                    </tr>

                    <tr>
                      <th scope="row">배송메시지</th>
                          <td>
                            <div class="de_box">
                            <textarea  class="de_message" name="delivery_message" rows="4" cols="80"></textarea>
                            </div>
                          </td>
                    </tr>
                <tbody>
                </table>

            </div>
        </div>




        <div class="container text-center">
        <button class="btn btn-lg btn-login" type="submit">결제하기</button>
        </form>
      </div>
      </div>
      <br><br><br>







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
