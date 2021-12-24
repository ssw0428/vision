$(window).on('load', function () {
    // tabBox('탭 클릭 버튼',{   wrap: '버튼과 탭박스를 다같이 포함하고있는 부모',   tabBox: '탭박스의 클래스명',
    // actClass: '커스텀하고 싶은 액티브 클래스명',   btnAttr: '버튼에 있는 attr' });
    tabBox('.btn-tab', {
        wrap: '.tab-wrap01',
        tabBox: '.tab-box'
    });

    tabBox('.btn-tab', {
        wrap: '.tab-wrap02',
        tabBox: '.tab-box'
    });
})

// content 소제목 aos 효과
window.addEventListener('load', function (event) {
    AOS.init();
});

// 메인 슬라이드 및 content-2 사진 슬라이드 묶음
function swiper__init() {

    // 메인 슬라이드
    var swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
            clickable: true
        },
        autoplay: {
            delay: 4000,
            disableOnInteraction: false
        },
        speed: 2000,
        pagination: {
            clickable: true
        }
    });

    // 교육시설 슬라이드
    var tab03_swiperSlide = new Swiper('.tab-box .slide1', {
        slidesPerView: 'auto',
        spaceBetween: 30,

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        }
    });

}

$(function () {
    swiper__init();
})


function photoswiper1__init() {
    //content-2 비쿨 사진 영상 슬라이드
    
    var Swiper2 = new Swiper(".gallery-box .slide2", {
        slidesPerView: 4,
        spaceBetween: 50,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false
        },
        speed: 2000,
        pagination: {
            clickable: true
        },
        navigation: {
            nextEl: '.slide-arrows .swiper-button-next',
            prevEl: '.slide-arrows .swiper-button-prev'
        },
        loop: true,
        on: {
            init: function () {
                console.log('작동중입니다');
                $('.swiper-box-js .swiper-slide-next')
                    .next()
                    .addClass('down-ani');
            }
        }
    });

    Swiper2.on('slideChange', function () {
        console.log('슬라이드가 바뀌었습니다');
        $('.swiper-box-js .swiper-slide').removeClass('down-ani');
        setTimeout(function () {
            $('.swiper-box-js .swiper-slide-next')
                .next()
                .addClass('down-ani');
        }, 100)
    })

}

$(function () {
    photoswiper1__init();
})

function photoswiper2__init() {
    //content-2 비쿨 사진 영상 슬라이드
    
    var Swiper2 = new Swiper(".gallery-box .slide4", {
        slidesPerView: 4,
        spaceBetween: 50,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false
        },
        speed: 2000,
        pagination: {
            clickable: true
        },
        navigation: {
            nextEl: '.slide-arrows .swiper-button-next',
            prevEl: '.slide-arrows .swiper-button-prev'
        },
        loop: true,
        on: {
            init: function () {
                console.log('작동중입니다');
                $('.swiper-box-js .swiper-slide-next')
                    .next()
                    .addClass('down-ani');
            }
        }
    });

    Swiper2.on('slideChange', function () {
        console.log('슬라이드가 바뀌었습니다');
        $('.swiper-box-js .swiper-slide').removeClass('down-ani');
        setTimeout(function () {
            $('.swiper-box-js .swiper-slide-next')
                .next()
                .addClass('down-ani');
        }, 100)
    })

}

$(function () {
    photoswiper2__init();
})


//팝업 박스 창
function Pop1__open(client, title, url) {
    $('.pop-1-bg').addClass('active');
    var $pop1 = $('.pop-1');

    $pop1
        .find('.client')
        .text(client);
    $pop1
        .find('.title')
        .text(title);
    $pop1
        .find('.img-boxs')
        .html(
            '<img src="' + url + '" controls="" autoplay="" muted></video>'
        );
}

function Pop1__close() {
    $('.pop-1-bg').removeClass('active');
    var $pop1 = $('.pop-1');

    $pop1
        .find('.client')
        .text('');
    $pop1
        .find('.title')
        .text('');
    $pop1
        .find('.img-boxs')
        .html('');
}

function Pop1__init() {
    $('.pop-1 .btn-close, .pop-1-bg').click(Pop1__close);
}

$(function () {
    Pop1__init();
})

function box__init() {
    $('.hover-box .item').mouseenter(function () {
        var $this = $(this);
        var $boxItem = $this
            .closest('.hover-box')
            .find('.item');
        $boxItem.removeClass('on');
        $boxItem.addClass('off');
        $this.removeClass('off');
        $this.addClass('on');
    })
}

