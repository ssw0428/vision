<?php
include "/resources/include/head.php";
?>

<div id="container" class="wrap">
    <!--메인 슬라이드-->
    <div class="swiper mySwiper main-slide swiper-container con">
        <div class="swiper-wrapper">
            <div class="swiper-box swiper-slide">
                <img src="resources/images/main-slide-1.jpg" alt="">
                <div class="txt-box">
                    <p>하나님과 동행하는 비전스쿨</p>
                    <p>하나님과 동행하는 아이들</p>
                    <p>하나님과 동행하는 아이들</p>
                    <p>하나님과 동행하는 아이들</p>
                </div>
            </div>
            <div class="swiper-box swiper-slide">
                <img src="resources/images/main-slide-2.jpg" alt="">
                <div class="txt-box">
                    <p>다양한 경험, 새로운 창의성</p>
                    <p>하나님과 동행하는 아이들</p>
                    <p>하나님과 동행하는 아이들</p>
                    <p>하나님과 동행하는 아이들</p>
                </div>
            </div>
            <div class="swiper-box swiper-slide">
                <img src="resources/images/main-slide-3.jpg" alt="">
                <div class="txt-box">
                    <p>하나님과 함께하는 비전스쿨</p>
                    <p>하나님과 동행하는 아이들</p>
                    <p>하나님과 동행하는 아이들</p>
                    <p>하나님과 동행하는 아이들</p>
                </div>
            </div>
            <div class="swiper-box swiper-slide">
                <img src="resources/images/main-slide-4.jpg" alt="">
                <div class="txt-box">
                    <p>하나님과 동행하는 비전스쿨</p>
                    <p>하나님과 동행하는 아이들</p>
                    <p>하나님과 동행하는 아이들</p>
                    <p>하나님과 동행하는 아이들</p>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <!--content-1-->
    <section class="content-1">
        <div id="div1" class="title-box flex con" >
            <div class="bar"></div>
            <div class="title">
                비전스쿨은<br>하나님과 함께 동행하는 기독교 대안학교 입니다.
            </div>
        </div>
        <div class="tab-wrap01">
            <ul class="tab-btn-list flex con">
                <li>
                    <a class="btn-tab on" data-tab="tab-01">
                        비쿨 소개
                    </a>
                </li>
                <li>
                    <a class="btn-tab" data-tab="tab-02">
                        비쿨 과정
                    </a>
                </li>
                <li>
                    <a class="btn-tab" data-tab="tab-03">
                        교육 시설
                    </a>
                </li>
                <li>
                    <a class="btn-tab" data-tab="tab-04">
                        오시는 길
                    </a>
                </li>
            </ul>
            <div class="tab-box-wrap">
                <div id="tab-01" class="tab-box on flex con">
                    <div class="inner flex flex-ai-c">
                        <div class="tab-01-img-box">
                            <img src="/resources/images/img1.jpg" alt="">
                        </div>
                        <div class="box tab-01-box">
                            <div class="txt-1">
                                자유로운 학교, 비전스쿨
                            </div>
                            <div class="txt-2">
                                비전스쿨에 대한 소개가<br>들어가면 좋겠습니다
                            </div>
                            <div class="txt-3">
                                비전스쿨을 뭐라고 표현하면 좋을까요? 다함께 손을 잡고, 또는<br>
                                좋은 아이디어로 이 부분을 꾸미면 너무 좋겠습니다. 하하하하<br>
                                비쿨 소개 및 과정, 이야기, 입학 안내 4개나 있습니다. 화이팅!!!!
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-02" class="tab-box">
                    <div class="tab-02-box inner inner-1 flex flex-jc-sb">
                        <div class="txt-box txt-box-1">
                            <span class="num">01</span>
                            <span class="txt-1">교육 목적</span>
                            <div class="bar"></div>
                            <span class="txt-2">
                                비전스쿨 교육 목적에 대해서 이곳에 간략하게<br>
                                적으면 참 좋을 것 같습니다. 3줄에서 4줄정도가<br>
                                참 좋겠죠?? 아니면 좀 더 넣어도 좋습니다
                            </span>
                        </div>
                        <div class="txt-box txt-box-2">
                            <span class="num">02</span>
                            <span class="txt-1">교육 특징</span>
                            <div class="bar"></div>
                            <span class="txt-2">
                                비전스쿨 교육 특징에 대해서 이곳에 간략하게<br>
                                적으면 참 좋을 것 같습니다. 3줄에서 4줄정도가<br>
                                참 좋겠죠?? 아니면 좀 더 넣어도 좋습니다
                            </span>
                        </div>
                        <div class="txt-box txt-box-3">
                            <span class="num">03</span>
                            <span class="txt-1">교육 대상</span>
                            <div class="bar"></div>
                            <span class="txt-2">14세 - 19세 청소년</span>
                        </div>
                        <div class="txt-box txt-box-4">
                            <span class="num">04</span>
                            <span class="txt-1">교육 과정</span>
                            <div class="bar"></div>
                            <span class="txt-2">
                                1년 2학기 과정<br>
                                1년 2학기 과정<br>
                                1년 2학기 과정<br>
                            </span>
                        </div>
                    </div>
                </div>
                <div id="tab-03" class="tab-box">
                    <div class="slide1 swiper-container">
                        <div class="swiper-wrapper">
                            <div
                                class="item swiper-slide"
                                onclick="Pop1__open('교육시설', '비전스쿨 전경', 'resources/images/vs-img-1.jpg', 'resources/images/vs-img-2.jpg');">
                                <div>
                                    <a class="title">
                                        <span class="name1">비전스쿨 교육시설</span>
                                        <span class="name2">비전스쿨 전경</span>
                                        <span class="name3"></span>
                                    </a>
                                </div>
                                <img class="hor" src="resources/images/vs-img-1.jpg" alt="">
                            </div>
                            <div
                                class="item swiper-slide"
                                onclick="Pop1__open('교육시설', '비전스쿨 족구장', 'resources/images/vs-img-3.jpg');">
                                <div>
                                    <a class="title">
                                        <span class="name1">비전스쿨 교육시설</span>
                                        <span class="name2">족구장</span>
                                        <span class="name3"></span>
                                    </a>
                                </div>
                                <img class="hor" src="resources/images/vs-img-3.jpg" alt="">
                            </div>
                            <div
                                class="item swiper-slide"
                                onclick="Pop1__open('교육시설', '비전스쿨 사무실', 'resources/images/vs-img-4.jpg');">
                                <div>
                                    <a class="title">
                                        <span class="name1">비전스쿨 교육시설</span>
                                        <span class="name2">사무실</span>
                                        <span class="name3"></span>
                                    </a>
                                </div>
                                <img class="hor" src="resources/images/vs-img-4.jpg" alt="">
                            </div>
                            <div
                                class="item swiper-slide"
                                onclick="Pop1__open('교육시설', '비전스쿨 교실', 'resources/images/vs-img-5.jpg');">
                                <div>
                                    <a class="title">
                                        <span class="name1">비전스쿨 교육시설</span>
                                        <span class="name2">교실</span>
                                        <span class="name3"></span>
                                    </a>
                                </div>
                                <img class="hor" src="resources/images/vs-img-5.jpg" alt="">
                            </div>
                            <div
                                class="item swiper-slide"
                                onclick="Pop1__open('교육시설', '비전스쿨 교실', 'resources/images/vs-img-7.jpg');">
                                <div>
                                    <a class="title">
                                        <span class="name1">비전스쿨 교육시설</span>
                                        <span class="name2">교실</span>
                                        <span class="name3"></span>
                                    </a>
                                </div>
                                <img class="hor" src="resources/images/vs-img-7.jpg" alt="">
                            </div>
                            <div
                                class="item swiper-slide"
                                onclick="Pop1__open('교육시설',  '비전스쿨 대강의실', 'resources/images/vs-img-9.jpg');">
                                <div>
                                    <a class="title">
                                        <span class="name1">비전스쿨 교육시설</span>
                                        <span class="name2">대강의실</span>
                                        <span class="name3"></span>
                                    </a>
                                </div>
                                <img class="hor" src="resources/images/vs-img-9.jpg" alt="">
                            </div>
                            <div
                                class="item swiper-slide"
                                onclick="Pop1__open('교육시설', '비전스쿨 휴게실', 'resources/images/vs-img-10.jpg');">
                                <div>
                                    <a class="title">
                                        <span class="name1">비전스쿨 교육시설</span>
                                        <span class="name2">휴게실</span>
                                        <span class="name3"></span>
                                    </a>
                                </div>
                                <img class="hor" src="resources/images/vs-img-10.jpg" alt="">
                            </div>
                            <div
                                class="item swiper-slide"
                                onclick="Pop1__open('교육시설', '교육시설 악기실', 'resources/images/vs-img-12.jpg');">
                                <div>
                                    <a class="title">
                                        <span class="name1">비전스쿨 교육시설</span>
                                        <span class="name2">악기실</span>
                                        <span class="name3"></span>
                                    </a>
                                </div>
                                <img class="hor" src="resources/images/vs-img-12.jpg" alt="">
                            </div>
                            <div
                                class="item swiper-slide"
                                onclick="Pop1__open('교육시설', '비전스쿨 샤워장', 'resources/images/vs-img-11.jpg');">
                                <div>
                                    <a class="title">
                                        <span class="name1">비전스쿨 교육시설</span>
                                        <span class="name2">샤워장</span>
                                        <span class="name3"></span>
                                    </a>
                                </div>
                                <img class="hor" src="resources/images/vs-img-11.jpg" alt="">
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div id="tab-04" class="tab-box con">
                    <div class="tab-04-box inner inner-4 flex">
                        <div class="inner-box flex">
                            <div id="map" style="width:770px;height:430px;"></div>
                            <div class="contect-list">
                                <ul>
                                    <li>
                                        <div class="tit">주소 & 연락처</div>
                                        <div class="desc">
                                            <div class="item multiline flex">
                                                <div class="icon">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </div>
                                                <div class="text">
                                                    <em>주소</em>
                                                    충청북도 옥천군 군북면 증약길 191-9(우:29001)
                                                </div>
                                            </div>
                                            <div class="item multiline flex">
                                                <div class="icon">
                                                    <i class="fas fa-phone-volume"></i>
                                                </div>
                                                <div class="text">
                                                    <em>전화번호</em>
                                                    043 - 732 - 1234
                                                </div>
                                            </div>
                                            <div class="item multiline flex">
                                                <div class="icon">
                                                    <i class="fas fa-fax"></i>
                                                </div>
                                                <div class="text">
                                                    <em>팩스</em>
                                                    043- 134 -1234
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--content-2-->
    <section class="content-2">
        <div id="div2" class="title-box flex con">
            <div class="bar"></div>
            <div class="title">
                비전스쿨의<br>또 다른 모습과 매력을 보고 싶다면
            </div>
        </div>
        <div class="tab-wrap02">
            <ul class="tab-btn-list flex con">
                <li>
                    <a class="btn-tab on" data-tab="tab-05">
                        비쿨 사진
                    </a>
                </li>
                <li>
                    <a class="btn-tab" data-tab="tab-06">
                        비쿨 과정
                    </a>
                </li>
            </ul>
            <div class="tab-box-wrap">
                <div id="tab-05" class="tab-box on flex">
                    <div class="inner flex flex-ai-c">
                        <div class="swiper-box swiper-box-js con">
                            <div class="gallery-box">
                                <div class="box">
                                    <div class="text-box">
                                        <p class="text-1">
                                            <span>PHOTO</span>
                                            <i class="line1"></i>
                                        </p>
                                        <p class="text-2">
                                            <span>GALLERY</span>
                                        </p>
                                    </div>
                                    <h3>포토갤러리</h3>
                                    <p class="text-3">아이들의 새로운 모습을 사진으로 만나보세요.</p>
                                    <div class="slide-arrows">
                                        <div class="swiper-button swiper-button-prev"></div>
                                        <div class="swiper-button swiper-button-next"></div>
                                    </div>
                                </div>
                                <div class="slide2 swiper-container">
                                    <div class="swiper-wrapper">
                                        
                                        <a href="https://www.flickr.com/photos/194160973@N03/albums" class="swiper-slide">
                                            <div class="img-box">
                                                <img src="resources/images/picture-1.jpg" alt="">
                                            </div>
                                        </a>
                                        <a href="https://www.flickr.com/photos/194160973@N03/albums" class="swiper-slide">
                                            <div class="img-box">
                                                <img src="resources/images/picture-2.jpg" alt="">
                                            </div>
                                        </a>
                                        <a href="https://www.flickr.com/photos/194160973@N03/albums" class="swiper-slide">
                                            <div class="img-box">
                                                <img src="resources/images/picture-3.jpg" alt="">
                                            </div>
                                        </a>
                                        <a href="https://www.flickr.com/photos/194160973@N03/albums" class="swiper-slide">
                                            <div class="img-box">
                                                <img src="resources/images/picture-4.jpg" alt="">
                                            </div>
                                        </a>
                                        <a href="https://www.flickr.com/photos/194160973@N03/albums" class="swiper-slide">
                                            <div class="img-box">
                                                <img src="resources/images/picture-5.jpg" alt="">
                                            </div>
                                        </a>
                                        <a href="https://www.flickr.com/photos/194160973@N03/albums" class="swiper-slide">
                                            <div class="img-box">
                                                <img src="resources/images/picture-6.jpg" alt="">
                                            </div>
                                        </a>
                                        <a href="https://www.flickr.com/photos/194160973@N03/albums" class="swiper-slide">
                                            <div class="img-box">
                                                <img src="resources/images/picture-7.jpg" alt="">
                                            </div>
                                        </a>
                                        <a href="https://www.flickr.com/photos/194160973@N03/albums" class="swiper-slide">
                                            <div class="img-box">
                                                <img src="resources/images/picture-8.jpg" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-06" class="tab-box flex">
                    <div class="inner flex flex-ai-c">
                        <div class="swiper-box swiper-box-js con">
                            <div class="gallery-box">
                                <div class="box">
                                    <div class="text-box">
                                        <p class="text-1">
                                            <span>VIDEO</span>
                                            <i class="line1"></i>
                                        </p>
                                        <p class="text-2">
                                            <span>GALLERY</span>
                                        </p>
                                    </div>
                                    <h3>비디오갤러리</h3>
                                    <p class="text-3">아이들의 다양한 활동을 영상으로 담았습니다.</p>
                                    <div class="slide-arrows">
                                        <div class="swiper-button swiper-button-prev"></div>
                                        <div class="swiper-button swiper-button-next"></div>
                                    </div>
                                </div>
                                <div class="slide4 swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="img-box">
                                                <iframe
                                                    width="360"
                                                    height="360"
                                                    src="https://www.youtube.com/embed/AYzFRbv0az0"
                                                    title="YouTube video player"
                                                    frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen="allowfullscreen"></iframe>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="img-box">
                                                <iframe
                                                    width="360"
                                                    height="360"
                                                    src="https://www.youtube.com/embed/AYzFRbv0az0"
                                                    title="YouTube video player"
                                                    frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen="allowfullscreen"></iframe>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="img-box">
                                                <iframe
                                                    width="360"
                                                    height="360"
                                                    src="https://www.youtube.com/embed/AYzFRbv0az0"
                                                    title="YouTube video player"
                                                    frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen="allowfullscreen"></iframe>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="img-box">
                                                <iframe
                                                    width="360"
                                                    height="360"
                                                    src="https://www.youtube.com/embed/AYzFRbv0az0"
                                                    title="YouTube video player"
                                                    frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen="allowfullscreen"></iframe>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="img-box">
                                                <iframe
                                                    width="360"
                                                    height="360"
                                                    src="https://www.youtube.com/embed/AYzFRbv0az0"
                                                    title="YouTube video player"
                                                    frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen="allowfullscreen"></iframe>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="img-box">
                                                <iframe
                                                    width="360"
                                                    height="360"
                                                    src="https://www.youtube.com/embed/AYzFRbv0az0"
                                                    title="YouTube video player"
                                                    frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen="allowfullscreen"></iframe>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="img-box">
                                                <iframe
                                                    width="360"
                                                    height="360"
                                                    src="https://www.youtube.com/embed/AYzFRbv0az0"
                                                    title="YouTube video player"
                                                    frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen="allowfullscreen"></iframe>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="img-box">
                                                <iframe
                                                    width="360"
                                                    height="360"
                                                    src="https://www.youtube.com/embed/AYzFRbv0az0"
                                                    title="YouTube video player"
                                                    frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen="allowfullscreen"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--content-3-->
    <section class="content-3">
        <div id="div3" class="title-box flex con">
            <div class="bar"></div>
            <div class="title">
                졸업생 이야기
                <span>나는 자랑스러운 '비쿨인' 입니다.</span>
                <span>비전스쿨에서 배운 것들을 세상에서 펼칩니다.</span>
            </div>
        </div>
        <div class="hover-box">
            <div class="inner">
                <ul class="flex">
                    <li class="item item-1 on">
                        <div class="inner">
                            <div class="black_img">
                                <img src="https://ssw0428.github.io/img1/pf/happy/ex-5.jpg" alt="">
                            </div>
                            <div class="color_img">
                                <div class="img-box-1">
                                    <div class="video">
                                        <div class="video-box">
                                            <iframe
                                                width="100%"
                                                height="100%"
                                                src="https://www.youtube.com/embed/Ak3ZDPXPJ34"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen="allowfullscreen"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="sub-box">
                                    <p class="text-1">비쿨의 수준 높은 수업 비결
                                    </p>
                                    <p class="text-2">
                                        비전스쿨의 웃음꽃
                                        <span>이유림</span>
                                    </p>
                                    <p class="sub-text">스튜디오 구축 업무를 담당하고 있는 콘텐츠개발사업팀 직원 원선용, 그의 손으로 새롭게 오픈한 스튜디오는 어떤 모습일까?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item item-2 off">
                        <div class="inner">
                            <div class="black_img">
                                <img src="https://ssw0428.github.io/img1/pf/happy/ex-5.jpg" alt="">
                            </div>
                            <div class="color_img">
                                <div class="img-box-1">
                                    <div class="video">
                                        <div class="video-box">
                                            <iframe
                                                width="100%"
                                                height="100%"
                                                src="https://www.youtube.com/embed/Ak3ZDPXPJ34"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen="allowfullscreen"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="sub-box">
                                    <p class="text-1">비쿨의 수준 높은 수업 비결
                                    </p>
                                    <p class="text-2">
                                        비전스쿨의 웃음꽃
                                        <span>이유림</span>
                                    </p>
                                    <p class="sub-text">스튜디오 구축 업무를 담당하고 있는 콘텐츠개발사업팀 직원 원선용, 그의 손으로 새롭게 오픈한 스튜디오는 어떤 모습일까?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item item-3 off">
                        <div class="inner">
                            <div class="black_img">
                                <img src="https://ssw0428.github.io/img1/pf/happy/ex-5.jpg" alt="">
                            </div>
                            <div class="color_img">
                                <div class="img-box-1">
                                    <div class="video">
                                        <div class="video-box">
                                            <iframe
                                                width="100%"
                                                height="100%"
                                                src="https://www.youtube.com/embed/Ak3ZDPXPJ34"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen="allowfullscreen"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="sub-box">
                                    <p class="text-1">비쿨의 수준 높은 수업 비결
                                    </p>
                                    <p class="text-2">
                                        비전스쿨의 웃음꽃
                                        <span>이유림</span>
                                    </p>
                                    <p class="sub-text">스튜디오 구축 업무를 담당하고 있는 콘텐츠개발사업팀 직원 원선용, 그의 손으로 새롭게 오픈한 스튜디오는 어떤 모습일까?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item item-4 off">
                        <div class="inner">
                            <div class="black_img">
                                <img src="https://ssw0428.github.io/img1/pf/happy/ex-5.jpg" alt="">
                            </div>
                            <div class="color_img">
                                <div class="img-box-1">
                                    <div class="video">
                                        <div class="video-box">
                                            <iframe
                                                width="100%"
                                                height="100%"
                                                src="https://www.youtube.com/embed/Ak3ZDPXPJ34"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen="allowfullscreen"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="sub-box">
                                    <p class="text-1">비쿨의 수준 높은 수업 비결
                                    </p>
                                    <p class="text-2">
                                        비전스쿨의 웃음꽃
                                        <span>이유림</span>
                                    </p>
                                    <p class="sub-text">스튜디오 구축 업무를 담당하고 있는 콘텐츠개발사업팀 직원 원선용, 그의 손으로 새롭게 오픈한 스튜디오는 어떤 모습일까?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--
    <section class="content-4 con">
        <div id="div4" class="title-box flex con">
            <div class="bar"></div>
            <div class="title">
                비전스쿨의<br>새로운 소식에 대해서 알아보세요
            </div>
        </div>
        <section class="notice">
            <div class="notice-boxs box con">
                <ul>
                    <li>
                        <div id="notice-box" class="header">
                            <div class="td num">번호</div>
                            <div class="title">제목</div>
                            <div class="td date">등록일</div>
                        </div>
                    </li>
                </ul>
                <ul class="notice-box-list on">
                    <li>
                        <div id="notice-box" class="head">
                            <div class="td num">2321</div>
                            <div class="td title">hi</div>
                            <div class="td date">2.5</div>
                        </div>
                        <div class="body">
                            <div class="text">hello</div>
                        </div>
                    </li>
                    <li>
                        <div id="notice-box" class="head">
                            <div class="td num">2</div>
                            <div class="td title">hi</div>
                            <div class="td date">2.5</div>
                        </div>
                        <div class="body">
                            <div class="text">hello</div>
                        </div>
                    </li>
                    <li>
                        <div id="notice-box" class="head">
                            <div class="td num">2</div>
                            <div class="td title">hi</div>
                            <div class="td date">2.5</div>
                        </div>
                        <div class="body">
                            <div class="text">hello</div>
                        </div>
                    </li>
                    <li>
                        <div id="notice-box" class="head">
                            <div class="td num">2</div>
                            <div class="td title">hi</div>
                            <div class="td date">2.5</div>
                        </div>
                        <div class="body">
                            <div class="text">hello</div>
                        </div>
                    </li>
                    <li>
                        <div id="notice-box" class="head">
                            <div class="td num">2</div>
                            <div class="td title">hi</div>
                            <div class="td date">2.5</div>
                        </div>
                        <div class="body">
                            <div class="text">hello</div>
                        </div>
                    </li>
                </ul>
                <ul class="notice-box-list">
                    <li>
                        <div id="notice-box" class="head">
                            <div class="td num">2</div>
                            <div class="td title">hi</div>
                            <div class="td date">2.5</div>
                        </div>
                        <div class="body">
                            <div class="text">hello</div>
                        </div>
                    </li>
                    <li>
                        <div id="notice-box" class="head">
                            <div class="td num">2</div>
                            <div class="td title">hi</div>
                            <div class="td date">2.5</div>
                        </div>
                        <div class="body">
                            <div class="text">hello</div>
                        </div>
                    </li>
                    <li>
                        <div id="notice-box" class="head">
                            <div class="td num">2</div>
                            <div class="td title">hi</div>
                            <div class="td date">2.5</div>
                        </div>
                        <div class="body">
                            <div class="text">hello</div>
                        </div>
                    </li>
                    <li>
                        <div id="notice-box" class="head">
                            <div class="td num">2</div>
                            <div class="td title">hi</div>
                            <div class="td date">2.5</div>
                        </div>
                        <div class="body">
                            <div class="text">hello</div>
                        </div>
                    </li>
                    <li>
                        <div id="notice-box" class="head">
                            <div class="td num">2</div>
                            <div class="td title">hi</div>
                            <div class="td date">2.5</div>
                        </div>
                        <div class="body">
                            <div class="text">hello</div>
                        </div>
                    </li>
                </ul>
                <ul class="notice-box-list">
                    <li>
                        <div id="notice-box" class="head">
                            <div class="td num">2</div>
                            <div class="td title">hi</div>
                            <div class="td date">2.5</div>
                        </div>
                        <div class="body">
                            <div class="text">hello</div>
                        </div>
                    </li>
                    <li>
                        <div id="notice-box" class="head">
                            <div class="td num">2</div>
                            <div class="td title">hi</div>
                            <div class="td date">2.5</div>
                        </div>
                        <div class="body">
                            <div class="text">hello</div>
                        </div>
                    </li>
                    <li>
                        <div id="notice-box" class="head">
                            <div class="td num">2</div>
                            <div class="td title">hi</div>
                            <div class="td date">2.5</div>
                        </div>
                        <div class="body">
                            <div class="text">hello</div>
                        </div>
                    </li>
                    <li>
                        <div id="notice-box" class="head">
                            <div class="td num">2</div>
                            <div class="td title">hi</div>
                            <div class="td date">2.5</div>
                        </div>
                        <div class="body">
                            <div class="text">hello</div>
                        </div>
                    </li>
                    <li>
                        <div id="notice-box" class="head">
                            <div class="td num">2</div>
                            <div class="td title">hi</div>
                            <div class="td date">2.5</div>
                        </div>
                        <div class="body">
                            <div class="text">hello</div>
                        </div>
                    </li>
                </ul>
            </div>

            <br><br>

            <div class="wrap_paging flex flex-jc-c">
                <a href="#none" class="first">맨처음</a><br>
                <a href="#none" class="prev">이전</a>
                <div class="paging flex">
                    <a href="#none" class="on view">1</a>
                    <a href="#none" class="view">2</a>
                    <a href="#none" class="view">3</a>
                    <a href="#none">4</a>
                    <a href="#none">5</a>
                    <a href="#none">6</a>
                    <a href="#none">7</a>
                    <a href="#none">8</a>
                </div>
                <a href="#none" class="next">다음</a><br>
                <a href="#none" class="last">마지막</a>
            </div>
        </section>
    </section>
    content-4-->
</div>

<!-- 팝업-->
<section class="popup-box">
    <div class="pop-1-bg"></div>
    <div class="pop-1">
        <section class="head">
            <div class="btn-close">X</div>
            <div class="btn-close">팝업닫기</div>
        </section>
        <section class="body">
            <div class="client"></div>
            <div class="title"></div>
            <div class="img-boxs"></div>
        </section>
    </div>
</section>

<?php
include "/resources/include/foot.php";
?>