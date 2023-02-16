<!DOCTYPE html>
<?php
session_start();
?>
<html lang="ko">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Myeongenie</title>
    <link rel="icon" type="image/x-icon" href="assets/Logo.png" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
  </head>
  <body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <div class="container px-5">
        <a class="navbar-brand" href="index.php">Myeongenie</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      </div>
      <div class="container px-5">
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="a.php">Activity</a></li>
            <li class="nav-item"><a class="nav-link" href="m.php">Movie</a></li>
            <li class="nav-item"><a class="nav-link" href="e.php">Exercise</a></li>
            <li class="nav-item"><a class="nav-link" href="t.php">Travel</a></li>
          </ul>
        </div>
      </div>
      <div class="container px-5">
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link">
                <?php
                if (isset($_SESSION['userId'])) {
                  echo "{$_SESSION['userId']}님";
                ?>
                  <li class="nav-item" onclick="logout()">LOGOUT</li>
                <?php
                } else {
                ?>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="\htdocs\signup.php">SIGNUP</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="\htdocs\login.html">LOGIN</a>
                  </li>
                <?php
                }
                ?>
                </a>
              </li>
            <li class="nav-item"><a class="nav-link" onclick="doletter()">MESSAGE</a></li>
            <!-- <li class="nav-item"><a class="nav-link" href="about.html">About</a></li> -->
            </ul>
        </div>
      </div>
    </nav>
    <!-- Header-->
    <header class="masthead text-center text-white">
      <div class="masthead-content">
        <div class="tt px-5">
          <div class="tb">
            <div><button type="button" id="step1" class="tbutton">서울</button></div>
            <div><button type="button" id="step2" class="tbutton">경기</button></div>
            <div><button type="button" id="step3" class="tbutton">인천</button></div>
            <div><button type="button" id="step4" class="tbutton">충남</button></div>
            <div><button type="button" id="step5" class="tbutton">전북</button></div>
            <div><button type="button" id="step6" class="tbutton">전남</button></div>
            <div><button type="button" id="step7" class="tbutton">제주</button></div>
          </div>
          <img src="assets/img/map_ko1.png" alt="..." class="timg">
          <div class="tb">
            <div><button type="button" id="step8" class="tbutton">강원</button></div>
            <div><button type="button" id="step9" class="tbutton">충북</button></div>
            <div><button type="button" id="step10" class="tbutton">경북</button></div>
            <div><button type="button" id="step11" class="tbutton">경남</button></div>
            <div><button type="button" id="step12" class="tbutton">부산</button></div>
          </div>
        </div>
      </div>
    </header>
  <!-- 서울 -->
  <div class="article1" style="width: 100%; height: 100%; border: 1px; solid: white; display: none">
    <section id="scroll">
      <div class="container px-5">
        <div class="row gx-5 align-items-center">
          <div class="col-lg-6 order-lg-2 col-md-12">
            <div class="p-5">
              <img src="assets/img/map_seo.png" alt="..." style="max-width:120%; height:auto;" />
            </div>
          </div>
          <div class="col-lg-6 order-lg-1 col-md-12">
            <div class="p-5">
              <h2 class="display-4" style="text-align:center;">서울</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="tabs">
            <li class="tab-link current" data-tab="tab-1">봄</li>
            <li class="tab-link" data-tab="tab-2">여름</li>
            <li class="tab-link" data-tab="tab-3">가을</li>
            <li class="tab-link" data-tab="tab-4">겨울</li>
          </ul>
          <!-- 봄 -->
          <div id="tab-1" class="tab-content current">
            <!-- 석촌호수공원 -->
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1 col-md-12">
                <div class="p-5">
                  <img src="assets/img/seoul_spring_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2  col-md-12">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">석촌호수공원</h2>
                  <p>석촌호수공원은 시민들에게 사랑받는 휴식처이다.
                    송파대로를 기준으로 서호와 동호로 나누어져 있으며, 한 바퀴를 도는 동안 롯데월드어드벤처, 카페거리, 방이동먹자골목 등 다양한 풍경을 만나볼 수 있다.
                    매년 봄, 벚꽃이 만개할 때 ‘석촌호수 벚꽃축제’가 열리기도 한다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>서울 송파구 삼학사로 136 (서울놀이마당)</dd>
                    <dt>교통 정보</dt>
                    <dd>2호선 잠실역 2번, 3번 출구 --&gt; 도보로 200미터</dd>
                  </dl>
                </div>
              </div>
            </div>
            <!-- 어린이대공원 -->
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1 col-md-12">
                <div class="p-5">
                  <img src="assets/img/seoul_spring_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2 col-md-12">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">어린이대공원</h2>
                  <p>서울어린이대공원은 어린이 가족테마공원이다.
                    넓은 공간 속에 동물원, 식물원, 놀이동산 및 다양한 공연시설과 체험공간이 가득하며
                    봄에는 벚꽃이 만개해 많은 사람들이 추천하는 벚꽃명소이다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>서울 광진구 능동로 216</dd>
                    <dt>교통 정보</dt>
                    <dd>7호선 어린이대공원역 1번 출구 --&gt; 어린이대공원 정문</dd>
                  </dl>
                </div>
              </div>
            </div>
            <!-- 서래섬 -->
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1 col-md-12">
                <div class="p-5">
                  <img src="assets/img/seoul_spring_3.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2 col-md-12">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">서래섬</h2>
                  <p>서래섬은 1986년에 조성한 인공섬으로 봄에는 유채꽃이 가득피어 피크닉 장소로 제격이다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>서울 서초구 신반포로11길 40 (반포안내센터)</dd>
                    <dt>교통 정보</dt>
                    <dd>4호선 동작역 1,2번 출구 --&gt; 도보로 700미터</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <!-- 여름 -->
          <div id="tab-2" class="tab-content current">
            <!-- 여의도한강공원 -->
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1 col-md-12">
                <div class="p-5">
                  <img src="assets/img/seoul_summer_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2 col-md-12">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">여의도한강공원</h2>
                  <p>여의도한강공원은 정치, 금융, 언론의 중심지인 여의도에 자리하고 지하철, 버스 등 대중교통으로 접근성이 좋아
                    직장인과 일반시민들이 즐겨찾는 명소이자 각종 공연과 오리배 등 여름에 볼거리와 즐길거리가 풍부한 휴식공간이다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>서울 영등포구 여의동로 330</dd>
                    <dt>교통 정보</dt>
                    <dd>5호선 여의나루역 2,3번출구</dd>
                  </dl>
                </div>
              </div>
            </div>
            <!-- 낙산공원 -->
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1 col-md-12">
                <div class="p-5">
                  <img src="assets/img/seoul_summer_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2 col-md-12">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">낙산공원</h2>
                  <p>수도 서울을 구성하는 내사산의 하나이자 주산인 북악산의 좌청룡에 해당하는 낙산의 자연환경과
                    역사적 문화환경을 복원함으로써 서울시민들에게 쾌적한 공원 경관을 제공하고, 자연 탐방을 통해
                    역사와 문화 교육의 장을 제공할 목적으로 조성되었다.
                  </p>
                  <dl>
                    <dt>주소</dt>
                    <dd>서울 종로구 낙산길 41</dd>
                    <dt>교통 정보</dt>
                    <dd>2호선 혜화역 2번 출구 --> 도보로 492미터</dd>
                  </dl>
                </div>
              </div>
            </div>
            <!-- 남산타워 -->
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1 col-md-12">
                <div class="p-5">
                  <img src="assets/img/seoul_summer_3.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2 col-md-12">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">남산타워</h2>
                  <p>남산타워는 서울 중심부에 위치해 전망대에 올라가면 360도 전방향으로
                    서울 시내를 훤히 내려다볼 수 있다. 최근 사무동을 리모델링해 오픈한 서울타워 플라자엔
                    다양한 편의시설과 볼거리, 식음료 매장을 갖춰 더운 여름날에도 시원할 수 있게 서비스를 제공한다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>서울 용산구 남산공원길 105</dd>
                    <dt>교통 정보</dt>
                    <dd>3, 4호선 충무로역 2번출구 대한극장 앞, 동대 입구 6번 출구 앞에서 순환버스 탑승</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <!-- 가을 -->
          <div id="tab-3" class="tab-content">
            <!-- 서울숲 -->
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1 col-md-12">
                <div class="p-5">
                  <img src="assets/img/seoul_autumn_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2 col-md-12">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">서울숲</h2>
                  <p>서울숲은 문화예술공원, 체험학습원, 생태숲, 습지생태원 네 가지의 특색 있는 공간들로
                    구성되어 있으며, 한강과 맞닿아 있어 다양한 문화여가공간을 제공합니다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>서울 성동구 뚝섬로 273</dd>
                    <dt>교통 정보</dt>
                    <dd>분당선 서울숲역 3번 출구 --> 도보로 5분</dd>
                  </dl>
                </div>
              </div>
            </div>
            <!-- 북한산 -->
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1 col-md-12">
                <div class="p-5">
                  <img src="assets/img/seoul_autumn_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2 col-md-12">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">북한산</h2>
                  <p>북한산국립공원은 세계적으로 드문 도심 속의 자연공원으로,
                    수려한 자연경관과 다양한 문화자원이 있어 우리나라의 15번째 국립공원으로 지정되었다.
                    특히 가을에 울긋불긋 화려하게 물든 단풍이 절경이다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>서울 은평구 불광동 산42-5</dd>
                    <dt>교통 정보</dt>
                    <dd>구파발역 1,2번 출구 34번 버스 --> 효자2통 하차</dd>
                  </dl>
                </div>
              </div>
            </div>
            <!-- 하늘공원 -->
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1 col-md-12">
                <div class="p-5">
                  <img src="assets/img/seoul_autumn_3.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2 col-md-12">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">하늘공원</h2>
                  <p>상암 하늘공원은 생태환경을 복원할 목적으로 조성되었기 떄문에 인공적인 편의시설이 거의 없다. 그만큼 더욱 아름다운 자연환경을
                    도심에서 쉽게 볼 수 있으며 가을에 핑크뮬리와 억새명소로 유명하다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>서울 마포구 하늘공원로 95</dd>
                    <dt>교통 정보</dt>
                    <dd>3, 4호선 충무로역 2번출구 대한극장 앞, 동대 입구 6번 출구 앞에서 순환버스 탑승</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <!-- 겨울 -->
          <div id="tab-4" class="tab-content">
            <!-- 우리유황 온천 -->
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/seoul_winter_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">우리유황 온천</h2>
                  <p>우리유황온천은 매일 지하 1,040m에서 32.6도의 천연 유황 온천수를 끌어 올려 제공한다. 대온천탕, 히노키탕, 소금방, 스포츠 마사지 시설이
                    마련되어 있으며, 실내 카페와 함께 야외에는 온천수에 발을 담그고 즐길 수 있는 족욕 카페도 있다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>서울 광진구 자양로5길 33</dd>
                    <dt>교통 정보</dt>
                    <dd>2호선 구의역 4번출구 잠실대교 북단</dd>
                  </dl>
                </div>
              </div>
            </div>
            <!-- 올림픽공원 스케이트장 -->
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/seoul_winter_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">올림픽공원 스케이트장</h2>
                  <p>겨울철 명소 올림픽공원 스케이트장은 올림픽공원 평화의 광장에서 겨울 스포츠로 스케이트장을 운영한다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>서울 송파구 오륜동 올림픽로 424</dd>
                    <dt>교통 정보</dt>
                    <dd>8호선 몽촌토성역 1번 출구</dd>
                  </dl>
                </div>
              </div>
            </div>
            <!-- 서울 빛초롱축제 -->
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/seoul_winter_3.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">서울 빛초롱축제</h2>
                  <p>2백만의 매년 참가자를 자랑하는 서울 등불축제는 잘 알려진 문화기념행사 중 하나이다.
                    이 11월의 무료행사는 서울시내의 청계천을 따라 열리며 전세계와 시민작가들에 의해 만들어진 수백만의 실제사이즈의 등을 포함한다.
                    2주의 행사기간 동안 등만들기 컨스트를 포함한 여러 등을 테마로 한 활동들이 이루어진다.
                  </p>
                  <dl>
                    <dt>주소</dt>
                    <dd>서울 중구 태평로1가 1</dd>
                    <dt>교통 정보</dt>
                    <dd>5호선 광화문역 5번 출구</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- <div class="col-md-12"> 끝 -->
      </div> <!-- <div class="row"> 끝 -->
    </div> <!-- <div class="container"> 끝 -->
  </div> <!-- 서울 끝 -->
  <!-- 경기 -->
  <div class="article2" style="width: 100%; height: 100%; border: 1px; solid: white; display: none">
    <section id="scroll">
      <div class="container px-5">
        <div class="row gx-5 align-items-center">
          <div class="col-lg-6 order-lg-2 col-md-12">
            <div class="p-5">
              <img src="assets/img/map_gyo.png" alt="..." style="max-width:120%; height:auto;" />
            </div>
          </div>
          <div class="col-lg-6 order-lg-1 col-md-12">
            <div class="p-5">
              <h2 class="display-4" style="text-align:center;">경기</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="tabs">
            <li class="tab-link current" data-tab="tab-1-k">봄</li>
            <li class="tab-link" data-tab="tab-2-k">여름</li>
            <li class="tab-link" data-tab="tab-3-k">가을</li>
            <li class="tab-link" data-tab="tab-4-k">겨울</li>
          </ul>
          <!-- 봄 -->
          <div id="tab-1-k" class="tab-content current">
            <!-- 여가 -->
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-l col-md-12">
                <div class="p-5">
                  <img src="assets/img/gyo_spring_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2 col-md-12">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">여가</h2>
                  <p>여가는 아름다운 양평의 자연속에서 소중한 일상을 공유하는 '프라이빗 공유 팜'이다.
                    봄에 숲속 피크닉의 장소로 최적이다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>경기도 양평군 지평면 망미리 150</dd>
                    <dt>교통 정보</dt>
                    <dd>yeoga 표지판 확인</dd>
                  </dl>
                </div>
              </div>
            </div> <!-- 여가 끝-->
            <!-- 그린카펫티가든 -->
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1 col-md-12">
                <div class="p-5">
                  <img src="assets/img/gyo_spring_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2 col-md-12">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">그린카펫티가든</h2>
                  <p>그린카펫티가든은 동화 속 주인공이 된 듯, 평화로운 티타임을 즐길 수 있는 야외카페이다.
                    특히 봄에 피크닉의 명소이다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>경기도 포천시 일동면 화동로857번길 5-40</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div> <!-- 그린카펫티가든 끝-->
            <!-- 방화수류정 -->
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/gyo_spring_3.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">방화수류정</h2>
                  <p>방화수류정은 경기도 수원시 동북쪽에 있는 정자이다.
                    조선 정조 18년(1794)에 세운 것으로 건물이 아름답고 조각이 섬세하여 근세 한국 건축 예술의 대표작으로 꼽는다.
                    우리나라 보물로, 보물 정식 명칭은 ‘수원 방화수류정’이다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>경기 수원시 팔달구 수원천로392번길 44-6</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div> <!-- 방화수류정 끝-->
          </div> <!-- 봄 끝 -->
          <!-- 여름 -->
          <div id="tab-2-k" class="tab-content current">
            <!-- 힐링별밤수목원 캠핑장 -->
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/gyo_summer_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">힐링별밤수목원 캠핑장</h2>
                  <p>힐링별밤수목원캠핑장은 캠핑하는 내내 울창한 잣나무 숲의 건강하고
                    상쾌한 공기를 느낄 수 있으며, 시원하게 흐르는 수동계곡은 마음까지 시원하게
                    만들어준다. 밤이면 별이 잘 보여 별자리를 맞추는 재미도 있는 남양주시 등록 1호 캠핑장이다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>경기 남양주시 수동면 비룡로 1516-19</dd>
                    <dt>교통 정보</dt>
                    <dd>330-1, 330-3 버스 비월교 하차 도보 1분</dd>
                  </dl>
                </div>
              </div>
            </div> <!-- 힐링별밤수목원 캠핑장 끝 -->
            <!-- 원마운트 -->
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/gyo_summer_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">원마운트</h2>
                  <p>원마운트는 ONEMOUNT WATERPARK
                    실내외를 넘나드는 짜릿한 슬라이드와 파도 풀, 유수 풀 아쿠아 플레이 등
                    모험심을 자극하는 어트랙션 시설과 하늘과 호수를 바라보는 탁트인 전망의 휴식 공간을 갖춘 워터테마파크이다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>경기 고양시 일산서구 대화동 한류월드로 300</dd>
                    <dt>교통 정보</dt>
                    <dd>3호선 주엽역 --> 도보로 10분</dd>
                  </dl>
                </div>
              </div>
            </div> <!-- 원마운트 끝 -->
          </div> <!-- 여름 끝 -->
          <!-- 가을 -->
          <div id="tab-3-k" class="tab-content current">
            <!-- 안성팜랜드 -->
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/gyo_autumn_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">안성팜랜드</h2>
                  <p>안성팜랜드는 직접 만지고 먹이주며 즐거운 체험을 할 수 있는 곳으로,
                    소,양,거위,돼지,당나귀 등 다양한 가축들과 함께 즐거운 체험프로그램을 진행하고 있다.
                    특히 가을에는 한껏 만개한 코스모스와 핑크뮬리, 해바라기밭으로 유명하다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>경기 안성시 공도읍 대신두길 28</dd>
                    <dt>교통 정보</dt>
                    <dd></dd>
                  </dl>
                </div>
              </div>
            </div> <!-- 안성팜랜드 끝 -->
            <!-- 나리농원 -->
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/gyo_autumn_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">나리농원</h2>
                  <p>나리농원은 양주시에서 운영하는 공원으로 가을에 핑크뮬리와 천일홍, 백일홍으로 유명하다.
                    제한인원으로 개방해 두었으나 사전예약시 대기 없이 무료로 입장이 가능하니 참고.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>경기 양주시 광사동 51-56</dd>
                    <dt>교통 정보</dt>
                    <dd>양주역 시청방향 80번 버스 또는 77-1번 버스 승차 --> 나리공원 하차</dd>
                  </dl>
                </div>
              </div>
            </div> <!-- 나리농원 끝 -->
          </div> <!-- 가을 끝 -->
          <!-- 겨울 -->
          <div id="tab-4-k" class="tab-content current">
            <!-- 물 맑은 양평 빙어축제 -->
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/gyo_winter_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">물 맑은 양평 빙어축제</h2>
                  <p>수(水)미(米)마을은 맑은 물로 대한민국에서 손꼽히는 곳으로 365일 축제가 열리는 곳이다.
                    빙어축제 말고도 겨울에 즐길만한 눈썰매장 등 많은 놀거리가 있는 곳이다. </p>
                  <dl>
                    <dt>주소</dt>
                    <dd>경기 양평군 단월면 곱다니길 55</dd>
                    <dt>교통 정보</dt>
                    <dd>수미마을</dd>
                  </dl>
                </div>
              </div>
            </div> <!-- 물 맑은 양평 빙어축제 끝 -->
            <!-- 얼음꽃 송어 축제 -->
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/gyo_winter_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">얼음꽃 송어 축제</h2>
                  <p>청평 얼음꽃 축제장은 서울 근교의 유원지로 오랜 전통을 가진 곳이다. 겨울철이면 호명산 줄기 산자락에
                    얼음꽃이 피어나 연인들 및 가족들이 나들이를 하며 썰매 타기, 얼음꽃 포토존을 이용하기에 안성맞춤이다.
                    그 아래 얼음 위에서는 구멍을 꿇어 송어낚시를 하여 즉석 회, 송어구이등 시식을 통한 즐거움도 함께 누릴 수
                    있다. </p>
                  <dl>
                    <dt>주소</dt>
                    <dd>경기 가평군 청평면 강변로 107</dd>
                    <dt>교통 정보</dt>
                    <dd>청평역 2번 출구 --> 468미터</dd>
                  </dl>
                </div>
              </div>
            </div> <!-- 얼음꽃 송어 축제 끝 -->
            <!-- 오색별빛정원전 -->
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/gyo_winter_3.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">오색별빛정원전</h2>
                  <p>오색별빛정원전은 아침고요수목원 10만여 평의 야외 정원 곳곳을 다채로운 조명과 빛을 이용하여 특별한 주제를 가지고
                    표현한 야간 조명 점등행사이다. 매년 12월에서 3월사이 개최된다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>경기 가평군 상원 수목원로 432</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div> <!-- 오색별빛정원전 끝 -->
          </div> <!-- 겨울 끝 -->
        </div> <!-- <div class="col-md-12"> 끝 -->
      </div> <!-- <div class="row"> 끝 -->
    </div> <!-- <div class="container"> 끝 -->
  </div> <!-- 경기 끝 -->
  <!-- 인천 -->
  <div class="article3" style="width: 100%; height: 100%; border: 1px; solid white; display: none">
    <section id="scroll">
      <div class="container px-5">
        <div class="row gx-5 align-items-center">
          <div class="col-lg-6 order-lg-2 col-md-12">
            <div class="p-5">
              <img src="assets/img/map_icn.png" alt="..." style="max-width:120%; height:auto;" />
            </div>
          </div>
          <div class="col-lg-6 order-lg-1 col-md-12">
            <div class="p-5">
              <h2 class="display-4" style="text-align:center;">인천</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="tabs">
            <li class="tab-link current" data-tab="tab-1-in">봄</li>
            <li class="tab-link" data-tab="tab-2-in">여름</li>
            <li class="tab-link" data-tab="tab-3-in">가을</li>
            <li class="tab-link" data-tab="tab-4-in">겨울</li>
          </ul>
          <div id="tab-1-in" class="tab-content current">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/icn_spring_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">드림파크 야생화단지</h2>
                  <p>인천드림파크 야생화단지는 야생화테마공원인 만큼 수많은 야생화들이 피어있는 공원이다. 야생화 뿐만 아니라
                    작약, 벚꽃등과 같은 봄꽃들도 많은 공원이다. 봄에 만개하는 꽃이 많아 봄나들이하기 좋은 명소이다. </p>
                  <dl>
                    <dt>주소</dt>
                    <dd>인천 서구 거월동 61</dd>
                    <dt>교통 정보</dt>
                    <dd>공항철도 검암역 하차3번출구 도보 218m --> 버스 43 --> 드림파크야생화단지 하차 도보 335m(6분소요)</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/icn_spring_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">계양산</h2>
                  <p>높이 395m로 강화도를 제외한 인천광역시에서 가장 높다. 《동국여지승람》에는
                    진산 또는 안남산이라고 기록되어 있다. 계양구의 꽃인 진달래가 유난히 많이 핀다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>인천 계양구 계양산로 75번길 26</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-2-in" class="tab-content">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/icn_summer_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">을왕리해수욕장</h2>
                  <p>인천광역시 중구 을왕동에 있는 해수욕장으로, 늘목 또는 얼항으로도 불리며 1986년 국민관광지로 지정되었다.
                    울창한 송림과 해수욕장 양쪽 옆으로 기암괴석이 늘어서 있어 경관이 매우 아름답다. 특히 낙조가 아름답기로 서해안에서 손꼽힌다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>인천 중구 용유서로302번길 16-15</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/icn_summer_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">연안부두</h2>
                  <p>연안부두에는 여객터미널 뿐 아니라 해양광장, 종합어시장, 횟집거리, 해수탕거리, 유람선선착장, 남항부두 등이 모여있어 수도권 시민들의
                    주말 나들이 코스가 되고있다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>인천 중구 항동1가</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-3-in" class="tab-content">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/inc_autumn_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">인천대공원</h2>
                  <p>인천대공원의 가을은 초입부터 울긋불긋 단풍세상이다. 주요시설로는 92과 332종 6550본의 식물을 보유하고 있는 식물원과
                    1만 3000여 주의 다양한 장미가 심어져 있는 장미원, 58종 231마리를 보유하고 있는 동물원 등이 있어 볼거리 또한 다양한
                    테마공원이다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>인천 남동구 무네미로 236</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/inc_autumn_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">송월동동화마을</h2>
                  <p>인천 동화마을은 세계명작동화 테마, 전래동화 테마 등 여러 벽화가 골목골목 그려진 테마 벽화마을이다. 가을같이 선선하고 나들이 하기
                    좋은 계절에 동화마을 같이 흔하지 않은 나들이 코스를 추천한다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>인천 중구 자유공원서로 37번길 22</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-4-in" class="tab-content">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/icn_winter_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">빙어/송어축제</h2>
                  <p>강화 내가면 고천마을 주민과 신선낚시터 주관으로 산새와 경관이 빼어나기로 이름난 신선 저수지에서 주민 대다수가 참여하여 겨울요정 빙어낚시,
                    눈썰매, 얼음썰매 등 다양한 즐길거리 먹거리 볼거리를 마련하여 방문하는 모든 분들이 함께 참여하고 즐길 수 있는 강화 빙어 축제를 개최한다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>인천 강화군 내가면 고천리 1853-13</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/icn_winter_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">인천문학경기장 스노우파크</h2>
                  <p>인천문학경기장 스노우파크는 눈썰매 뿐만 아니라 전통얼음썰매, 눈놀이동산, 전통놀이 등을 체험할 수 있으며 빙어체험 또한 할 수 있는 눈썰매장이다.
                    도심 속에서 가족, 연인, 친구와 즐길 수 있는 겨울놀이 종합 파크이다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>인천 미추홀구 매소홀로 618 문학경기장</dd>
                    <dt>교통 정보</dt>
                    <dd>문학경기장 2번 출구 --> 700미터</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 충남 -->
  <div class="article4" style="width: 100%; height: 100%; border: 1px; solid: white; display: none">
    <section id="scroll">
      <div class="container px-5">
        <div class="row gx-5 align-items-center">
          <div class="col-lg-6 order-lg-2 col-md-12">
            <div class="p-5">
              <img src="assets/img/map_sc.png" alt="..." style="max-width:120%; height:auto;" />
            </div>
          </div>
          <div class="col-lg-6 order-lg-1 col-md-12">
            <div class="p-5">
              <h2 class="display-4" style="text-align:center;">충남</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="tabs">
            <li class="tab-link current" data-tab="tab-1-sc">봄</li>
            <li class="tab-link" data-tab="tab-2-sc">여름</li>
            <li class="tab-link" data-tab="tab-3-sc">가을</li>
            <li class="tab-link" data-tab="tab-4-sc">겨울</li>
          </ul>
          <div id="tab-1-sc" class="tab-content current">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/sc_spring_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">신정호수공원</h2>
                  <p>신정호수 외각으로 야외음악당, 잔디광장, 음악분수공원, 생활체육공원 및 생태수상고원 들 친환경적인 테마공원이 구성되어 있어
                    시민과 관광객에게 휴식공간을 제공해준다. 봄에는 벚꽃이 만개한 벚꽃길이 절경이다.
                  </p>
                  <dl>
                    <dt>주소</dt>
                    <dd>충남 아산시 점양동 산5</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/sc_spring_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">곡교천</h2>
                  <p>은행나무길로 유명한 아산 곡교천은 봄에도 유채꽃밭으로 노랗게 물들어 있다. 싹이 돋아나 연두빛을 띄는 은행나무와 곡교천을 따라 이루어진
                    유채꽃밭은 나들이 하기에 적합하다.
                  </p>
                  <dl>
                    <dt>주소</dt>
                    <dd>충남 아산시 염치읍 백암리 258</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-2-sc" class="tab-content">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/sc_summer_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">만리포해수욕장</h2>
                  <p>만리포해수욕장은 대천해수욕장, 변산해수욕장과 더불어 서해안의 3대 해수욕장의 하나로 손꼽히며, 북쪽으로 이어져 있는 천리포해수욕장과 함께
                    태안해안국립공원의 명소를 이룬다. 만리포해수욕장은 바닷물이 비교적 맑고 모래질이 고우며 경사가 완만하여 수심이 얕은 데다 해변에 담수(淡水)가 솟아난다.
                  </p>
                  <dl>
                    <dt>주소</dt>
                    <dd>충남 태안군 소원면 모항리</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/sc_summer_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">대천해수욕장</h2>
                  <p>물은 그다지 맑지 않으나 수심이 얕고 수온이 알맞으며 어느 때나 해수욕을 할 수 있다. 원산도, 납대지도, 삽시도 등의 여러 섬이 멀리 보이고,
                    때로는 신기루 현상으로 아득한 중국대륙을 보게 되는 경우도 있다고 한다.
                  </p>
                  <dl>
                    <dt>주소</dt>
                    <dd>충남 보령시 신흑동</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/sc_summer_3.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">춘장대오토 캠핑장</h2>
                  <p>춘장대오토캠핑장은 폐교를 캠핑장으로 바꿔 학교 내부엔 아이들이 놀 수 있는 놀이방, 넓은 잔디운동장, 모래놀이장 등의 시설이 구비되어 있다.
                    주변엔 춘장대 해수욕장이 있어 여름에 캠핑하러 가기 적합하다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>충남 서천군 서면 춘장대로 106</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-3-sc" class="tab-content">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/sc_autumn_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">가루실 캠핑장</h2>
                  <p>가루실캠핑장은 단풍나무 숲으로 이루어진 조용하고 아늑한 캠핑장이다. 캠핑을 위한 다양한 준비물이 캠핑장에 구비되어 있으며 쌀쌀한 가을에도
                    난로와 전기장판이 있어 따듯하게 잘 수 있다는 장점이 있다. </p>
                  <dl>
                    <dt>주소</dt>
                    <dd>충남 예산군 덕산면 가루실길 307-8</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/sc_autumn_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">계룡산</h2>
                  <p>가루실캠핑장은 단풍나무 숲으로 이루어진 조용하고 아늑한 캠핑장이다. 캠핑을 위한 다양한 준비물이 캠핑장에 구비되어 있으며 쌀쌀한 가을에도
                    난로와 전기장판이 있어 따듯하게 잘 수 있다는 장점이 있다. </p>
                  <dl>
                    <dt>주소</dt>
                    <dd>충남 공주시 반포면 동학사1로 327-6</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/sc_autumn_3.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">청산수목원</h2>
                  <p>가루실캠핑장은 단풍나무 숲으로 이루어진 조용하고 아늑한 캠핑장이다. 캠핑을 위한 다양한 준비물이 캠핑장에 구비되어 있으며 쌀쌀한 가을에도
                    난로와 전기장판이 있어 따듯하게 잘 수 있다는 장점이 있다. </p>
                  <dl>
                    <dt>주소</dt>
                    <dd>충남 태안군 남면 연꽃길 70</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-4-sc" class="tab-content">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/sc_winter_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">온양관광호텔</h2>
                  <p>온양관광호텔은 온양행궁의 터 위에 세워진 유럽충의 호텔 정원을 기반으로 최고 수질의 온천탕과 세련된 디자인의 아늑한 객실 그리고 최고의 요리사들이
                    제공하는 식도락의 즐거움이 있는 최고의 온천 휴양 호텔로 과거에서부터 현재에 이르기까지 고객의 가치를 위해 차별화된 서비스를 제공하고 있습니다. </p>
                  <dl>
                    <dt>주소</dt>
                    <dd>충남 아산시 온천대로 1459</dd>
                    <dt>교통 정보</dt>
                    <dd>1호선 온양온천역 1번 출구 --> 478미터</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/sc_winter_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">알프스마을</h2>
                  <p>알프스마을에는 농업, 농촌 관광이 함께하는 테마마을이다. 빙어낚시, 썰매, 얼음분수축제 등 겨울을 겨울답게 보낼 수 있는 최적의 장소이다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>충남 청양군 정산면 천장리 164-1</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 전북 -->
  <div class="article5" style="width: 100%; height: 100%; border: 1px; solid white; display: none">
    <section id="scroll">
      <div class="container px-5">
        <div class="row gx-5 align-items-center">
          <div class="col-lg-6 order-lg-2 col-md-12">
            <div class="p-5">
              <img src="assets/img/map_nj.png" alt="..." style="max-width:120%; height:auto;" />
            </div>
          </div>
          <div class="col-lg-6 order-lg-1 col-md-12">
            <div class="p-5">
              <h2 class="display-4" style="text-align:center;">전북</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="tabs">
            <li class="tab-link current" data-tab="tab-1-nj">봄</li>
            <li class="tab-link" data-tab="tab-2-nj">여름</li>
            <li class="tab-link" data-tab="tab-3-nj">가을</li>
            <li class="tab-link" data-tab="tab-4-nj">겨울</li>
          </ul>
          <div id="tab-1-nj" class="tab-content current">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/nj_spring_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">마이산</h2>
                  <p>마이산은 1979년에 전라북도의 도립공원으로 지정된 산이다. 봄에는 벚꽃길 명소이다. 벚꽃 뿐만 아닌 다양한 야생화들이 피어나 봄이 내려앉은 마이산은 절경이다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>전북 진안군 마령면 마이산로 130</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/nj_spring_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">옥정호</h2>
                  <p>옥정호는 섬진강 다목적댐을 만들면서 생긴 거대한 인공호수로 유역면적이 763㎢이며 저수면적이 26.3㎢로 총저수량은 4억3천톤에 달하여 호남평야를 적셔 곡창지대로 만드는 다목적 댐이다.
                    옥정호 주변엔 작약 꽃밭이 있는데 만개한 수천 수만송이의 작약꽃은 절정의 아름다움을 자랑하며 관광객들의 발길을 사로잡는다.
                  </p>
                  <dl>
                    <dt>주소</dt>
                    <dd>전북 임실운 운암면 입석리 706</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-2-nj" class="tab-content">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/nj_summer_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">덕진공원</h2>
                  <p>전주역 서쪽 3 km 지점에 있는 덕진호 일대의 유원지로, 시민공원이라고도 한다.
                    동쪽의 건지산, 서쪽의 가련산을 잇는 덕진제에 수양버들 ·벚꽃나무가 늘어고, 5월이면 창포와 연꽃이 수면을 메우는데, 특히 덕진 연꽃은 널리 알려져 있다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>전북 전주시 덕진구 권삼득로 390</dd>
                    <dt>교통 정보</dt>
                    <dd>호남고속도로 전주IC에서 시내로 들어가는 팔달로 변에 위치</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/nj_summer_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">채석강</h2>
                  <p>채석강은 전라북도 부안군 변산반도 맨 서쪽에 있는 해식절벽과 바닷가이다.
                    여름철에는 해수욕을 즐기기 좋고 빼어난 경관 때문에 사진 촬영이나 영화 촬영도 자주 이루어진다. 채석강에서 해수욕장 건너 백사장을 따라 북쪽으로 올라가면 붉은 암벽으로 이루어진 적벽강이 있다.
                  </p>
                  <dl>
                    <dt>주소</dt>
                    <dd>전북 부안군 변산면 격포리 301-1</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-3-nj" class="tab-content">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/nj_autumn_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">학원농장</h2>
                  <p>17만 평 넓은 들녘을 보리밭 하나로 일궈놓은 보기 드문 대농원이다. 수확하는 데만도 꼬박 1주일이 걸린다는 국내 최대 규모의 보리밭을 만나볼 수 있다.
                    보리밭 이외에더 5,000여 평에 이르는 화훼용 유리온실과 묘목장, 각종 과수단지를 조성해놓아 전국에서도 손꼽히는 풍광을 그려내고있다.
                  </p>
                  <dl>
                    <dt>주소</dt>
                    <dd>전북 부안군 변산면 격포리 301-1</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/nj_autumn_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">내장산</h2>
                  <p>내장산은 전라북도 정읍시 내장동과 순창군 복흥면의 경계에 있는 산이다. 전망대에 올라가 단풍으로 붉게 물든 내장산을 보면 가을을 온몸으로 보고 느낄 수 있다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>전북 부안군 변산면 격포리 301-1</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-4-nj" class="tab-content">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/nj_winter_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">덕유산 향적봉</h2>
                  <p>덕유산은 국내 최고의 눈꽃 산행지다. 향적봉에서 남설국으로덕유산을 향해 1.3km 떨어져 있는 중봉까지의 ‘눈꽃산책’은 산악인들의 전유물로 여겨지던 덕유산 주릉 종주의 일면을 맛볼 수 있게 해준다.
                    높낮이가 거의 없는 고원을 따라 빠져드는 기분은 경험하지 않고는 감히 말할 수 없다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>전북 무주군 설천면</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/nj_winter_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">지리산 바래봉</h2>
                  <p>내장산은 전라북도 정읍시 내장동과 순창군 복흥면의 경계에 있는 산이다. 전망대에 올라가 단풍으로 붉게 물든 내장산을 보면 가을을 온몸으로 보고 느낄 수 있다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>전북 부안군 변산면 격포리 301-1</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 전남 -->
  <div class="article6" style="width: 100%; height: 100%; border: 1px; solid white; display: none">
    <section id="scroll">
      <div class="container px-5">
        <div class="row gx-5 align-items-center">
          <div class="col-lg-6 order-lg-2 col-md-12">
            <div class="p-5">
              <img src="assets/img/map_sj.png" alt="..." style="max-width:120%; height:auto;" />
            </div>
          </div>
          <div class="col-lg-6 order-lg-1 col-md-12">
            <div class="p-5">
              <h2 class="display-4" style="text-align:center;">전남</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="tabs">
            <li class="tab-link current" data-tab="tab-1-sj">봄</li>
            <li class="tab-link" data-tab="tab-2-sj">여름</li>
            <li class="tab-link" data-tab="tab-3-sj">가을</li>
            <li class="tab-link" data-tab="tab-4-sj">겨울</li>
          </ul>
          <div id="tab-1-sj" class="tab-content current">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/sj_spring_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">화엄사</h2>
                  <p>화엄사는 전라남도 구례군 마산면 황전리 지리산 국립공원 안에 있는 사찰로 대한불교 조계종 제19교구의 본사이다. 특히 봄에 만개한 홍매화는 매화 명소답게 한 폭의 동양화처럼 곱고 기품이 넘친다.
                  </p>
                  <dl>
                    <dt>주소</dt>
                    <dd>전남 구례군 마산면 화엄사로 539</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/sj_spring_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">까망감</h2>
                  <p>피크닉 명소 '카페 까망감'은 한국 전통 재래종인 '먹감'을 모티브해 지어진 이름이다. 카페 앞마당의 먹감을 직접 따고, 깎고, 말려 만든 곶감을 내어준다.
                    카페 바로 앞에 넓은 잔디밭인 앞마당이 있는데 피크닉 세트가 준비되어 있다.
                  </p>
                  <dl>
                    <dt>주소</dt>
                    <dd>전남 담양군 용면 추월산로909-9</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/sj_spring_3.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">보해매실농원</h2>
                  <p>해마다 해남 매화축제가 열렸던 보해매실농원은 약 14만 평 매화나무만 약 14,500주가 심어진 관광농원이다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>전라남도 해남군 산이면 예덕길 125-89</dd>
                    <dt>교통 정보</dt>
                    <dd>서해안고속도로 --> 목포IC --> 영산호하구둑 --> 영암방조제 --> 산이면소재지 --> 보해매실농원</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-2-sj" class="tab-content">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/sj_summer_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">증도우전해수욕장</h2>
                  <p>백사장 길이 4km, 너비 100m로 신안군 증도에 있다. 맑은 바닷물과 넓고 깨끗한 백사장, 울창한 곰솔숲이 볼 만하다.
                    매년 7월 중순부터 한달간 신안게르마늄갯벌축제를 열어 해수욕과 함께 갯벌자연탐험과 머드마사지·개펄썰매 등을 즐길 수 있다. 해수욕장 개장은 7월 20일부터 8월 15일까지이다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>전남 신안군 증도면 우전리</dd>
                    <dt>교통 정보</dt>
                    <dd>서해안고속도로 무안IC --> 무안삼거리 --> 무안현경 --> 지도읍 --> 지신개선착장 --> 증도버지선착장 --> 우전해수욕장
                    </dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/sj_summer_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">와온해변</h2>
                  <p>와온해변은 무엇보다 낙조풍경이 아름답기로 이름난 곳이다. 솔섬 너머로 해가 넘어가면 드넓은 개펄과 주변을 온통 황금빛으로 물들이며 장관이 연출되는데
                    이 풍경을 담으려는 사진작가들의 발걸음이 끊이지 않는다고 한다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>전남 순천시 해룡면 와온길 133</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-3-sj" class="tab-content">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/sj_autumn_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">관방제림</h2>
                  <p>관방제는 관방천에 있는 제방으로서 담양읍 남산리 동정자 마을로부터 수북면 황금리를 지나 대전면 강의리까지 길이 6km에 이르는 곳이다.
                    관방제가 유명한 이유는 약 2km에 걸쳐 거대한 풍치림을 이루고 있기 때문이다. 약 300~400년에 달하는 나무들이 빼곡하게 자리를 잡고 있다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>전남 담양군 담양읍 남산리 일원</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/sj_autumn_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">고하도 해상테마파크</h2>
                  <p>2012 목포대교 개통 이후 고하도가 육지가 되면서 쉽게 찾을 수 있게 되었고 이충무공 유적지로 상징되던 고하도에 해상케이블카, 둘레길, 해안데크길, 전망대, 목화정원&체험전시장,
                    호남권생물자원관 등이 조성되면서 관광객들에게 쉼과 충전의 장소가 되고 있다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>전남 목포 고하도안길 234</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-4-sj" class="tab-content">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/sj_autumn_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">죽녹원</h2>
                  <p>담양군이 성인산 일대에 조성하여 2003년 5월 개원한 대나무 정원으로 약 16만 평의 울창한 대숲이 펼쳐져 있다.
                    연두빛 죽림에 하얀 눈이 쌓인 모습은 가히 장관이다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>전남 담양군 담양읍 죽녹원로 119</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/sj_autumn_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">백아산 세량지</h2>
                  <p>이거 고치기 다른거로</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>전남 화순군 화순읍 세량리 일대</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 제주 -->
  <div class="article7" style="width: 100%; height: 100%; border: 1px; solid white; display: none">
    <section id="scroll">
      <div class="container px-5">
        <div class="row gx-5 align-items-center">
          <div class="col-lg-6 order-lg-2 col-md-12">
            <div class="p-5">
              <img src="assets/img/map_jeju.png" alt="..." style="max-width:120%; height:auto;" />
            </div>
          </div>
          <div class="col-lg-6 order-lg-1 col-md-12">
            <div class="p-5">
              <h2 class="display-4" style="text-align:center;">제주</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="tabs">
            <li class="tab-link current" data-tab="tab-1-je">봄</li>
            <li class="tab-link" data-tab="tab-2-je">여름</li>
            <li class="tab-link" data-tab="tab-3-je">가을</li>
            <li class="tab-link" data-tab="tab-4-je">겨울</li>
          </ul>
          <div id="tab-1-je" class="tab-content current">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/jeju_spring_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">전농로</h2>
                  <p>전농로는 KAL호텔 사거리에서 남성오거리까지 약 1.2km에 이르는 왕복 2차선 도로로, 오래전부터 제주도에서 제일가는 벚꽃거리로 명성을 떨쳐왔다.
                    수십 년 된 왕벚나무들이 줄지어 서 있는 이 거리는 해마다 봄이면 벚꽃이 만발해 그야말로 꽃천지를 이룬다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>제주시 삼도1동</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/jeju_spring_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">노리매공원</h2>
                  <p>노리매는 순 우리말 '놀이'와 '매화'의 매가 합쳐져 만들어진 이름으로 자연속에서 현대적 감성을 즐길 수 있는 자연공원이다.
                    수선화, 매화, 목련, 작약 등 다양한 봄꽃들이 만개하는 봄에 산책하기 좋은 명소이다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>제주 서귀포시 대정읍 중산간서로 2260-15</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/jeju_spring_3.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">토끼썸</h2>
                  <p>토끼썸 카페는 제주 바닷가 바로 앞. 바다가 보이는 루프탑에서 피크닉을 즐길 수 있는 제주 감성 피크닉 카페이다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>제주 제주시 구좌읍 해맞이해안로 1860</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-2-je" class="tab-content">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/jeju_summer_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">중문색달해수욕장</h2>
                  <p>제주특별자치도 서귀포시 색달동 중문관광단지 안에 있는 해수욕장으로 모래밭 오른쪽에 있는 벼랑바위에 약 15m의 천연 해식동굴이 하나 있고, 그 뒤로 바위가 병풍처럼 둘러 있다.
                    물살이 거친 편이어서 어린이들은 유의해야 하지만, 그 때문에 윈드서핑의 적지로 꼽히기도 한다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>제주 서귀포시 색달동</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/jeju_summer_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">협재해수욕장</h2>
                  <p>한림읍 서해안 지대에 위치하며 조개껍질이 많이 섞인 은모래가 펼쳐지는데, 수심이 얕고 경사가 완만하기 때문에 수영 초보자에게도 알맞은 해수욕장이다.
                    각종 시설이 마련되어 있고 전복 ·소라 등 해산물이 많이 잡히며 주위에 송림과 잔디가 있어 캠핑하기에도 적당하다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>제주 제주시 한리믑 협재리 2497-1</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-3-je" class="tab-content">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/jeju_autumn_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">한라산</h2>
                  <p>한라산은 제주도의 화산 활동에 의해 형성된 화산으로 남한에서 가장 높은 산이다. 해안지대에는 폭포와 주상절리 등 아름다운 화산지형이 펼쳐지고, 해발고도에 따라 아열대, 온대, 냉대 등 1,800여 종에 달하는
                    식물이 자생하여 고도에 따른 식생의 별화가 뚜렷하다. 가을에는 단풍이 절경이고 곳곳에서 한라산의 상징인 노루를 볼 수 있다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>제주 서귀포시 토평동 산15-1</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/jeju_autumn_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">마노르블랑</h2>
                  <p>마노르블랑 카페는 사계절 내내 꽃을 볼 수 있는 아름다운 정원이 있는 수목원카페이다. 봄 여름 겨울 모두 아름답지만 특히 가을에 만개하는 핑크뮬리와 팜파스의 명소이다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>제주 서귀포시 안덕면 일주서로2100번길 46</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-4-je" class="tab-content">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/jeju_winter_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">휴애리 동백축제</h2>
                  <p>휴애리동백축제는 서귀포시 남원읍 신례리에 위치해 동백꽃 뿐만 아니라 감귤체험도 함께 해 볼 수 있어 다양한 볼거리와 놀거리가 있는 휴애리의 대표 겨울 축제이다. </p>
                  <dl>
                    <dt>주소</dt>
                    <dd>제주 서귀포시 남원읍 신례동로 256</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/jeju_winter_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">스타빌글램핑</h2>
                  <p>스타빌글램핑장은 별이 쏟아지는 한라산 600m 고지 하늘과 가장 가까운 깊숙한 제주 청정자연 속에 있는 글램핑장이다. 다양한 액티비티와 스타키퍼가 제공하는 맞춤형 특별 서비스까지 제공되며 글램핑장 내부 수영장은 겨울에도 수온을 32도,
                    온천탕도 있어 겨울에 가기 최적인 글램핑장이다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>제주 서귀포시 안덕면 광평로 34-154</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 강원 -->
  <div class="article8" style="width: 100%; height: 100%; border: 1px; solid white; display: none">
    <section id="scroll">
      <div class="container px-5">
        <div class="row gx-5 align-items-center">
          <div class="col-lg-6 order-lg-2 col-md-12">
            <div class="p-5">
              <img src="assets/img/map_gyo.png" alt="..." style="max-width:120%; height:auto;" />
            </div>
          </div>
          <div class="col-lg-6 order-lg-1 col-md-12">
            <div class="p-5">
              <h2 class="display-4" style="text-align:center;">경기</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="tabs">
            <li class="tab-link current" data-tab="tab-1-gw">봄</li>
            <li class="tab-link" data-tab="tab-2-gw">여름</li>
            <li class="tab-link" data-tab="tab-3-gw">가을</li>
            <li class="tab-link" data-tab="tab-4-gw">겨울</li>
          </ul>
          <div id="tab-1-gw" class="tab-content current">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/gw_spring_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">경포대</h2>
                  <p>경포대 벚꽃 축제는 벚꽃 개화기를 전후해 약 1주일 동안 경포대 일원에서 개최된다. 이 기간 동안에 관동팔경 중 제일로 꼽히는 경포대를 무료로 개방한다. 진입로 주변 3㎞ 구간은 만발한 벚꽃으로 장관을 이룬다. 이 때 강릉시에서는 벚꽃을 감상하면서 안락함을 느낄 수 있도록
                    강릉시 교향악단, 강릉관노가면극, 강릉시립 예술단 음악회, 그린 실버 음악단, 이벤트 기획사 등의 공연을 개최하고 있다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>강원도 강릉시 경포로 365</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/gw_spring_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">복사꽃마을</h2>
                  <p>복사꽃마을은 주문진 바닷가에서 4km내에 위치해 있는 숨은 진주와 같은 무공해 청정마을이다. 영동지역 최대 과수마을답게 사계절 풍부한 과일을 생산해내고 정보화 마을의 이름을 걸고 복사꽃 축제, 허수아비 축제를 통한
                    브랜드가치 향상과 체험과 전자상거래 활성화를 통한 새로운 발전을 이뤄내고 있는 고장이다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>강원도 강릉시 주문진읍 신리천로 527-3</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-2-gw" class="tab-content">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/gw_summer_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">죽도해변</h2>
                  <p>죽도해수욕장은 강원도 양양군 현남면 인구리에 있는 해수욕장으로, 앞바다에 대나무가 많아 죽도라고 하는 섬이 있어 붙여진 이름이다.
                    수심이 낮고 경사가 완만하여 가족 단위 피서지로 각광받고 있다. 주변에 크고 작은 바위가 많아 바다낚시를 하기에도 적합하다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>강원 양양군 현남면</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/gw_summer_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">경포대 해수욕장</h2>
                  <p> 경포호와 바다 사이에 생성되어 있는 사빈으로, 6km의 백사장이 펼쳐져 있고 주위에 소나무숲이 우거져 있다. 또한 곳곳에 산재하는 해당화는 한층 아름다움을 더한다.
                    부근에는 경포대와 오죽헌 등 많은 명승고적이 있으며, 피서객이 많이 찾아온다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>강원도 강릉시 강문동 산1-1</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/gw_summer_3.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">무릉계곡힐링 캠핑장</h2>
                  <p>신선이 노닐었다는 일명 무릉도원이라 불리우며 두타산과 청목산을 배경으로 이루어진 계곡으로 수많은 기암괴산과 절경들이 장관을 이루고 있어 마치 현존하는 선경에 와있는 듯한 느낌을 준다.
                    태고의 신비와 전설 속에 무릉계곡명승지는 이 곳을 찾는 많은 관광객들을 매료시키기에 충분한 관광명소다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>강원도 동해시 삼화로 538</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-3-gw" class="tab-content">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/gw_autumn_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">효석문화제</h2>
                  <p>효석문화제는 현대 단편소설의 대표작인 '메밀꽃 필 무렵'의 작품배경지인 봉평에서 자연과 문학이 함께하는 축제로 메밀과 소설의 내용을 담은 다채로운 행사로 축제를 찾은
                    관광객들의 눈과 귀를 즐겁게 해준다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>강원 평창군 봉평면 이효석길 157</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/gw_autumn_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">오대산</h2>
                  <p>오대산은 전형적인 토산이며 토양이 비옥해 산림자원이 풍부하고 겨울철에는 강설량이 많다. 특히 월정사 입구에서 시작되는 빽빽한 젓나무 숲과 중턱의 사스래나무, 정상 부근의 눈측백나무와 주목 군락, 호령계곡의 난티나무 군락이 장관이다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>강원도 홍천군 내면 오대산로2</dd>
                    <dt>교통 정보</dt>
                    <dd>영동고속도로 진부IC --> 6번국도 --> 월정3거리 --> 간평교 --> 월정사 --> 상원사</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/gw_autumn_3.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">치악산</h2>
                  <p>1973년에 강원도도립공원으로 지정되었으며, 1984년 국립공원으로 승격되었다. 큰골·영원골·입석골·범골·사다리골·상원골·신막골 등
                    아름다운 계곡과 입석대·세존대·신선대·구룡폭포·세렴폭포·영원폭포 등 볼거리가 많다. 이밖에 구룡사·상원사·석경사·국향사·보문사·입석사 와 같은 오래된 절이 많이 있다. </p>
                  <dl>
                    <dt>주소</dt>
                    <dd>강원도 원주시 소초면 무쇠점2길 26</dd>
                    <dt>교통 정보</dt>
                    <dd>서울에서 구룡사까지 145.6km, 약 1시간 30분 소요.</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-4-gw" class="tab-content">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/gw_winter_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">오대산 전나무길</h2>
                  <p>약 1㎞ 이어진 오대산 전나무길은 한국 3대 전나무길로 불린다. 80년 이상 된 1700여 그루가 쭉쭉 뻗은 덕분에 걷는 것만으로도 마음이 정화된다.
                    피톤치드 향이 몸과 마음을 맑게 하는 숲길은 언제나 아름답지만, 겨울에는 푸른 전나무 위에 하얀 눈이 내려앉아 더욱 근사하다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>강원도 평창군 진부면 오대산로 350-1</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/gw_winter_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">태백산 눈축제</h2>
                  <p>해마다 겨울이면 하얀 눈으로 뒤덮이는 태백산의 설경과 주목 군락 등 웅장한 태백산을 배경으로 지역 관광산업과 연계해 강원도 태백시에서 개최하는 겨울철 관광축제이다.
                    1994년 제1회 대회를 개최한 이후 매년 1월 말에 약 9일에 걸쳐 다채로운 행사가 펼쳐진다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>강원도 태백시 혈동</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/gw_winter_3.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">속삭이는 자작나무 숲</h2>
                  <p>자연 생태관광지인 원대리 자작나무 숲은 1974년부터 1995년까지 138ha에 자작나무 690,000본을 조림하여 만들어졌으며 현재는 그중 25ha를 유아 숲 체험원으로 운영하고 있다.
                    겨울철에는 흰 눈에 뒤덮인 숲과 새하얀 자작나무가 어우러져 사진 촬영 장소로 인기가 좋다. 어린이가 있는 가족 단위의 방문객이라면 유아 숲 체험원에서 숲속교실, 인디언집 등 자연을 주제로 한 다양한 체험 활동을 즐길 수도 있다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>강원도 인제군 인제읍 자작나무숲길 760</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 충북 -->
  <div class="article9" style="width: 100%; height: 100%; border: 1px; solid white; display: none">
    <section id="scroll">
      <div class="container px-5">
        <div class="row gx-5 align-items-center">
          <div class="col-lg-6 order-lg-2 col-md-12">
            <div class="p-5">
              <img src="assets/img/map_nc.png" alt="..." style="max-width:120%; height:auto;" />
            </div>
          </div>
          <div class="col-lg-6 order-lg-1 col-md-12">
            <div class="p-5">
              <h2 class="display-4" style="text-align:center;">충북</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="tabs">
            <li class="tab-link current" data-tab="tab-1-nc">봄</li>
            <li class="tab-link" data-tab="tab-2-nc">여름</li>
            <li class="tab-link" data-tab="tab-3-nc">가을</li>
            <li class="tab-link" data-tab="tab-4-nc">겨울</li>
          </ul>
          <div id="tab-1-nc" class="tab-content current">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/nc_spring_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">청풍호 벚꽃축제</h2>
                  <p>해마다 4월이면 청풍호는 하얀 벚꽃이 눈처럼 휘날리는 시기이다.
                    이 시기에 맞춰 지역 농·특산품전시판매, 먹거리 장터, 공연, 체험, 경연, 전시, 기타 부대행사 등 다채로운 문화축제가 펼쳐집니다.
                    97년을 1회로 시작하여 매년 개최되고 있는 이 축제는 제천시 금성면 청풍호 입구에서 부터 청풍면 소재지까지 약 13km 구간에서 행해지는데 봄을 만끽하고자 하는 관광객들로 장사진을 이룹니다</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>충북 제천시 청풍면 청풍호로 2048</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/nc_spring_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">농다리</h2>
                  <p>사력 암질의 붉은 돌을 쌓아서 만들어진 다리로, 우리나라에서 가장 오래되고 긴 돌다리이다. 다리는 사력암질의 자석을 쌓아 놓은 다리로서, 28칸의 교각이다.
                    지방유형문화재로서 길이는 93.6m, 폭 3.6m, 교각 1.2m 정도이며, 교각 사이의 내폭은 80cm 내외이다.석회등을 바르지 않고 그대로 쌓았는데도 견고하며 장마가 져도 유실됨이 없이 원형을 유지하고 있다.
                    이 다리는 고려 초엽시대의 권신, 임장군이 놓았다는 돌다리로 규모도 크고 축조술도 특이하다.
                    정자, 산책로, 초평저수지까지 연결된 수변데크 등이 조성되어 새로운 관광명소로 자리잡았으며, 신비로운 다리모양과 주변풍경이 잘 어우러져 드라마 촬영지로도 등장한다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>충북 진천군 초평면 화산리</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-2-nc" class="tab-content">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/nc_summer_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">모래재캠핑장</h2>
                  <p>모래재캠핑장은 괴산의 명산 보광산과 모래재 용정 저수지가 만나는 천혜의 자연에 있는 힐링캠핑장이다. 바로 옆엔 계곡이 흘러 여름에도 시원한 캠핑을 즐길 수 있다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>충북 괴산군 사리면 모래재로 483-14</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/nc_summer_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">봉황계곡</h2>
                  <p>수룡폭포에서 내려온 물이 계류를 이루어 봉황휴양림사이를 지난다.
                    가운데 보가있어 유속이 느리고 물이 얕아 어린아이와 함께하는 가족이 즐기기에 적합한 환경이다. </p>
                  <dl>
                    <dt>주소</dt>
                    <dd>충북 충주시 중앙탑면 봉황리 584-74</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-3-nc" class="tab-content">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/nc_autumn_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">속리산</h2>
                  <p>속리산은 한국팔경 가운데 하나에 속하는 명산으로, 화강암의 기봉과 울창한 산림으로 뒤덮여 있고,
                    산중에는 천년 고찰의 법주사가 있다. 봄에는 산벚꽃, 여름에는 푸른 소나무, 가을에는 붉게 물든 단풍,
                    겨울에는 설경으로 계절마다 고유한 아름다움을 드러낸다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>충북 보은군 속리산면 법주사로 84</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/nc_autumn_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">소백산 자연휴양림</h2>
                  <p>소백산 자연휴양림은 260ha에 이르는 군유림의 풍부한 산림자원을 활용하여 3개소에 소백산 화전민촌 화전민가 9동, 소백산 자연휴양림 산림문화휴양관 2동 15실, 숲속의 집 10동,
                    정감록명당 체험마을 15동 등 모두 49동에 이르는 산림휴양시설과 피톤치드를 만끽할 수 있는 숲속 탐방로와 소백산 자락길 6구간(온달평강 로맨스길) 등이 조성되어 풍부한 산림에서 맑은 공기를 호흡하고 느낄 수 있는 곳이다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>충북 단양군 영춘면 하리방터길 180 화전민촌</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-4-nc" class="tab-content">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/nc_winter_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">능암 온천랜드</h2>
                  <p>능암온천랜드의 온천수는 세계적으로 희귀한 천연 탄산온천을 제공한다. 능암온천은 다량의 탄산가스(629.49ml/L)와 천연 미네럴 성분들(실리카 81ml/L, 철분, 마그네슘 등)이
                    함유되어 있어 입욕 시 피부에 탄산기포들이 생기면서 모세혈관을 자극하고 확장시켜 주는 작용을 하여 혈압을 내려주고 심장의 기능을 원활하게 하는 효과가 있다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>충북 충주시 앙성면 새바지길 37</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/nc_winter_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">월악산</h2>
                  <p>월악산은 달이 뜨면 영봉에 걸린다 하여 '월악'이라는 이름이 붙었다. 봄에는 다양한 봄꽃과 함께하는 산행, 여름에는 깊은 계곡과 울창한 수림을 즐기는 계곡 산행,
                    가을에는 충주호와 연계한 단풍 및 호반 산행, 겨울에는 설경 산행으로 인기가 높다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>충북 제천시 덕산면 미륵송계로 1647</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 경북 -->
  <div class="article10" style="width: 100%; height: 100%; border: 1px; solid white; display: none">
    <section id="scroll">
      <div class="container px-5">
        <div class="row gx-5 align-items-center">
          <div class="col-lg-6 order-lg-2 col-md-12">
            <div class="p-5">
              <img src="assets/img/map_ng.png" alt="..." style="max-width:120%; height:auto;" />
            </div>
          </div>
          <div class="col-lg-6 order-lg-1 col-md-12">
            <div class="p-5">
              <h2 class="display-4" style="text-align:center;">경북</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="tabs">
            <li class="tab-link current" data-tab="tab-1-ng">봄</li>
            <li class="tab-link" data-tab="tab-2-ng">여름</li>
            <li class="tab-link" data-tab="tab-3-ng">가을</li>
            <li class="tab-link" data-tab="tab-4-ng">겨울</li>
          </ul>
          <div id="tab-1-ng" class="tab-content current">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/ng_spring_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">경상북도 수목원</h2>
                  <p>지역 향토 수종 등 가치 있는 임목 유전자원을 보존하고, 학술연구를 통한 산림문화 창달과 도민 자연학습장으로 활용하기 위해 2001년 9월 17일 문을 열었다.
                    포항시에서 가장 오지인 내연산의 고지대에 있으며, 주위가 높은 산들로 둘러싸여 분지 형태를 이룬다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>경북 포항시 북구 죽장면 수목원로 647 경북 수목원</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/ng_spring_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">불국사 잔디광장</h2>
                  <p>봄의 불국사 잔디광장에는 일반 벚꽃보다 10배는 더 아름답다는 겹벚꽃이 피어있다. 불국사 겹벚꽃은 불국사 주차장에서 불국사 경내로 오르는 야트막한 둔덕, 즉 잔디광장에 자리하고 있는데,
                    산책길 왼쪽으론 일반 벚꽃이, 오른쪽에는 겹벚꽃이 군락지를 이루고 있다. 잔디광장 곳곳에 야외용 돗자리를 깔고 있는 시민과 관광객들의 모습과 꽃을 보고 즐기며 산책하는 인파가 인산인해를 이룬다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>경북 경주시 진현동 85-9</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-2-ng" class="tab-content">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/ng_summer_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">파도소리길 양동마을</h2>
                  <p>파도소리길은 읍천항에서 하서항까지 1.7km 구간을 일컫는다. 데크 로드, 정자, 벤치, 구름다리 등 해안 길이 잘 정비되어 있다.
                    이곳은 경주 양남 주상절리를 구경하며 걸을 수 있다. 다양한 형태의 주상절리를 관찰할 수 있다. 발달 규모와 형태의 다양성을 인정받아 지난 2012년 9월 천연기념물로 지정되었다.
                    그중에서도 압권은 펴진 부채 모양과 같이 둥글게 펼쳐진 부채꼴 주상절리이다. 세계적으로도 유례를 찾기 어려운 아주 희귀한 형태이다. </p>
                  <dl>
                    <dt>주소</dt>
                    <dd>경북 경주시 양남면 읍천리 405-5</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/ng_summer_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">호미곶</h2>
                  <p>호미곶은 상생의 손은 육지에 왼손이, 바다에 오른손이 설치되어 있는데 새천년을 맞아 모든 국민이 서로 도우며 살자는 뜻에서 조성되었다. 광장 진입로에는 유채꽃 단지가 있고 매년 4~5월경에
                    유채꽃이 활짝 핀다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>경북 포항시 남구 호미곶면 해맞이로 242</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-3-ng" class="tab-content">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/ng_autumn_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">가산수피아</h2>
                  <p>가산수피아는 사계절 내내 아름다운 테마정원 수목원이다. 계절마다 테마 정원의 테마가 바뀌지만 특히 가을에 일렁이는 핑크뮬리밭의 명소이다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>경북 칠곡군 가산면 학하들안2길 105</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/ng_autumn_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">도산서원</h2>
                  <p>1969년 5월 31일 사적으로 지정되었다. 동서재 정면 3칸, 측면 2칸의 홑처마 맞배집, 전교당 정면 4칸, 측면 2칸의 홑처마 굴도리집, 정면 3칸, 측면 2칸의 단층 기와집이다.
                    가을색 깊어가는 도산서원은 비단 옛 성형의 위대한 정신세계 뿐만 아니라 자연과 어우러진 서원건축의 정수 또한 볼 수 있다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>경북 안동시 도산면 도산서원길 154</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-4-ng" class="tab-content">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/ng_winter_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">환상선 눈꽃열차</h2>
                  <p>환상선 눈꽃 순환열차는 겨울 눈꽃을 소재로 하는 꿈과 낭만의 기차여행으로 때묻지 않은 오지 시골간이역 슬부역과 추전역 그리고 분천역 산타마을을 배경으로 개발된 겨울철 대표적인 철도 관광상품이다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>경북 봉화군 석포면 승부길 1162-29</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/ng_winter_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">소노벨경주오션플레이</h2>
                  <p>소노벨경주오션플레이는 여름에 물놀이를 즐기러 가기도 좋지만 겨울에 온천을 즐기며 쉴 수 있는 곳이다. 경상북도 경주에 자리한 대명리조트는 경주아쿠아월드 뿐만 아니라 다양한 시설이 마련되어 있다. 대명리조트의 부대시설에는 굿앤굿스, 게임존, 노래연습장 등이 있다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>경북 경주시 보문로 402-12 대명리조트 경주</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 경남 -->
  <div class="article11" style="width: 100%; height: 100%; border: 1px; solid white; display: none">
    <section id="scroll">
      <div class="container px-5">
        <div class="row gx-5 align-items-center">
          <div class="col-lg-6 order-lg-2 col-md-12">
            <div class="p-5">
              <img src="assets/img/map_sg.png" alt="..." style="max-width:120%; height:auto;" />
            </div>
          </div>
          <div class="col-lg-6 order-lg-1 col-md-12">
            <div class="p-5">
              <h2 class="display-4" style="text-align:center;">경남</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="tabs">
            <li class="tab-link current" data-tab="tab-1-sg">봄</li>
            <li class="tab-link" data-tab="tab-2-sg">여름</li>
            <li class="tab-link" data-tab="tab-3-sg">가을</li>
            <li class="tab-link" data-tab="tab-4-sg">겨울</li>
          </ul>
          <div id="tab-1-sg" class="tab-content current">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/sg_spring_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">진항군항제</h2>
                  <p>군항도시에서 함께 즐기는 세계최대 벚꽃축제 진항군항제가 2020 3월 27일부터 6일까지 개최 된다. 중원로터리에서 전야제, 팔도풍물시장, 예술문화공연 등 주요 행사가 열리고 북원로터리에서는 이충무공 동상에 헌다헌화, 추모대제, 승전행차 퍼레이드가 열린다.
                    또한 군항도시의 특성을 살린 '군악의장페스티벌'은 축제기간 중 개최 되는데 군악·의장이 융합된 군대예술 공연으로 군악 대의 힘찬 마칭공연과 의장대의 멋있는 제복에 절도 있는 공연은 진해군항제에서만 볼 수 있는 공연이다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>경남 창원시 진해구 여좌동 217</dd>
                    <dt>교통 정보</dt>
                    <dd>진해역 도보 10분</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/sg_spring_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">쌍계사 십리벚꽃길</h2>
                  <p>쌍계사 십리벚꽃길은 대한민국에서 가장 아름다운 벚꽃길로 손꼽힌다. 쌍계사에서 화개장터로 이어지는 5km의 십리벚꽃길은 살랑거리는 봄바람에 흩날리는 '꽃비'가 장관을 연출한다.
                    아름다운 섬진강을 배경으로 펼쳐진 하동 차밭과 핑크빛 벚꽃터널은 사랑하는 연인, 가족, 친구와 거닐기 적합하다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>경남 하동군 화개면 화개로 142</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/sg_spring_3.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">원동 순매원</h2>
                  <p>원동 순매원은 낙동강의 아름다운 강변과 기찻길이 어우러진 매화길 명소이다. 낙동강변을 배경삼아 가득 만개한 매화꽃은 절경이다. </p>
                  <dl>
                    <dt>주소</dt>
                    <dd>경남 양산시 원동면 원동로 1421 원동순매실농원</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-2-sg" class="tab-content">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/sg_summer_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">상주 은모래비치</h2>
                  <p>상주은모래비치는 은빛 고운 모래로 이루어진 넓은 백사장, 울창하고 아름다운 숲과 더불어 한려해상 국립공원의 청정 바다로 이루어진 전국에서 몇 안 되는 아름다운 자연 경관을 간직한 해수욕장이다.
                    경관뿐만 아니라 전국 3대 기도도량 중 하나인 보리암이 자리한 명산 금산을 단 하루 코스로 다녀올 수 있어 관광객들의 발걸음이 끊이지 않는 곳이다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>경남 남해군 상주면 상주로 17-4</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/sg_summer_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">학동흑진주몽돌 해수욕장</h2>
                  <p>해변을 흑진주 같은 몽돌이 가득 채우고 있다. 특히 여름철 이 몽돌밭을 거닐면 지압 효과를 얻을 수 있어 건강에 좋다. 몽돌해수욕장의 수심은 남해의 다른 해수욕장과는 다르게 수심이 깊고 파도가 거칠기 때문에 약간의 주의가 필요하지만, 대신 바나나보트 등의 해양 레포츠가 잘 갖춰져 있다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>경남 거제시 동부면 학동리</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-3-sg" class="tab-content">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/sg_autumn_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">북천 코스모스 메밀꽃축제></h2>
                  <p></p>
                  <dl>
                    <dt>주소</dt>
                    <dd>경남 하동군 북천면 직전리 601-3</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/sg_autumn_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">지리산</h2>
                  <p></p>
                  <dl>
                    <dt>주소</dt>
                    <dd>경남 함양군 마천면 추성리</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-4-sg" class="tab-content">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/sg_winter_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">거제도해수보양온천</h2>
                  <p>거제도 해수보양온천은 행정안전부로부터 국내 제10호 국민보양온천으로 지정받았으며, 양지르이 총 고용물이 가장 높은 보양온천이다.
                    거제도 해수보양온천은 지하 800미터 암반에서 솟아오르는 다량의 칼슘을 함유한 약알칼리성 약식염천으로 피부, 근육통, 관절염, 여성병 및 수족냉증 등에 효능이 있다. </p>
                  <dl>
                    <dt>주소</dt>
                    <dd>경남 거제시 수양로 507 거제도해수보양온천</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/sg_winter_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">에덴벨리스키장</h2>
                  <p>에덴벨리스키장은 영남 유일 스키장이다. 베이직슬로프를 포함한 총 6면의 슬로프와 리프트 3기가 설치되어 있으며 영남 유일, 최대규모를 자랑한다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>경남 양산시 원동면 어실로 1206</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 부산 -->
  <div class="article12" style="width: 100%; height: 100%; border: 1px; solid white; display: none">
    <section id="scroll">
      <div class="container px-5">
        <div class="row gx-5 align-items-center">
          <div class="col-lg-6 order-lg-2 col-md-12">
            <div class="p-5">
              <img src="assets/img/map_pus.png" alt="..." style="max-width:120%; height:auto;" />
            </div>
          </div>
          <div class="col-lg-6 order-lg-1 col-md-12">
            <div class="p-5">
              <h2 class="display-4" style="text-align:center;">부산</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="tabs">
            <li class="tab-link current" data-tab="tab-1-pus">봄</li>
            <li class="tab-link" data-tab="tab-2-pus">여름</li>
            <li class="tab-link" data-tab="tab-3-pus">가을</li>
            <li class="tab-link" data-tab="tab-4-pus">겨울</li>
          </ul>
          <div id="tab-1-pus" class="tab-content current">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/pus_spring_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">대저생태공원</h2>
                  <p>대저생태공원은 신덕습지를 비롯한 크고 작은 습지와 수로, 초지, 유채꽃단지, 각종 체육시설이 조성되어 있어 여가와 휴식을 즐길 수 있는 곳이다.
                    공원의 양쪽끝에 체육시설과 이용편의시설을 배치하고 그 외 지역은 습지와 초지 등으로 조성하였다. 특히 구포대교 아래쪽으로 조성된 유채경관단지(370,000㎡)에서 매년 4월 개최되는 유채꽃축제에는 수많은 관광객들이 방문하는 새로운 명소로 자리잡고 있다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>부산 강서구 대저1동 2314-11</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/pus_spring_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">민주공원</h2>
                  <p>민주공원은 민주공원 상징물인 민주횃불이 민주항쟁기념관 가운데 있으며, 전망대에서는 부산 원도심과 부산항을 한눈에 볼 수 있다. 수목원에는 약 4백 종의 수목이 있어
                    봄에 나들이 가기 좋으며 특히 겹벚꽃/왕벚꽃의 명소로 많은 관광객들이 찾아온다. </p>
                  <dl>
                    <dt>주소</dt>
                    <dd>부산 중구 민주공원길 19</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-2-pus" class="tab-content">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/pus_summer_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">송정해수욕장</h2>
                  <p>송정해수욕장은 맑고 깨끗한 물과 고요한 해수욕장의 분위기로 알려져 있다. 수심이 얕고 경사가 완만하며 파도도 거칠지 않아 수영 초보자도 수영을 즐기기에 적합하다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>부산 해운대구 송정동 712-2</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/pus_summer_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">해운대 해수욕장</h2>
                  <p>해운대해수욕장은 수심이 얕고 조수의 변화도 심하지 않아 해수욕장으로서의 조건이 좋다. 숙박·오락시설이 잘 정비된 국내 1급의 해수욕장으로, 국내 유수의 온천장까지 끼고 있어 해마다 여름철에는 50~60만의 인파로 붐빈다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>부산 해운대구 우동</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-3-pus" class="tab-content">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/pus_autumn_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">삼락생태공원</h2>
                  <p>삼락생태공원은 12종목의 운동을 즐길 수 있는 체육시설(58면)을 비롯하여 잔디광장, 야생화단지 및 자연학습장, 사계절꽃동산, 자연초지 및 습지, 인라인스케이트·자전거·산책을 즐길 수 있는 코스, 문화마당 등으로 꾸며진 체육·휴식공간이며, 콘서트·생활체육대회·축제와 같은 다양한 행사가 열리는 장소이기도 하다. </p>
                  <dl>
                    <dt>주소</dt>
                    <dd>부산 사상구 삼락동 686</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/pus_autumn_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">보수동책방골목</h2>
                  <p>보수동책방골목은 한국전쟁 당시 부산이 임시수도였을 때, 함경북도에서 피난 온 한 부부가 최초로 미군부대에서 나온 헌 잡지와 고물상에서 수집한 책자 등을 팔면서 자연스럽게 형성되었다고 한다.
                    언젠가 레트로열풍과 함께 젊은 세대에게 이 곳이 핫플레이스로 떠오르면서 관광객도 꾸준히 유지하고 있다. 가을은 독서의 계절인 만큼 가을 여행지로 추천한다. </p>
                  <dl>
                    <dt>주소</dt>
                    <dd>부산 중구 보수동 1가 책방골목</dd>
                    <dt>교통 정보</dt>
                    <dd>1호선 자갈치역 3번출구 672미터</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div id="tab-4-pus" class="tab-content">
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/pus_winter_1.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">블루라인파크</h2>
                  <p>해운대 블루라인파크는 해운대 미포~청사포~송정에 이르는 4.8km 구간의 동해남부선 옛 철도시설을 친환경적으로 재개발하여, 수려한 해안절경을 따라 해운대 해변열차와 해운대 스카이캡슐을 운행하는 국제 관광도시 부산, 해운대 관광특구의 핵심 관광 시설이다.
                    해운대 해변열차는 아름다운 동부산의 수려한 해안절경을 감상하면서 해운대 미포에서 청사포를 거쳐 송정까지 왕복으로 운행하는 교통수단을 겸비한 관광열차이다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>부산 해운대구 중동 555-2</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="row gx-5 align-items-center">
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <img src="assets/img/pus_winter_2.png" alt="..." style="max-width:100%; height:auto;" />
                </div>
              </div>
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <h2 class="display-6" style="text-align:center;">해동용궁사</h2>
                  <p>해동용궁사는 바다와 산의 매력을 동시에 엿볼 수 있는 부산에서 추천할만한 명소이다. 낭만적인 겨울 바다의 매력을 한껏 느낄 수 있다. 바닷가에 위치한 사찰은 혼자 방문해도 운치를 감상하기에 충분하다. 절벽에 부딪히는 파도의 모습은 가히 절경이다.</p>
                  <dl>
                    <dt>주소</dt>
                    <dd>부산 기장군 기장읍 시랑리 416-3</dd>
                    <dt>교통 정보</dt>
                    <dd>-</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer-->
  <footer class="py-5 bg-black">
    <div class="container px-5"><p class="m-0 text-center text-white small">Copyright &copy; Myungji College 2022</p></div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/travel.js"></script>
    <script>
    function logout() {
      console.log("hello");
      const data = confirm("로그아웃 하시겠습니까?");
      if (data) {
        location.href = "../htdocs/logoutProcess.php";
      }
    }
  </script>
  <script>
    document.querySelectorAll('.button').forEach(
      button => button.innerHTML =
      '<div><span>' + button.textContent.trim().split('').join('</span><span>') + '</span></div>'
    );

    function doletter() {
      console.log("hello");
      //var a = $_SESSION['userId'];
      <?php
        if ($_SESSION['userId'] === "관리자"){
      ?>
      location.href = "../message/message_box.php?mode=rv";
      <?php
        }else {
      ?>
      location.href = "../message/message_form.php";
      <?php
        }
      ?>
    }
  </script>
</body>
</html>
