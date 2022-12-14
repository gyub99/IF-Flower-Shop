<?php
    include "connect.php";
?>
<?php
session_start();
$id='';
$id=$_GET['product_id'];
$_SESSION['product_id']=$id;

$all_products=$mysqli->query("SELECT * FROM product") or die($mysqli->error);
$product_detail=$mysqli->query("SELECT * FROM product where product_id=$id") or die($mysqli->error);
$row=$product_detail->fetch_array();
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
    <link rel="stylesheet" href="css/product_detail.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script rel="javascript" src="javascript/product.js"></script>
    <script rel="javascript" src="javascript/get_index.js"></script>
    <script>
      var data=getParameterByName('index');
      function check_click(check_click_thumbnail){
        mythumbnail=document.getElementsByClassName('thumbnail');
        for (var i=0; i<4; i++){
          if (mythumbnail[i].style.border === '2px solid rgb(115, 169, 173)') {
            mythumbnail[i].style.border = 'none';
          }
        }
        mythumbnail[check_click_thumbnail].style.border='2px solid rgb(115, 169, 173)';
      }
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
          alert("????????? ?????? ?????? ?????? ?????? ??????????????????!");
        }
        else {
          alert((mybouquet/1+1) + "??? ??? ???????????? " + (myribbon/1+1) + "??? ??? ???????????? ?????????????????????.");
        }
        document.getElementById('myribbon').value = myribbon;
        document.getElementById('mybouquet').value = mybouquet;
      }

    </script>
  </head>

  <body>
    <!-- ???????????? -->
    <?php
    //?????? ????????? ???????????? session???????????? ????????? ??? ??????.



    if (isset($_SESSION['message']) && $_SESSION['is_login']==true && $_SESSION['login_alert']==true):
     ?>
     <div class="alert alert-<?=$_SESSION['msg_type']?>">
       <?php
        echo $_SESSION['message'];
        echo "<br>".$_SESSION['user_name']."??? ??????????????? IF ???????????????";
        $_SESSION['login_alert']=false;
        ?>

      </div>
    <?php endif ?>



    <!-- ???????????? -->
    <div class="header">
      <div class="container-fluid">
        <div class="register">
            <?php
            echo $_SESSION['user_name']."???"
            ?>
          &nbsp;|&nbsp;
          <a href="shopping basket.php" style="margin:10px; color:black;">My page</a>
          &nbsp;|&nbsp;
          <a href="logout.php" style="margin:10px; color:black;">Logout</a>


      <p style="text-align:center;"><a href="main.php"><img src="picture/logo/logo2.png" class="img-responsive img" id="logo_style"></a></p>
        </div>
      </div>
    </div>



    <!-- ??????????????? -->
  <!-- ??????????????? ?????? -->
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
          <input class="form-control mr-sm-2" name="search" type="search" placeholder="???????????? ?????? ????????? ??????????????????" aria-label="Search" style = "border: 1.5px solid #c4dfaa; width:300px;">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

    <div class="container contents">
      <div class="title">
        <h2 class="pro-det-title">Detail</h2>
      </div>
      <div class="product row">
        <div class="preview col-sm-6">
          <div id="pro-carousel" class="carousel slide text-center">
            <ol class="carousel-indicators">
              <li data-target="#pro-carousel" data-slide-to="0"></li>
              <li data-target="#pro-carousel" data-slide-to="1"></li>
              <li data-target="#pro-carousel" data-slide-to="2"></li>
              <li data-target="#pro-carousel" data-slide-to="3"></li>
            </ol>
          <div class="carousel-inner">
            <div class="item active">
                <img src="<?php echo $row["product_image"]?>" alt="pro-slide1" class="img-responsive" alt="pro-slide1" style="margin-left: auto; margin-right: auto;">
            </div>
            <div class="item">
              <img src="picture/f2.PNG" class="img-responsive" alt="pro-slide2" style="margin-left: auto; margin-right: auto;">
            </div>
            <div class="item">
              <img src="picture/f3.PNG" class="img-responsive" alt="pro-slide3" style="margin-left: auto; margin-right: auto;">
            </div>
            <div class="item">
              <img src="picture/f4.PNG" class="img-responsive" alt="pro-slide4" style="margin-left: auto; margin-right: auto;">
            </div>
          </div>
          <a class="left carousel-control" href="#pro-carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">previous</span>
          </a>
          <a class="right carousel-control" href="#pro-carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
          <div class="more-preview-container">
            <a role="button" data-target="#pro-carousel" data-slide-to="0"><img class="col-sm-2 thumbnail img-responsive" src="<?php echo $row["product_image"]?>" alt="prod1" onclick="check_click(0)" style = "border:2px solid #73a9ad;"/></a>
            <a role="button" data-target="#pro-carousel" data-slide-to="1"><img class="col-sm-2 thumbnail img-responsive" src="picture/f2.PNG" alt="prod2" onclick="check_click(1)"/></a>
            <a role="button" data-target="#pro-carousel" data-slide-to="2"><img class="col-sm-2 thumbnail img-responsive" src="picture/f3.PNG" alt="prod3" onclick="check_click(2)"/></a>
            <a role="button" data-target="#pro-carousel" data-slide-to="3"><img class="col-sm-2 thumbnail img-responsive" src="picture/f4.PNG" alt="prod4" onclick="check_click(3)"/></a>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="pro-info">
            <p class="pro-comment">
                <?php echo $row["product_description"]?>
            </p>
            <h2 class="pro-name">
              <?php echo $row["product_name"]?>
            </h2>

            <hr>

            <h4 class="pro-price"><?php echo number_format($row["product_price"]);
                    echo "???"?></h4>
            <hr>
          </div>

          <div class="del-comment">
            <p>5?????? ?????? ?????????, <strong style="color: #90c8ac">?????? ??????!</strong></p>
            <p><strong style="color:#c2dfaa">?????? ??????</strong>??? ?????? ????????? ???????????????</p>
          </div>

          <hr>
          <div class="color-container">
            <table>
                <tr>
                  <td style=" font-family: 'S-CoreDream-3Light';"><strong>????????? ??? ??????</strong></td>
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
                    <td style=" font-family: 'S-CoreDream-3Light';"><strong>?????? ??? ??????&nbsp&nbsp&nbsp&nbsp</strong></td>
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
              <div class="col-sm-4"></div>
              <form method="POST" action="product_process.php">
              <button class="buy-item col-sm-5" onclick="check_order();">????????????</button>
              <input type="hidden" id="myribbon" name="myribbon">
              <input type="hidden" id="mybouquet" name="mybouquet">
              </form>

            </div>
          </div>
        </div>
      </div>

    <!-- footer -->
    <footer class="container-fluid bg-main-footer">
      <div class="row footer-container">
        <div class="col-sm-6">
          <h2 style="font-family: 'Cafe24Oneprettynight';">IF ????????????</h2><h4>&#128222; 1644-1777</h4><br>
          <p style="font-family: 'S-CoreDream-3Light';"><strong>365 ????????????</strong>: ?????? 7??? - ?????? 7???</p>
          <p style="font-family: 'S-CoreDream-3Light';"><strong>24?????? ????????????</strong> : ???????????? ??????????????? ??????????????? ???????????????????????????.</p>
        </div>
        <div class="col-sm-6">
          <h2 style="font-family: 'Cafe24Oneprettynight';">IF ??????</h2><br>
          <p style="font-family: 'S-CoreDream-3Light';">????????? ???????????? : 123-45-6789<br>
            ??????????????? ???????????? : 2022-?????? ?????????-99999<br>
            ?????? : ?????? ????????? ????????? ????????? 1, ?????????????????? ????????????????????? S4-1???(???????????? 3???)<br>
            COPYRIGHT??? 2022 IF FLOWER. ALL RIGHTS RESERVED</p>
        </div>
      </div>
    </footer>

  </body>
</html>
