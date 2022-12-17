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

  function order(){
    var p_number = document.getElementById("p_tel");
    var c_num = document.getElementById("card_num");
    var chk1 = document.getElementById("card").checked;
    var chk2 = document.getElementById("bankbook").checked;
    var chk3 = document.getElementById("account").checked;
    var chk4 = document.getElementById("cellphone").checked;

    j=document.credit.cards.selectedIndex
    var card_type=document.credit.cards.options[j].value

    k=document.credit.months.selectedIndex
    var month_type=document.credit.months.options[k].value

    m=document.bank_type.banks.selectedIndex
    var bank_type=document.bank_type.banks.options[m].value

    n=document.account_type.banks2.selectedIndex
    var account_type=document.account_type.banks2.options[n].value

    l=document.phone_type.phones.selectedIndex
    var phone_type=document.phone_type.phones.options[l].value

    if(chk1)
    {
      if(card_type=="카드"||c_num==null)
      {
        alert(document.write(c_num));
      }
      else{
        alert(card_type+" 신용카드를 선택하셨습니다. 할부 개월수는 "+month_type+" 입니다.\n" +"카드번호 : "+c_num.value+"로 결제됩니다.");
        document.location.href="main.php";
      }

    }

    else if(chk2)
    {
      if(bank_type=="은행")
      {
        alert("정보를 모두 입력해주세요.");
      }
      else{
        alert("무통장입금을 선택하셨습니다.\n"+bank_type+" 계좌 : 8813512-562-54122 로 입금해주세요");
        document.location.href="main.php";
      }

    }

    else if(chk3)
    {
      if(account_type=="은행")
      {
        alert("정보를 모두 입력해주세요.");
      }
      else{
        alert("실시간 계좌이체를 선택하셨습니다.\n"+account_type+" 계좌 : 8813512-562-54122 로 입금해주세요");
        document.location.href="main.php";
      }
    }

    else if(chk4)
    {
      if(phone_type=="통신사"||p_number==null)
      {
        alert(document.write(p_number.value));
      }
      else{
        alert(phone_type+" 통신사 휴대폰결제를 선택하셨습니다\n"+p_number.value+"번호로 결제금액이 청구됩니다.");
        document.location.href="main.php";
      }

    }
    else{
      alert("정보를 모두 입력해주세요.");
    }

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
            <form>
              <table border="1">
                <thead>
                    <tr>
                        <th scope="row">수령자 이름 <img src="http://img.echosting.cafe24.com/skin/base_ko_KR/order/ico_required.gif" alt="필수" /></th>
                            <td>
                              <div class="re_box">
                              <input type="text" class="re_name" placeholder="이름을 입력하세요" required autofocus>
                              </div>
                            </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">주소 <img src="http://img.echosting.cafe24.com/skin/base_ko_KR/order/ico_required.gif" alt="필수" /></th>
                          <td>
                            <div class="addr">
                            <input type="text" class="zip_code" placeholder="우편번호" required><br>
                            <input type="text" class="addr1" placeholder="주소" required>
                            <span style="font-size: 14px;" class="grid">기본 주소</span><br>
                            <input type="text" class="addr1" placeholder="상세주소" required>
                            <span style="font-size: 14px;" class="grid">나머지 주소</span>
                            </div>
                          </td>
                    </tr>
                    <tr>
                        <th scope="row">휴대전화 <img src="http://img.echosting.cafe24.com/skin/base_ko_KR/order/ico_required.gif" alt="필수" /></th>
                          <td>
                            <div class="ph_box">
                            <input type="text" class="ph_num" placeholder="전화번호를 입력하세요" required>
                            </div>
                          </td>
                    </tr>
                    <tr>
                        <th scope="row">이메일 <img src="http://img.echosting.cafe24.com/skin/base_ko_KR/order/ico_required.gif" alt="필수" /></th>
                          <td>
                            <div class="email_box">
                            <input type="text" class="email" placeholder="이메일을 입력하세요">
                            @
                            <form name="join" action="join_post.php" method="post" class="email_form">
                            <input type="text" name="mail" class="email">
                            <select name="mail_sel" onChange="mailcheck()">
                            <option selected>직접입력</option>
                            <option style="font-size: 15px;" value=google.com>google.com</option>
                            <option style="font-size: 15px;" value=naver.com>naver.com</option>
                            <option style="font-size: 15px;" value=nate.com>nate.com</option>
                            <option style="font-size: 15px;" value=daum.net>daum.net</option>
                            </select>
                            </form>
                          </div>
                        </td>
                    </tr>
                    <tr>
                      <th scope="row">배송메시지</th>
                          <td>
                            <div class="de_box">
                            <textarea  class="de_message" name="message" rows="4" cols="80"></textarea>
                            </div>
                          </td>
                    </tr>
                <tbody>
                </table>
              </form>
            </div>
        </div>

        <div class="bigbox">
          <h2 style="font-family: 'NEXON Lv1 Gothic OTF'; text-align:center; margin-bottom:50px;">결제수단</h2>
          <table border="1">
              <form name="credit">
              <th rowspan="2"><input type="checkbox" name="check" onclick='checkOnlyOne(this)' id="card" style="margin-right:5px;">신용카드</th>
            <tr style="height:90px;">
              <td>
                <select style="width:210px; padding-right:7px; margin-left:7px; font-size:15px;" id="card_type" name="cards" required autofocus>
                    <option value="카드">카드를 선택해주세요</option>
                    <option value="현대">현대</option>
                    <option value="신한">신한</option>
                    <option value="비씨">비씨</option>
                    <option value="KB국민">KB국민</option>
                    <option value="NH채움">NH채움</option>
                    <option value="삼성">삼성</option>
                    <option value="롯데">롯데</option>
                    <option value="하나">하나</option>
                    <option value="우리">우리</option>
                    <option value="우체국카드">우체국카드</option>
                  </select>


                  <select style="width:160px; padding-right:auto; padding-left:auto; display:inline-block; font-size:15px;" name="months" required autofocus>
                      <option value="일시불">일시불</option>
                      <option value="2개월">2개월</option>
                      <option value="3개월">3개월</option>
                    </select>
                <br><br>

                  <input style="width:210px; margin-left:7px; font-size:15px;" type="text" id="card_num" placeholder="카드번호를 입력하세요" required>
                  <input type="month" placeholder="카드 유효번호를 입력하세요" required>
                  <input type="text" id="cvc" placeholder="CVC 번호를 입력하세요" required>
                    </form>
                </td>
            </tr>

            <tr style="height:50px;">
              <form name="bank_type">
              <th><input type="checkbox" name="check" onclick='checkOnlyOne(this)' id="bankbook" style="margin-right:5px;">무통장 입금</th>
              <td><label style="font-family: 'GmarketSansLight'; font-size:15px; margin-left:5px;">
                <select style="width:210px; padding-right:7px; padding-left:7px;" name="banks" required autofocus>
                    <option value="은행">은행을 선택해주세요</option>
                    <option value="신한">신한</option>
                    <option value="KB국민">KB국민</option>
                    <option value="NH농협">NH채움</option>
                    <option value="하나">하나</option>
                    <option value="신협">신협</option>
                    <option value="수협">수협</option>
                    <option value="우리">우리</option>
                    <option value="우체국">우체국카드</option>
                  </select>
                </form>
              </td>
            </tr>

            <tr style="height:50px;">
              <form name="account_type">
              <th><input type="checkbox" name="check" onclick='checkOnlyOne(this)' id="account" style="margin-right:5px;">계좌이체</th>
              <td><label style=" font-family: 'GmarketSansLight';font-size:15px; margin-left:5px;">
                <select style=" width:210px; padding-right:7px; padding-left:7px;" name="banks2" required autofocus>
                    <option value="은행">은행을 선택해주세요</option>
                    <option value="신한">신한</option>
                    <option value="KB국민">KB국민</option>
                    <option value="NH농협">NH채움</option>
                    <option value="하나">하나</option>
                    <option value="신협">신협</option>
                    <option value="수협">수협</option>
                    <option value="우리">우리</option>
                    <option value="우체국">우체국카드</option>
                  </select>
                </form>
              </td>
            </tr>

            <tr style="height:50px;">
              <form name="phone_type">
              <th><input type="checkbox" name="check" onclick='checkOnlyOne(this)' id="cellphone" style="margin-right:5px;">휴대폰 결제</th>
              <td><label style="font-family: 'GmarketSansLight'; font-size:15px; margin-left:5px;">
                <select style="width:210px; padding-right:7px; padding-left:7px;" id="phone" name="phones" required autofocus>
                    <option value="통신사">통신사를 선택해주세요</option>
                    <option value="SKT">SKT</option>
                    <option value="KT">KT</option>
                    <option value="LG U+">LG U+</option>
                    <option value="알뜰폰">알뜰폰</option>
                  </select>
                    <input type="tel" id="p_tel" placeholder="휴대폰 번호 입력">
                </form>

              </td>
            </tr>
        </table>

        <div class="container text-center">
        <button class="btn btn-lg btn-login" type="submit" onclick="order();">결제하기</button>
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
