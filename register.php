
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/register.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body{
       height: 100%;
       background-image:url(picture/intro2.png);
       background-repeat: no-repeat;
       background-size : cover;
     }


</style>
<script>
      function register(){
        var name=document.getElementById("NAME").value;
        var id=document.getElementById("ID").value;
        var pw=document.getElementById("PW").value;
        var email=document.getElementById("EMAIL").value;

        if(name!=null||id!=null||pw!=null||email!=null)
        {
          alert("이름 : "+name+"\n아이디 : "+id+"\n비밀번호 : "+pw+"\n이메일 : "+email+"\n\n입력하신 정보가 맞습니까? ");
          document.location.href="intro.php";
        }

        else{alert("정보를 모두 입력해주세요");}

    }

    </script>
</head>

<body>

  <div class="container-fluid contents">
        <div class="row">
          <div class="introduce col-md-6">
             <h1 class="title"> IF SHOP</h1>
             <h3 style="font-family: 'GmarketSansLight';"> IF FLOWER SHOP에 오신 걸 환영합니다.</h4>
             <h3 style="font-family: 'GmarketSansLight';"> 회원가입을 하시고 더 많은 혜택을 누려보세요!</h4>
        </div>
          <div class="col-md-6 formstyle">
            <form action="register_process.php" method="post">
              <label style="font-family: 'S-CoreDream-3Light'; font-size:18px;">이름</label><br>
              <input id="NAME" name="name" type="text" class="input1" placeholder=" 이름을 입력해주세요" required><br><br>
              <label style="font-family: 'S-CoreDream-3Light'; font-size:18px;">아이디</label><br>
              <input id="ID" type="id" name="id" class="input1"  placeholder=" 아이디를 입력해주세요" required><br><br>
              <label style="font-family: 'S-CoreDream-3Light'; font-size:18px;">비밀번호</label><br>
              <input id="PW" type="password" name="pw" class="input1"  placeholder="  비밀번호를 입력해주세요" required><br><br>
              <label style="font-family: 'S-CoreDream-3Light'; font-size:18px;">이메일</label><br>
              <input id="EMAIL" type="email" name="email" class="input1"  placeholder="  이메일을 입력해주세요" required><br><br>
              <label style="font-family: 'S-CoreDream-3Light'; font-size:18px;">주소</label><br>
              <input id="ADDRESS" type="text" name="address" class="input1"  placeholder="  주소를 입력해주세요" required><br><br>
              <input type="submit" class="log" value="가입하기"><br><br>
            </form>
              <a href="index.php" style="font-size:17px; font-family:'S-CoreDream-3Light'; margin-left:25px;">로그인으로 돌아가기</p></a><br>
          </div>
        </div>


</body>
</html>
