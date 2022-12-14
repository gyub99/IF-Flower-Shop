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
    <script>
      var data=getParameterByName('index');
      function choose_bouquet(check_click_thumbnail){
        mybouquet=document.getElementsByClassName('bouquet');
        for (var i=0; i<6; i++){
          if (mybouquet[i].style.border === '2px solid black') {
            mybouquet[i].style.border = 'none';
          }
        }
        mybouquet[check_click_thumbnail].style.border='2px solid black';
      }
      function choose_ribbon(check_click_thumbnail){
        myribbon=document.getElementsByClassName('ribbon');
        for (var i=0; i<6; i++){
          if (myribbon[i].style.border === '2px solid black') {
            myribbon[i].style.border = 'none';
          }
        }
        myribbon[check_click_thumbnail].style.border='2px solid black';
        return check_click_thumbnail;
      }
      function check_order(){
        var myribbon;
        var mybouquet;
        var i;
        var k;
        var ribbon=document.getElementsByClassName('ribbon');
        var bouquet=document.getElementsByClassName('bouquet');
        for (i=0;i<6; i++){
          if (ribbon[i].style.border === '2px solid black'){
            myribbon=i;
            break;
          }
        }
        for (k=0; k<6; k++){
          if (bouquet[k].style.border === '2px solid black'){
            mybouquet=k;
            break;
          }
        }
        if ((i==6)||(k==6)){
          alert("포장지 색과 리본 색을 모두 선택해주세요!");
        }
        else {
          if (total_price==0){
            alert('꽃을 선택해주세요!');
          }
          else {
            alert('DIY 꽃다발을 ' + (mybouquet/1+1) + "번 색 포장지와 " + (myribbon/1+1) + "번 색 리본으로 선택하셨습니다.\n총 "+total_price.toLocaleString()+'원 입니다.');
            linking_basket(total_price);
          }
        }
      }
      function plus_price(m){
        total_price=total_price/1+document.getElementById('flower'+m).innerHTML.replace(',',"").replace('원',"");

      }
    </script>
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


    <div class="container title">
      <div class="title">
      <h2 class="make-bouquet-title"><strong>나만의 꽃다발을 만들어봐요!</strong></h2>
      <h5>이곳에서 원하는 색상, 꽃 종류, 스타일을 선택해보세요!</h5>
    </div>


    <div class="contents" >
      <div class="product row">
        <div class="preview-container col-sm-6">
          <div id="preview" class="preview"></div>
          <div class="refresh-button" style="padding:10px;"><button id="refresh" class="btn" style="font-size:20px;"><i class="glyphicon glyphicon-refresh" style="color:#73a9ad;margin-right:15px;"></i>초기화</button></div>
        </div>

        <div class="choosing col-sm-6">

          <div class="row">
              <div class="col-sm-3 choose-flower">
                <button type="button" id="button1" class="select-flower"><img class="img-responsive" src="picture/makingFlower/yellow1.png" alt="flower1"/>
                <div class="price" id="flower1"> 7,000원</div></button>
              </div>
              <div class="col-sm-3 choose-flower">
                <button type="button" id="button2" class="select-flower"><img class="img-responsive" src="picture/makingFlower/pink.png" alt="flower2"/>
                <div class="price" id="flower2"> 9,000원</div></button>
              </div>
              <div class="col-sm-3 choose-flower">
                <button type="button" id="button3" class="select-flower"><img class="img-responsive" src="picture/makingFlower/white1.png" alt="flower3"/>
                <div class="price" id="flower3"> 9,000원</div></button>
              </div>
              <div class="col-sm-3 choose-flower">
                <button type="button" id="button4" class="select-flower"><img class="img-responsive" src="picture/makingFlower/red1.png" alt="flower4"/>
                <div class="price" id="flower4"> 7,000원</div></button>
              </div>
            </div>

            <!-- // 구분선 -->
            <div class="image-gallery-thumbnails-wrapper row" style="margin-top:10px;">
              <div class="col-sm-3 choose-flower">
              <button type="button" id="button5" class="select-flower"><img class="img-responsive" src="picture/makingFlower/purple1.png" alt="flower5"/>
                <div class="price" id="flower5"> 6,000원</div></button>
              </div>
              <div class="col-sm-3 choose-flower">
                <button type="button" id="button6" class="select-flower"><img class="img-responsive" src="picture/makingFlower/orange.png" alt="flower6"/>
                  <div class="price" id="flower6"> 5,000원</div></button>
              </div>
              <div class="col-sm-3 choose-flower">
                <button type="button" id="button7" class="select-flower"><img class="img-responsive" src="picture/makingFlower/skyblue.png" alt="flower7"/>
                  <div class="price" id="flower7"> 6,000원</div></button>
                </div>
              <div class="col-sm-3 choose-flower">
                <button type="button" id="button8" class="select-flower"><img class="img-responsive" src="picture/makingFlower/blue2.png" alt="flower8"/>
                  <div class="price" id="flower8"> 5,000원</d></button>
              </div>
            </div>

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
              <script>document.write('<button class="buy-item col-sm-5" onclick="check_order();">장바구니</button>')</script>
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
