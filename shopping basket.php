<!DOCTYPE html>

<html>
  <head>
    <title>IF Flower Shop </title>
    <meta charset="utf-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/shopping basket.css">
  <link rel="stylesheet" href="css/main.css">
  <script type="text/javascript" src="javascript/get_index.js"></script>
  <script type="text/javascript" src="javascript/product.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>
    var data=getParameterByName('index');
      function plus(){
        document.getElementById('count').innerHTML = document.getElementById('count').innerHTML/1 + 1;
        total=get_total();
      }
      function minus(){
        if (document.getElementById('count').innerHTML > 1 ) {
          document.getElementById('count').innerHTML = document.getElementById('count').innerHTML/1 - 1;
          total = get_total();
        }
        else {
        }
      }
      function get_total(){
        var count_product=document.getElementById('count').innerHTML;
        var price;
        if (data<30) {
          price=product_list[data].price.replace(",","").replace("원","")/1 * count_product;
        }
        else {
          price=data*count_product;
        }
        var total = price + 2500;
        document.getElementById('product_info_total').innerHTML=total.toLocaleString()+'원';
        document.getElementById('foot_price').innerHTML=price.toLocaleString()+'원';
        document.getElementById('foot_total').innerHTML=total.toLocaleString()+'원';
        return price;
      }
      function buy_confirm(){
        var name;
        if (data>30){
          name="DIY 꽃다발";
        }
        else {
          name=product_list[data].name;
        }
        var total=document.getElementById('foot_total').innerHTML.replace(/ /g,"").replace("\n","");
        var count=document.getElementById('count').innerHTML;
        alert("주문하신 상품 : "+name+" "+count+"개\n 총 " +total+ " 입니다.");
        location.href="order.html";
      }

        function send_page(){
          var name_form = document.getElementById("name").value;
          var email_form = document.getElementById("email").value;
          var send_content =document.getElementById("contact-contents").value;

          if(name_form.length == 0){
            alert("이름을 입력해 주세요.");
          }

          else if(email_form.length == 0){
          alert("이메일을 입력해 주세요.");
          }
          else if(send_content.length == 0){
          alert("내용을 입력해 주세요.");
          }

          else if(name_form.length == 0 && email_form.length == 0){
          alert("이름과 이메일을 입력해 주세요.");
          }
          else{
            alert("문의가 접수되었습니다.");
          }
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
        echo "<br>".$_SESSION['user_name']."님 안녕하세요 딩가 꽃집입니다";
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

        <div class="container outbox">
          <div style="text-align:center; margin-bottom:40px;">
          <h3><strong>마이 페이지</strong></h3>
          </div>
          <div class="row title">
              <p class="col-sm-12 font_title">나의 주문 현황 <span class="desc">(최근 <b>3개월</b> 기준)</span></p>
          </div>
          <div class="row state">
            <div class="col-sm-3 order_list">
                <span class="glyphicon glyphicon-shopping-cart mypage-icon"></span>
                <p><strong>장바구니</strong></p>
                <script>
                  if (data==""){
                    document.write('<div class="state-count">0</div>')
                  }
                  else {
                    document.write('<div class="state-count">1</div>')
                  }
                </script>
            </div>
            <div class="col-sm-3 order_list">
              <span class="glyphicon glyphicon-list-alt mypage-icon"></span>
              <p><strong>구매한 상품</strong></p>
              <div class="state-count">0</div>
            </div>
            <div class="col-sm-3 order_list">
              <span class="glyphicon glyphicon-send mypage-icon"></span>
              <p><strong>배송중</strong></p>
              <div class="state-count">0</div>
            </div>
            <div class="col-sm-3 order_list">
              <span class="glyphicon glyphicon-ok mypage-icon"></span>
              <p><strong>배송완료</strong></p>
              <div class="state-count">2</div>
            </div>
        </ul>
      </div>
    </div>

        <!-- 장바구니 -->
        <div class="sh_bigbox row">
          <div>
            <table class="sh_main">
              <thead>
                <tr>
                  <th colspan='9' class="sh_box_title">상품 정보</th>
                </tr>
                <tr>
                  <th><span>상품 번호</span></th>
                  <th><span>이미지</span></th>
                  <th><span>상품 정보</span></th>
                  <th>가격</th>
                  <th>수량</th>
                  <th>배송비</th>
                  <th>합계</th>
                  <th>선택</th>
                </tr>
              </thead>

              <tbody>
                <tr class="inbox_tr" id="flexible">
                  <td class="inbox_td">
                  <script>
                    if (data==""){
                      document.getElementById('flexible').style.display="none";
                    }
                    if (data>30){
                      document.write('-');
                    }
                    else {
                      document.write(data);
                    }
                  </script>
                  </td>
                  <script>
                    if (data>30) {
                      document.write('<td style="padding: 10px;" class="inbox_td2"><img src="picture/product/6.PNG" alt="f1" class="sh_img"></td>')
                      document.write('<td class="inbox_td3">DIY 꽃다발</td>')
                      document.write('<td>'+data+'</td>');
                    }
                    else {
                      document.write('<td style="padding: 10px;" class="inbox_td2"><img src="picture/product/'+data+'.png" alt="f1" class="sh_img"></td>');
                      document.write('<td class="inbox_td3">'+product_list[data].name+'</td>');
                      document.write('<td>'+product_list[data].price+'</td>');
                    }
                  </script>
                    <td>
                  <a role="button" onclick="minus()">
                    <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                  </a>
                  <span id="count">1</span>
                  <a role="button" onclick="plus()">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                  </a>
                  </td>
                  <td>2,500원</td>
                  <td>
                    <span id="product_info_total">
                    <script>
                      get_total();
                    </script>
                    </span></td>
                  <td>
                    <button class="btn default" onclick="location.href='product.html'">취소하기</button>
                  </td>

                </tr>
              </tbody>

              <tfoot>
                <tr style="height:60px;">
                  <td colspan="9" class="foot_bt" style="text-align:center;">상품금액 <span id="foot_price">
                    <script>
                       total = get_total();
                       document.write(total.toLocaleString() + '원');
                    </script>
                  </span>
                  <span> + 배송비 2,500원 = 합계</span>&nbsp;<span id="foot_total">
                    <script>
                      total=get_total()/1+2500;
                    </script>
                  </span></td>
                </tr>
              </tfoot>
            </table> <br><br>

            <div class="bt_btn">
              <button class="btn" id="return-buy" onClick="buy_confirm();">구매하기</button>
            </div>
          </div>
        </div>
          <hr style="margin:50px 100px 50px 100px; border: 1px dotted">
        <div class="container-fluid contact-form text-center ">
          <form>
          <h3><strong>문의하기</strong></h3>
          <p>빠르고 신속하게 답변해드리겠습니다</p>
          <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-3 form-group">
            <input class="form-control" id="name" name="name" placeholder="Name" type="text">
            </div>
            <div class="col-sm-3 form-group">
            <input class="form-control" id="email" name="email" placeholder="email" type="text">
            </div>
            <div class="col-sm-3"></div>
          </div>
          <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 form-group">
              <textarea class="form-control" id="contact-contents" name="comments" placeholder="문의할 내용을 입력하세요" rows="7"></textarea><br>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 form-group">
              <button class="btn btn-default pull-center" style="font-size:16px;" type="submit" onclick="send_page();">Send</button>
            </div>
            <div class="col-sm-3"></div>
          </div>
        </form>
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