$(function () {
    box__init();
})

// 홈페이지 메뉴 버튼 누를 때 내가 원하는 위치로 옮기기
function page__init() {
    $(document).ready(function () {
        $("#btn1").click(function () {
            var offset = $("#div1").offset(); //선택한 태그의 위치를 반환

            //animate()메서드를 이용해서 선택한 태그의 스크롤 위치를 지정해서 0.4초 동안 부드럽게 해당 위치로 이동함

            $("html").animate({
                scrollTop: offset.top
            }, 600);
        });

        $("#btn2").click(function () {
            var offset = $("#div2").offset(); //선택한 태그의 위치를 반환

            //animate()메서드를 이용해서 선택한 태그의 스크롤 위치를 지정해서 0.4초 동안 부드럽게 해당 위치로 이동함

            $("html").animate({
                scrollTop: offset.top
            }, 600);
        });

        $("#btn3").click(function () {
            var offset = $("#div3").offset();

            $("html").animate({
                scrollTop: offset.top
            }, 600);
        });

        $("#btn4").click(function () {
            var offset = $("#div4").offset();

            $("html").animate({
                scrollTop: offset.top
            }, 600);
        });
    });
}

$(function () {
    page__init();
})

//top 버튼
function scrollTop_init() {
    scrollTop('js-button', 500);
    function scrollTop(elem, duration) {
        let target = document.getElementById(elem);

        target.addEventListener('click', function () {
            let currentY = window.pageYOffset;
            let step = duration / currentY > 1
                ? 10
                : 100;
            let timeStep = duration / currentY * step;
            let intervalID = setInterval(scrollUp, timeStep);

            function scrollUp() {
                currentY = window.pageYOffset;
                if (currentY === 0) {
                    clearInterval(intervalID);
                } else {
                    scrollBy(0, -step);
                }
            }
        });
    }
}

$(function () {
    scrollTop_init();
})

//content-4 커뮤니티 페이징 및 슬라이드 다운, 업 구현
$(function () {
    $("div.head").click(function () {
        var $this = $(this);
        var $body = $this.next();
        var $li = $this.parent();

        if ($li.hasClass('notice-box') == true) {
            $li.removeClass('notice-box');
            $body.slideUp();
        } else {
            $li.addClass('notice-box');
            $body.slideDown();
        }
    });
});

function paging_init() {
    // 페이징 클릭시
    $('.paging a').on('click', function () {
        var index = $(this).index();
        $('.notice-boxs .notice-box-list').removeClass('on');
        $('.notice-boxs .notice-box-list')
            .eq(index)
            .addClass('on'); // 해당 내용 보임
        $('.paging a').removeClass('on');
        $(this).addClass('on'); // 불 들어옴
    });

    var nowIdx = 0; // 현재 페이지

    // 기본 함수
    function show(i) {
        nowIdx = i; // 클릭횟수
        var j = i * 3; // 클릭해서 넘어간 1번째 페이지
        $('.paging a').removeClass('on view');
        $('.paging a')
            .eq(j)
            .addClass('on'); // 클릭해서 넘어간 1번째 페이징 불
        $('.paging a')
            .eq(j)
            .addClass('view'); // 클릭해서 넘어간 페이징 3개 보임
        $('.paging a')
            .eq(j + 1)
            .addClass('view');
        $('.paging a')
            .eq(j + 2)
            .addClass('view');
        $('.notice-boxs .notice-box-list').removeClass('on');
        $('.notice-boxs .notice-box-list')
            .eq(j)
            .addClass('on'); // 클릭해서 넘어간 1번째 페이지 해당 내용 보임
    }

    // 페이징 123일때 함수
    function showFirst() {
        $('.paging a').removeClass('view');
        $('.paging a')
            .eq(0)
            .addClass('view'); // 페이징 3개 보임 (불 처리 안함)
        $('.paging a')
            .eq(1)
            .addClass('view');
        $('.paging a')
            .eq(2)
            .addClass('view');
    }

    // 페이징 마지막일때 함수
    function showLast(i) {
        nowIdx = i; // 클릭횟수
        var j = i * 3; // 클릭해서 넘어간 1번째 페이지
        $('.paging a').removeClass('view');
        $('.paging a')
            .eq(j)
            .addClass('view'); // 페이징 마지막 3개 보임 (불 처리 안함)
        $('.paging a')
            .eq(j + 1)
            .addClass('view');
        $('.paging a')
            .eq(j + 2)
            .addClass('view');
    }

    var total = $('.paging a').length;
    var result = parseInt(total / 3); // 3페이징씩 몇개인지

    $('.next').on('click', function () { // 다음버튼 클릭시
        var viewIdx = nowIdx + 1; // 현재 클릭수 = 이전 클릭수 + 1
        if (viewIdx > result) { // 마지막 페이지인데 다음버튼 클릭하면 (클릭수 초과)
            viewIdx = result; // 계속 마지막 페이지이게
            showLast(viewIdx); // 마지막 페이지 함수 실행
        } else {
            show(viewIdx);
        } // 마지막 페이지 아니면 기본 함수 실행

    });

    $('.prev').on('click', function () { // 이전버튼 클릭시
        var viewIdx = nowIdx - 1; // 현재 클릭수 = 이전 클릭수 -1
        if (viewIdx < 0) { // 첫번째 페이지인데 이전버튼 클릭하면 (클릭수 음수)
            viewIdx = 0; // 계속 첫번째 페이지이게
            showFirst(); // 첫번째 페이지 함수 실행
        } else {
            show(viewIdx);
        } // 첫번째 페이지 아니면 기본 함수 실행

    });

    $('.first').on('click', function () {
        show(0);
    });

    $('.last').on('click', function () {
        show(result);
        $('.paging a').removeClass('on');
        $('.paging a')
            .last()
            .addClass('on');
    });
}

