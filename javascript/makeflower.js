var button1; //전역변수 선언
var button2; //전역변수 선언
var button3; //전역변수 선언
var button4; //전역변수 선언
var cancel_btn;

var total_price=0;

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
    img.style="position: absloute; bottom: 45px; right:50px; width:300px; height:400px;";
    $("#preview").append(img);

  }

  m2=function makeImg2(){
    img=document.createElement("img");
    img.src="picture/makingFlower/pink.png"
    img.style="position: absloute; bottom: 40px; right:45px; width:250px; height:350px;";
    $("#preview").append(img);
    total_price=total_price+document.getElementById('flower2').innerHTML.replace(',',"").replace('원',"")/1;
  }

  m3=function makeImg3(){
    img=document.createElement("img");
    img.src="picture/makingFlower/white1.png"
    img.style="position: absloute; bottom: 45px; right:50px; width:300px; height:400px;";
    $("#preview").append(img);
    total_price=total_price+document.getElementById('flower3').innerHTML.replace(',',"").replace('원',"")/1;
  }

  m4=function makeImg4(){
    img=document.createElement("img");
    img.src="picture/makingFlower/red1.png"
    img.style="position: absloute; bottom: 50px; right:50px; width:250px; height:370px;";
    $("#preview").append(img);
    total_price=total_price+document.getElementById('flower4').innerHTML.replace(',',"").replace('원',"")/1;
  }

  m5=function makeImg5(){
    img=document.createElement("img");
    img.src="picture/makingFlower/purple1.png"
    img.style="position: absloute; bottom: 45px; right:50px; width:300px; height:400px;"
    $("#preview").append(img);
    total_price=total_price+document.getElementById('flower5').innerHTML.replace(',',"").replace('원',"")/1;
  }

  m6=function makeImg6(){
    img=document.createElement("img");
    img.src="picture/makingFlower/orange.png"
    img.style="position: absloute; bottom: 45px; right:45px; width:300px; height:400px;"
    $("#preview").append(img);
    total_price=total_price+document.getElementById('flower6').innerHTML.replace(',',"").replace('원',"")/1;
  }

  m7=function makeImg7(){
    img=document.createElement("img");
    img.src="picture/makingFlower/skyblue.png"
    img.style="position: absloute; bottom: 40px; right:50px; width:300px; height:400px;"
    $("#preview").append(img);
    total_price=total_price+document.getElementById('flower7').innerHTML.replace(',',"").replace('원',"")/1;
  }

  m8=function makeImg8(){
    img=document.createElement("img");
    img.src="picture/makingFlower/blue2.png"
    img.style="position: absloute; bottom: 35px; right:40px; width:260px; height:370px;"
    $("#preview").append(img);
    total_price=total_price+document.getElementById('flower8').innerHTML.replace(',',"").replace('원',"")/1;
  }

  refresh_f=function refreshImg(){
    $("#preview").empty();
    total_price=0; 
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
