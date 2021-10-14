$(window).on('load', function(){
  // tabBox('탭 클릭 버튼',{
  //   wrap: '버튼과 탭박스를 다같이 포함하고있는 부모',
  //   tabBox: '탭박스의 클래스명',
  //   actClass: '커스텀하고 싶은 액티브 클래스명',
  //   btnAttr: '버튼에 있는 attr'
  // });
  tabBox('.btn-tab',{
    wrap: '.tab-wrap01, .tab-wrap02',
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
    clickable: true,
  },
});


  var tab03_swiperSlide = new Swiper('.tab-box .swiper-container', {
    slidesPerView: 5,
    spaceBetween: 30,
    
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });


  //content-2 사진 슬라이드
  var Swiper2 = new Swiper(".slide2, .slide4", {
    slidesPerView: 4,
    spaceBetween: 50,
    autoplay: {
      delay: 6000,
      disableOnInteraction: false,
    },
    speed: 2000,
    pagination: {
      el: ".swiper-pagination",
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
        $('.swiper-box .swiper-slide-next').next().addClass('down-ani');
      }
    }
  });

  swiper2.on('slideChange', function () {
    console.log('슬라이드가 바뀌었습니다');
    $('.swiper-box .swiper-slide').removeClass('down-ani');
    setTimeout(function () {
      $('.swiper-box .swiper-slide-next').next().addClass('down-ani');
    }, 100)
  })


}


$(function () {
  swiper__init();
})


//팝업 박스 창
function Pop1__open(client, title, url) {
  $('.pop-1-bg').addClass('active');
  var $pop1 = $('.pop-1');

  $pop1.find('.client').text(client);
  $pop1.find('.title').text(title);
  $pop1.find('.img-boxs').html('<img src="' + url + '" controls="" autoplay="" muted></video>');
}

function Pop1__close() {
  $('.pop-1-bg').removeClass('active');
  var $pop1 = $('.pop-1');

  $pop1.find('.client').text('');
  $pop1.find('.title').text('');
  $pop1.find('.img-boxs').html('');
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
    var $boxItem = $this.closest('.hover-box').find('.item');
    $boxItem.removeClass('on');
    $boxItem.addClass('off');
    $this.removeClass('off');
    $this.addClass('on');
  })
}

$(function () {
  box__init();
})



/*호연이형 기본 탭박스 */
function tabBox(button,option){
  var $tabBtn = null;
  var $wrap = null;

  //선택한 요소의 탭박스
  var $btnAttr = null;
  var $tabId = null;
  var $nowTabBox = null;

  var $actvdBtn = null;
  var $actvdBox = null;
  var $actClass = null;

  function init(){
      $wrap = $(option.wrap);
      $tabBtn = $wrap.find(button);
      
      option.actClass == undefined ? $actClass = 'on' : $actClass = option.actClass;
      option.btnAttr == undefined ? $btnAttr = 'data-tab' : $btnAttr = option.btnAttr;
  }

  function mouEvent(){
      $tabBtn.on('click', function(e){
          e.preventDefault();
          var $this = $(this);
          
          //선택한 요소 중복 클릭 방지
          if(!$this.hasClass($actClass)){
              action($this);
          }
      });
  }

  function action(elem){
      // 선택한 요소의 탭 id값 찾기
      $tabId = elem.attr($btnAttr);
      $nowTabBox = $('#' + $tabId);
      // 다른 active 요소 찾기
      $actvdBtn = $wrap.find(button +'.'+ $actClass);
      $actvdBox = $wrap.find(option.tabBox +'.'+ $actClass);
      // 이전 active의 클래스 제거
      $actvdBtn.removeClass($actClass);
      $actvdBox.removeClass($actClass);
      // 선택한 요소 및 탭박스 클래스 추가
      elem.addClass($actClass);
      $nowTabBox.addClass($actClass);
  }

  function start(){
      init();
      mouEvent();
  }

  start();
}












