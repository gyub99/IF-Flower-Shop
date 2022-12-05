var button1; //전역변수 선언
var button2; //전역변수 선언
var button3; //전역변수 선언
var button4; //전역변수 선언

	window.onload=function(){
		button1=document.getElementById("button1"); //초기화
  	button2=document.getElementById("button2"); //초기화
    button3=document.getElementById("button3"); //초기화
    button4=document.getElementById("button4"); //초기화

		m1=function makeImg1(){
			img=document.createElement("img");
			img.src="picture/f1.png"
			$("#preview").append(img);
		}

    m2=function makeImg2(){
			img=document.createElement("img");
			img.src="picture/f2.png"
			$("#preview").append(img);
		}

    m3=function makeImg3(){
			img=document.createElement("img");
			img.src="picture/f3.png"
			$("#preview").append(img);
		}

    m4=function makeImg4(){
			img=document.createElement("img");
			img.src="picture/f4.png"
			$("#preview").append(img);
		}


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


		button1.onclick=t1; //클릭하면 t 실행
  	button2.onclick=t2; //클릭하면 t 실행
  	button3.onclick=t3; //클릭하면 t 실행
    button4.onclick=t4; //클릭하면 t 실행

	}