$(function () {
    paging_init();
})

function naverMap_init() {
    var HOME_PATH = window.HOME_PATH || '.';
var cityhall = new naver.maps.LatLng(36.344870, 127.523010),
    map = new naver.maps.Map('map', {
        center: cityhall,
        zoom: 18
    }),
    marker = new naver.maps.Marker({
        map: map,
        position: cityhall
    });

var contentString = [
        '<div class="iw_inner">',
        '   <h3>비쿨학원</h3>',
        '   <p>충청북도 옥천군 군북면 증약리 495 군북면 증약리 495-5번지<br />',
        '   </p>',
        '</div>'
    ].join('');

var infowindow = new naver.maps.InfoWindow({
    content: contentString,
    maxWidth: 140,
    backgroundColor: "#eee",
    borderColor: "#2db400",
    borderWidth: 5,
    anchorSize: new naver.maps.Size(30, 30),
    anchorSkew: true,
    anchorColor: "#eee",
    pixelOffset: new naver.maps.Point(20, -20)
});

naver.maps.Event.addListener(marker, "click", function(e) {
    if (infowindow.getMap()) {
        infowindow.close();
    } else {
        infowindow.open(map, marker);
    }
});
}

$(function () {
    naverMap_init();
})


/*호연이형 기본 탭박스 */
function tabBox(button, option) {
    var $tabBtn = null;
    var $wrap = null;

    //선택한 요소의 탭박스
    var $btnAttr = null;
    var $tabId = null;
    var $nowTabBox = null;

    var $actvdBtn = null;
    var $actvdBox = null;
    var $actClass = null;

    function init() {
        $wrap = $(option.wrap);
        $tabBtn = $wrap.find(button);

        option.actClass == undefined
            ? $actClass = 'on'
            : $actClass = option.actClass;
        option.btnAttr == undefined
            ? $btnAttr = 'data-tab'
            : $btnAttr = option.btnAttr;
    }

    function mouEvent() {
        $tabBtn.on('click', function (e) {
            e.preventDefault();
            var $this = $(this);

            //선택한 요소 중복 클릭 방지
            if (!$this.hasClass($actClass)) {
                action($this);
            }
        });
    }

    function action(elem) {
        // 선택한 요소의 탭 id값 찾기
        $tabId = elem.attr($btnAttr);
        $nowTabBox = $('#' + $tabId);
        // 다른 active 요소 찾기
        $actvdBtn = $wrap.find(button + '.' + $actClass);
        $actvdBox = $wrap.find(option.tabBox + '.' + $actClass);
        // 이전 active의 클래스 제거
        $actvdBtn.removeClass($actClass);
        $actvdBox.removeClass($actClass);
        // 선택한 요소 및 탭박스 클래스 추가
        elem.addClass($actClass);
        $nowTabBox.addClass($actClass);
    }

    function start() {
        init();
        mouEvent();
    }

    start();
}
