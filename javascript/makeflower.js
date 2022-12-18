var button1; //전역변수 선언
var button2; //전역변수 선언
var button3; //전역변수 선언
var button4; //전역변수 선언
var cancel_btn;

var total_price=0;

var  flower1_count=0;
var  flower2_count=0;
var  flower3_count=0;
var  flower4_count=0;
var  flower5_count=0;
var  flower6_count=0;
var  flower7_count=0;
var  flower8_count=0;

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



  document.getElementById('myribbon').value = myribbon;
  document.getElementById('mybouquet').value = mybouquet;
  document.getElementById('total_price').value = total_price;
  document.getElementById('flower1_count').value = flower1_count;
  document.getElementById('flower2_count').value = flower2_count;
  document.getElementById('flower3_count').value = flower3_count;
  document.getElementById('flower4_count').value = flower4_count;
  document.getElementById('flower5_count').value = flower5_count;
  document.getElementById('flower6_count').value = flower6_count;
  document.getElementById('flower7_count').value = flower7_count;
  document.getElementById('flower8_count').value = flower8_count;

}

function plus_price(m){
  total_price=total_price/1+document.getElementById('flower'+m).innerHTML.replace(',',"").replace('원',"");

}

window.onload=function(){
  main_button = document.getElementById("preivew");
  button1=document.getElementById("button1"); //초기화
  button2=document.getElementById("button2"); //초기화
  button3=document.getElementById("button3"); //초기화
  button4=document.getElementById("button4"); //초기화
  button5=document.getElementById("button5"); //초기화
  button6=document.getElementById("button6"); //초기화
  button7=document.getElementById("button7"); //초기화
  button8=document.getElementById("button8"); //초기화
  cancel_btn=document.getElementById("cancel"); //초기화
  refresh_btn=document.getElementById("refresh"); //초기화

  m1=function makeImg1(){
    total_price=total_price+document.getElementById('flower1').innerHTML.replace(',',"").replace('원',"")/1;
    img=document.createElement("img");
    img.src="picture/makingFlower/yellow1.png"
    img.style="position: absloute; right:85px; bottom: 80px; width:300px; height:350px;";
    $("#preview").append(img);
    flower1_count=flower1_count+1;

  }

  m2=function makeImg2(){
    img=document.createElement("img");
    img.src="picture/makingFlower/pink.png"
    img.style="position: absloute; bottom: 70px; right:120px; width:250px; height:350px;";
    $("#preview").append(img);
    total_price=total_price+document.getElementById('flower2').innerHTML.replace(',',"").replace('원',"")/1;
    flower2_count=flower2_count+1;
  }

  m3=function makeImg3(){
    img=document.createElement("img");
    img.src="picture/makingFlower/white1.png"
    img.style="position: absloute; bottom: 55px; right:80px; width:300px; height:400px;";
    $("#preview").append(img);
    total_price=total_price+document.getElementById('flower3').innerHTML.replace(',',"").replace('원',"")/1;
    flower3_count=flower3_count+1;
  }

  m4=function makeImg4(){
    img=document.createElement("img");
    img.src="picture/makingFlower/red1.png"
    img.style="position: absloute; bottom: 70px; right:80px; width:250px; height:370px;";
    $("#preview").append(img);
    total_price=total_price+document.getElementById('flower4').innerHTML.replace(',',"").replace('원',"")/1;
    flower4_count=flower4_count+1;
  }

  m5=function makeImg5(){
    img=document.createElement("img");
    img.src="picture/makingFlower/purple1.png"
    img.style="position: absloute; bottom: 55px; right:70px; width:300px; height:400px;"
    $("#preview").append(img);
    total_price=total_price+document.getElementById('flower5').innerHTML.replace(',',"").replace('원',"")/1;
    flower5_count=flower5_count+1;
  }

  m6=function makeImg6(){
    img=document.createElement("img");
    img.src="picture/makingFlower/orange.png"
    img.style="position: absloute; bottom: 55px; right:65px; width:300px; height:400px;"
    $("#preview").append(img);
    total_price=total_price+document.getElementById('flower6').innerHTML.replace(',',"").replace('원',"")/1;
    flower6_count=flower6_count+1;
  }

  m7=function makeImg7(){
    img=document.createElement("img");
    img.src="picture/makingFlower/skyblue.png"
    img.style="position: absloute; bottom: 50px; right:70px; width:300px; height:400px;"
    $("#preview").append(img);
    total_price=total_price+document.getElementById('flower7').innerHTML.replace(',',"").replace('원',"")/1;
    flower7_count=flower7_count+1;
  }

  m8=function makeImg8(){
    img=document.createElement("img");
    img.src="picture/makingFlower/blue2.png"
    img.style="position: absloute; bottom: 65px; right:75px; width:260px; height:370px;"
    $("#preview").append(img);
    total_price=total_price+document.getElementById('flower8').innerHTML.replace(',',"").replace('원',"")/1;
    flower8_count=flower8_count+1;
  }

  refresh_f=function refreshImg(){
    $("#preview").empty();
    total_price=0;
    flower1_count=0;
    flower2_count=0;
    flower3_count=0;
    flower4_count=0;
    flower5_count=0;
    flower6_count=0;
    flower7_count=0;
    flower8_count=0;
  }

  // cancel_f=function cancelImg(){
  //   $("#preview").children().last().detach();
  // }

  t1=function(){
    setTimeout(m1,100);	//0.5초뒤 m을 실행
  }
  t2=function(){
    setTimeout(m2,100);	//0.5초뒤 m을 실행
  }
  t3=function(){
    setTimeout(m3,100);	//0.5초뒤 m을 실행
  }
  t4=function(){
    setTimeout(m4,100);	//0.5초뒤 m을 실행
  }
  t5=function(){
    setTimeout(m5,100);	//0.5초뒤 m을 실행
  }
  t6=function(){
    setTimeout(m6,100);	//0.5초뒤 m을 실행
  }
  t7=function(){
    setTimeout(m7,100);	//0.5초뒤 m을 실행
  }
  t8=function(){
    setTimeout(m8,100);	//0.5초뒤 m을 실행
  }


  t10=function(){
    setTimeout(refresh_f,100);	//0.5초뒤 m을 실행
  }


  button1.onclick=t1; //클릭하면 t 실행
  button2.onclick=t2; //클릭하면 t 실행
  button3.onclick=t3; //클릭하면 t 실행
  button4.onclick=t4; //클릭하면 t 실행
  button5.onclick=t5; //클릭하면 t 실행
  button6.onclick=t6; //클릭하면 t 실행
  button7.onclick=t7; //클릭하면 t 실행
  button8.onclick=t8; //클릭하면 t 실행
  refresh_btn.onclick=t10; //클릭하면 t 실행

}
