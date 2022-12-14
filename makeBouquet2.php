<?php include "connect.php" ?>
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
          alert("????????? ?????? ?????? ?????? ?????? ??????????????????!");
        }
        else {
          if (total_price==0){
            alert('?????? ??????????????????!');
          }
          else {
            alert('DIY ???????????? ' + (mybouquet/1+1) + "??? ??? ???????????? " + (myribbon/1+1) + "??? ??? ???????????? ?????????????????????.\n??? "+total_price.toLocaleString()+'??? ?????????.');
            linking_basket(total_price);
          }
        }
      }
      function plus_price(m){
        total_price=total_price/1+document.getElementById('flower'+m).innerHTML.replace(',',"").replace('???',"");

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
    <!-- ???????????? -->
    <?php
    //?????? ????????? ???????????? session???????????? ????????? ??? ??????.
    if(!session_id()) {
  	session_start();
    }
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
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="???????????? ?????? ????????? ??????????????????" aria-label="Search" style = "border: 1.5px solid #c4dfaa; width:300px;">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>


    <div class="container title">
      <div class="title">
      <h2 class="make-bouquet-title"><strong>????????? ???????????? ???????????????!</strong></h2>
      <h5>???????????? ????????? ??????, ??? ??????, ???????????? ??????????????????!</h5>
    </div>


    <div class="contents" >
      <div class="product row">
        <div class="preview-container col-sm-6">
          <div id="preview" class="preview">

          </div>
          <div class="refresh-button" style="padding:10px;"><button id="refresh" class="btn" style="font-size:20px;"><i class="glyphicon glyphicon-refresh" style="color:#73a9ad;margin-right:15px;"></i>?????????</button></div>
        </div>

        <div class="choosing col-sm-6">

          <div class="row">

              <?php
              while ($row=$all_custom_flowers->fetch_assoc()) {
                    ?>
              <div class="col-sm-3 choose-flower">
                <button type="button" id="button<?php echo $row['custom_flower_id'] ?>" class="select-flower"><a href="flower_making_process.php?id=<?php echo $row['custom_flower_id'] ?>"><img class="img-responsive" src="<?php echo $row["custom_flower_image"]?>" alt="flower1"/>
                <div class="price" id="flower1"><?php echo $row["custom_flower_price"]?></div></button>
              </div>
                <?php }?>

            </div>

            <!-- // ????????? -->
            <div class="image-gallery-thumbnails-wrapper row" style="margin-top:10px;">


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
              <div class="col-sm-5"></div>
              <script>document.write('<button class="buy-item col-sm-5" onclick="check_order();">????????????</button>')</script>
            </div>
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
