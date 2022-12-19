<?php
    include "connect.php";


?>

<!DOCTYPE html>
<html>
  <head>
    <title>IF Flower Shop</title>
    <meta charset="utf-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"/>
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/qna.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script rel="javascript" src="javascript/product.js"></script>
    <script rel="javascript" src="javascript/get_index.js"></script>
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

    <?php
    $question_id='';
    $question_id=$_GET['no'];
    $result=$mysqli->query("SELECT * FROM qna WHERE question_id='{$question_id}'") or die($mysqli->error());
    $row = $result->fetch_assoc();
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

    <div class="container contents">
      <div class="title">
        <h2 class="qna-title"><strong>Q & A</strong></h2>
      </div>
      <div class="justify-content-center qna-contents-container">
        <div class="regist-container">
          <div class="regist"><b>등록자</b></div>
          <div class="regist-user"><?php echo $row['user_id']; ?></div>
        </div>
        <hr>
        <div class="question-container">
          <div class="question"><b>Question.</b></div>
          <div class="question-content"><?php echo $row['question_contents']; ?></div>
        </div>
        <?php if ($row['answer_contents']){ ?>
        <hr>
        <div class="answer-container">
          <div class="answer"><b>Answer.</b></div>
          <div class="answer-content"><?php echo $row['answer_contents']; ?></div>
         </div>
        <?php } ?>
      </div>
    <div class="write-qna">
      <a class="write-button" href="qna.php">돌아가기</a>
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
