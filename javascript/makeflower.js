// 이미지 목록을 저장할 변수
        var $imgs = null;
        // 드래그 되는 이미지
        var $dragTarget = null;
        // 드래그 유무를 저장할 변수
        var dragSW=false;

        // 드래그 시작 위치을 저장할 변수
        var startImgX = 0;
        var startImgY = 0;

        // 드래그 되는 이미지를 최상위로 올리기 위해 사용되는 변수
        // 시작값은 100으로 시작, 클릭할때마다 1씩 증가 함
        var zIndex=100;

        // 선택 영역 패널(.select)을 저장할 변수
        var $selectPanel = null;
        // 선택 영역 패널의 left,top,right,bottom 값을 저장할 변수
        var selectAreaInfo = null;

        $(document).ready(function(){
            init();
            initImagePos();

            initEvent();
        })

        // 전역에서 사용할 요소 찾기
        function init(){
            $imgs = $(".preview img");
            // 선택 영역 패널
            $selectPanel = $(".select");
            // 선택 영역 위치 정보 구하기(값은 변하지 않기 때문에 시작 전에 구한다.)
            selectAreaInfo = {
                left:$selectPanel.offset().left,
                top:$selectPanel.offset().top,
                right:($selectPanel.offset().left + $selectPanel.width()),
                bottom:($selectPanel.offset().top + $selectPanel.height())
            }
        }

         // 이미지 위치 랜덤하게 설정하기
        function initImagePos(){
            $imgs.each(function(){
                var left = Math.floor(Math.random()*300);
                var top = Math.floor(Math.random()*340);
                $(this).css({
                    left:left,
                    top:top
                })
            })
        }

        // 드래그를 위한 이벤트 초기화
        function initEvent(){
            // 컨테이너 이미지에 mousedown 이벤트 등록
            $imgs.on("mousedown",function(e){

                $dragTarget = $(this);
                dragSW=true;

                // 시작 위치 값 저장하기
                var offset = $dragTarget.offset();
                startImgX = e.pageX-offset.left;
                startImgY = e.pageY-offset.top;


                 // 드래그 대상을 최상위로 만들기 위해 index 값 조절
                zIndex++;
                $dragTarget.css({
                    "z-Index":zIndex
                })

                activeDragEvent();

            })
        }

        // step #02-04 추가
        // 이벤트 활성화
        function activeDragEvent(){
            // 문서에 mousemove 이벤트 등록
            $(document).on("mousemove", function(e){
                if(dragSW==true){
                    // 기본 기능 취소
                    e.preventDefault();

                    // 문서에서 마우스 위치 알아내기
                    var endX = e.pageX-startImgX;
                    var endY = e.pageY-startImgY;

                    // 클릭한 이미지의 위치를 마우스 위치로 설정
                    $dragTarget.offset({
                        left:endX,
                        top:endY
                    })
                 }
            })

            // 문서에 mouseup 이벤트 등록
            $(document).on("mouseup",function(e){

                // 드랍 위치 처리
                checkSelectArea(e.pageX, e.pageY);

                // step #02-04 추가
                // 이벤트 비활성화
                $(document).off();

                // 드래그 초기화
                dragSW=false;
                $dragTarget=null;

            });
        }



        // 드랍 위치 처리
        function checkSelectArea(dropX, dropY){
            // 드랍 위치가 리스트 패널 위치인지 판단
            if(selectAreaInfo.left<dropX && selectAreaInfo.right>dropX) {
                if(selectAreaInfo.top<dropY && selectAreaInfo.bottom>dropY){
                    // 리스트 패널 위치에 드래그 요소 추가
                    $selectPanel.append($dragTarget);

                    // 드래그 요소에 걸린 이벤트 제거
                    $dragTarget.off();
                    $dragTarget = null;
                }
            }
        }
