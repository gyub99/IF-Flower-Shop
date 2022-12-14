
<!DOCTYPE html>
<html>
  <head>
    <title> IF FLOWER SHOP </title>
    <meta charset="utf-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <!-- 폰트 -->
<link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/moonspam/NanumSquare/master/nanumsquare.css">
<!-- 위에 2개가 폰트 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
@font-face {
    font-family: 'Cafe24Oneprettynight';
    src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_twelve@1.1/Cafe24Oneprettynight.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}

@font-face {
     font-family: 'S-CoreDream-3Light';
     src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_six@1.2/S-CoreDream-3Light.woff') format('woff');
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


body{
       height: 100%;
       background-image:url(picture/intro1.png);
       background-repeat: no-repeat;
       background-size : cover;
     }

.title{
    font-family: 'GmarketSansBold';
    background: linear-gradient(to right, #DCE35B, #45b649);
 -webkit-background-clip: text;
 -webkit-text-fill-color: transparent;
 padding:30px;
    font-size:80px;
}

.subtitle{
  font-family: 'GmarketSansLight';
    color:white;
    font-size:70px;
}

  .log{
    font-family: 'GmarketSansBold';
    font-size:18px;
    background-color:#c4d4e0;
    margin-top:10px;
    padding-top:5px;
    padding-bottom:5px;
    border:none;
    outline:0;
    width:300px;
    height:60px;
}

.input1{
width:300px;
height:50px;
outline:none;
border-top:none;
border-left:none;
border-right:none;
border-bottom:none;
}

.contents{
  padding-top:200px;
}

  .formstyle{
      padding : 10px;
      padding-left:15%;
    }

  .btn-login{
  width:400px;
  height:60px;
  background-color:white;
  border: 1px solid grey;
  }

  input::placeholder {
    font-family: 'S-CoreDream-3Light';
  }

  .introduce{
    padding-left:7.5%;
  }

</style>
</head>

<body>
  <?php
  //세션 스타트 해주여야 session전역변수 사용할 수 있다.
  if(!session_id()) {
	session_start();
  }
  if(isset($_SESSION['signup_alert'])){
    if (isset($_SESSION['message']) && $_SESSION['signup_alert']==true):
      ?>
      <div class="alert alert-<?=$_SESSION['msg_type']?>">
        <?php
        echo $_SESSION['message'];
        ?>
      </div>
      <?php
      $_SESSION['signup_alert']=false;
      $_SESSION = array();
      session_destroy();
    ?>
  <?php endif;} ?>

  <div class="container-fluid contents">
        <div class="row">
          <div class="col-md-6 introduce">
             <h1 class="title"> IF SHOP</h1>
             <h3 style="font-family: 'GmarketSansLight';"> IF FLOWER SHOP에 오신 걸 환영합니다.</h4>
             <h3 style="font-family: 'GmarketSansLight';"> 로그인을 하시고 더 많은 혜택을 누려보세요!</h4>
          </div>

          <div class="col-md-6 formstyle">
            <form action="login_process.php" method="post">
              <label style="font-family: 'S-CoreDream-3Light'; font-size:18px;">아이디</label><br>
              <input type="id" class="input1" id="ID" name="id" placeholder="  아이디를 입력하세요" required autofocus><br><br>
              <label style="font-family: 'S-CoreDream-3Light'; font-size:18px;">패스워드</label><br>
              <input class="input1" type="password" id="PW" name="pw" placeholder="  비밀번호를 입력하세요" required><br><br>
              <input type="submit" class="log" value="로그인">
            </form>

            <a href="register.php" style="color:black;"><input type="button" class="log" value="회원가입"/></a>
          </div>
        </div>


  </body>
</html>
