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
        <style>
        <div style = "font-family: 'Black Han Sans', sans-serif;></div>
        *{p style="font-size:25px; font-family: 'Noto Sans KR', sans-serif;"}
            @import url('https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Jua&family=Noto+Sans+KR:wght@700&display=swap');

        </style>
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
                              echo "{$_SESSION['userId']}";
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
                <div class="container px-5">
                    <img src="assets/Logo.png" alt="...">
                </div>
                <div class="container px-5">
                    <h2 class="masthead-subheading mb-0" style="Color:rgb(12 123 189);">MYEONGENIE</h2>
                    <h5 style="Color:rgb(12 123 189);">Myongji College ICT Convergence Engineering</h5>
                </div>
            </div>
        </header>
        <!-- Content section 1-->
        <div class="jc">
            <div>
                <button class = "myButton" type="button" id="step1" style="z-index: 10 margin:auto; width:20vw; height:6vh; Color:rgb(12 123 189); font-size:1rem; font-family: 'Noto Sans KR', sans-serif;">척추측만증</button>
            </div>
            <div>
                <button class = "myButton" type="button" id="step2" style="z-index: 10 margin:auto; width:20vw; height:6vh; Color:rgb(12 123 189); font-size:1rem; font-family: 'Noto Sans KR', sans-serif;">라운드숄더</button>
            </div>
            <div>
                <button class = "myButton" type="button" id="step3" style="z-index: 10 margin:auto; width:20vw; height:6vh; Color:rgb(12 123 189); font-size:1rem; font-family: 'Noto Sans KR', sans-serif;">거북목증상</button>
            </div>
            <div>
                <button class = "myButton" type="button" id="step4" style="z-index: 10 margin:auto; width:20vw; height:6vh; Color:rgb(12 123 189); font-size:1rem; font-family: 'Noto Sans KR', sans-serif;">터널증후군</button>
            </div>
        </div>
        <div style="">
            <div class="article1" style="width: 100%; height: 100%; border: 1px; solid white; display: none">
                <section id="scroll">
                    <div class="container px-5">
                        <div class="row gx-5 align-items-center">
                            <div class="col-lg-6 order-lg-2">
                                <div>
                                    <img src="assets/img/scoliosis1.png" alt="..." style="max-width:100%; height:auto;"/>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-1">
                                <div class="p-5">
                                    <h2 class="display-4">척추측만증</h2>
                                    <p style="font-size:18px; font-family: 'Noto Sans KR', sans-serif;">정상적인 척추는 정면에서 보면 일직선이지만 옆에서 보면 약간의 굴곡과 함께 S형 모양을 하고 있습니다.<br>
                                      정면에서 척추를 보았을 때 직선이 아니고 10도 이상 휜 상태라면 척추측만증일 확률이 매우 높습니다.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Content section 2-->
                <section id="scroll">
                    <div class="container px-5">
                        <div class="row gx-5 align-items-center">
                            <div class="col-lg-6">
                                <div>
                                    <img src="assets/img/scoliosis2.png" alt="..." style="max-width:100%; height:auto;"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <h2 class="display-4">자가진단</h2>
                                    <p style="font-size:18px; font-family: 'Noto Sans KR', sans-serif;">자가진단 방법에 따라 자신이 척추측만증에 해당하는지 확인합니다.<br>이들 중 하나라도 해당되면 척추측만증일 확률이 매우 높습니다.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Content section 3-->
                <section id="scroll">
                    <div class="container px-5">
                        <h2 class="display-4" style="text-align:center;">스트레칭</h2>
                        <div class="row gx-5 align-items-center">
                            <div class="col-lg-6 order-lg-2">
                                <div>
                                    <img src="assets/img/scoliosis3_1.png" alt="..." style="max-width:100%; height:auto;"/>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-1">
                                <div class="p-5">
                                    <p style="font-size:18px; font-family: 'Noto Sans KR', sans-serif;">
                                      1. 천장을 보고 누운 후 무릎을 굽히고 양 발은 골반 넓이로 벌려줍니다.<br><br>
                                      2. 호흡을 들이마시며 허리를 들어올려 바닥과의 간격을 넓혀줍니다.<br><br>
                                      3. 호흡을 내쉬며 발바닥으로 지면을 눌러 허리와 바닥 사이 공간을 없애줍니다.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-5 align-items-center">
                            <div class="col-lg-6 order-lg-2">
                                <div>
                                    <img src="assets/img/scoliosis3_2.png" alt="..." style="max-width:100%; height:auto;"/>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-1">
                                <div class="p-5">
                                    <p style="font-size:18px; font-family: 'Noto Sans KR', sans-serif;">
                                      1. 천장을 보고 누운 후 양 다리를 골반 넓이만큼 벌려 무릎을 직각으로 구부립니다.
                                      이 때 양손은 손등이 위를 향하도록 편안하게 놓아줍니다.<br><br>
                                      2. 허리와 바닥 사이에 공간이 없도록 하고 꼬리뼈와 엉덩이, 허리, 등 순으로 지면에서 천천히 들어 올려줍니다.<br><br>
                                      3. 엉덩이와 복근, 허벅지 힘으로 5초 동안 유지하며 양쪽 몸의 균형을 맞춰줍니다.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-5 align-items-center">
                            <div class="col-lg-6 order-lg-2">
                                <div>
                                    <img src="assets/img/scoliosis3_3.png" alt="..." style="max-width:100%; height:auto;"/>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-1">
                                <div class="p-5">
                                    <p style="font-size:18px; font-family: 'Noto Sans KR', sans-serif;">
                                      1. 네발기기 자세에서 호흡을 들이 마시며 등을 최대한 둥글게 만들고 시선은 단전을 향한 채로 유지합니다.<br><br>
                                      2. 숨을 내쉬면서 허리를 지면을 향해 내려주고 시선을 천장을 향하게 해줍니다.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="scroll">
                    <div class="container px-5">
                        <div class="row gx-5 align-items-center">
                            <div class="col-lg-6">
                                <div>
                                    <img src="assets/img/scoliosis3_4.png" alt="..." style="max-width:100%; height:auto;"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <p style="font-size:18px; font-family: 'Noto Sans KR', sans-serif;">
                                      1. 천장을 보고 누운 후 무릎을 굽혀 양 발을 골반 넓이만큼 벌리고 양손을 깍지 껴 머리를 받쳐줍니다.<br><br>
                                      2. 상복부를 수축해 준다는 느낌으로 상체만 올려줍니다.<br>
                                      이때 상체와 목이 동시에 움직일 수 있도록 하는 것이 중요합니다.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-5 align-items-center">
                            <div class="col-lg-6">
                                <div>
                                    <img src="assets/img/scoliosis3_5.png" alt="..." style="max-width:100%; height:auto;"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <p style="font-size:18px; font-family: 'Noto Sans KR', sans-serif;">
                                      1. 바닥에 엎드려 다리를 골반 넓이로 벌리고 양손은 앞으로 뻗습니다.<br>
                                      이 때 어깨가 아래로 처지거나 위로 들리지 않도록 주의합니다.<br><br>
                                      2. 골반이 지면에서 떨어지지 않도록 아랫배에 힘을 주고 시선은 바닥에서 45도를 유지해줍니다.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="article2" style="width: 100%; height: 100%; border: 1px; solid white; display: none">
                <section id="scroll">
                    <div class="container px-5">
                        <div class="row gx-5 align-items-center">
                            <div class="col-lg-6 order-lg-2">
                                <div>
                                    <img src="assets/img/round1.png" alt="..." style="max-width:100%; height:auto;"/>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-1">
                                <div class="p-5">
                                    <h2 class="display-4">라운드숄더</h2>
                                    <p style="font-size:18px; font-family: 'Noto Sans KR', sans-serif;">컴퓨터나 스마트폰 사용이 잦은 현대인들의 체형을 보면 굽은 어깨와 거북목을 흔하게 볼 수 있습니다.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Content section 2-->
                <section id="scroll">
                    <div class="container px-5">
                        <div class="row gx-5 align-items-center">
                            <h2 class="display-4" style="text-align:center;">자가진단</h2>
                            <div class="col-lg-6">
                                <div>
                                    <img src="assets/img/round2_1.png" alt="..." style="max-width:100%; height:auto;"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <p style="font-size:18px; font-family: 'Noto Sans KR', sans-serif;">귀와 어깨, 골반, 무릎, 복숭아뼈 라인이 일직선으로 보이는지 확인합니다.</p>
                                    <p style="font-size:18px; font-family: 'Noto Sans KR', sans-serif;">만약 일직선이 아닌 앞으로 휘어진 곡선이라면 거북목 증후군일 가능성이 높습니다.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <img src="assets/img/round2_2.png" alt="..." style="max-width:100%; height:auto;"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <p style="font-size:18px; font-family: 'Noto Sans KR', sans-serif;">거울을 보고 섰을 때 손날 보다 손등이 더 많이 보이는지 확인합니다.</p>
                                    <p style="font-size:18px; font-family: 'Noto Sans KR', sans-serif;">손날이 더 많이 보인다면 정상이지만, 손등이 더 많이 보인다면 거북목증후군일 가능성이 높습니다.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <img src="assets/img/round2_3.png" alt="..." style="max-width:100%; height:auto;"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <p style="font-size:18px; font-family: 'Noto Sans KR', sans-serif;">팔을 뒷짐지듯 뒤로 돌려 날개뼈가 닿는지 확인합니다.</p>
                                    <p style="font-size:18px; font-family: 'Noto Sans KR', sans-serif;">만약 팔이 날개뼈에 닿지 않고 어깨가 뻐근한 느낌이 든다면 거북목증후군일 가능성이 높습니다.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Content section 3-->
                <section id="scroll">
                    <div class="container px-5">
                        <div class="row gx-5 align-items-center">
                            <h2 class="display-4" style="text-align:center;">스트레칭</h2>
                            <div class="col-lg-6 order-lg-1">
                                <div>
                                    <img src="assets/img/round3_1.png" alt="..." style="max-width:100%; height:auto;"/>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-2">
                                <div class="p-5">
                                    <p style="font-size:18px; font-family: 'Noto Sans KR', sans-serif;">
                                      1. 앉은 상태에서 다리를 골반 넓이만큼 벌리고 무릎을 굽혀줍니다.<br><br>
                                      2. 양 팔은 뒤에 대고 엉덩이를 발뒤꿈치 방향으로 끌어당겨줍니다.<br><br>
                                      3. 가슴과 어깨가 늘어나는 걸 느껴줍니다.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-1">
                                <div>
                                    <img src="assets/img/round3_2.png" alt="..." style="max-width:100%; height:auto;"/>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-2">
                                <div class="p-5">
                                    <p style="font-size:18px; font-family: 'Noto Sans KR', sans-serif;">
                                      1. 손을 어깨보다 넓게 앞으로 뻗어 양 다리는 골반 넓이만큼 벌려줍니다.<br><br>
                                      2. 호흡을 마신 후 내쉬면서 어깨와 가슴을 바닥을 향해 내려줍니다.<br><br>
                                      3. 허리가 과도하게 꺾이지 않도록 주의하며 상체에 힘을 빼고 스트레칭합니다.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="scroll">
                    <div class="container px-5">
                        <div class="row gx-5 align-items-center">
                            <div class="col-lg-6">
                                <div>
                                    <img src="assets/img/round3_3.png" alt="..." style="max-width:100%; height:auto;"/>
                                </div>
                                <div class="p-5">
                                    <p style="font-size:18px; font-family: 'Noto Sans KR', sans-serif;">
                                      1. 엎드린 후 다리를 골반 넓이로 벌려줍니다.<br><br>
                                      2. 팔을 옆으로 벌린 후 어깨와 팔꿈치를 45도로 굽혀줍니다.<br><br>
                                      3. 배에 힘을 유지한 상태에서 상체를 천장쪽으로 들어줍니다.<br><br>
                                      4. 동시에 양 날개뼈를 모아주어 등에 힘이 들어가는 걸 느끼고 시선은 45도로 유지해줍니다.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div style="text-align:center;">
                                    <img src="assets/img/round3_4.png" alt="..." style="max-width:100%; height:auto;"/>
                                </div>
                                <div class="p-5">
                                    <p style="font-size:18px; font-family: 'Noto Sans KR', sans-serif;">
                                      1. 옆으로 누워 머리부터 발끝까지 일직선이 되도록 합니다.<br><br>
                                      2. 위에 있는 다리를 직각으로 굽힌 후 폼롤러에 걸쳐 고정하고, 양손을 앞으로 뻗어 손바닥을 서로 마주보게 합니다.<br><br>
                                      3. 호흡을 크게 들이마신 후 내쉬면서 양 손바닥이 멀어지는 느낌으로 팔의 어깨가 지면에 닿게 벌려줍니다.<br><br>
                                      4. 호흡을 마시면 다시 시작자세로 돌아옵니다.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="article3" style="width: 100%; height: 100%; border: 1px; solid white; display: none">
                <section id="scroll">
                    <div class="container px-5">
                        <div class="row gx-5 align-items-center">
                            <div class="col-lg-6 order-lg-2">
                                <div>
                                    <img src="assets/img/turtle1.png" alt="..." style="max-width:100%; height:auto;"/>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-1">
                                <div class="p-5">
                                    <h2 class="display-4">거북목증후군</h2>
                                    <p style="font-size:18px; font-family: 'Noto Sans KR', sans-serif;">충격을 흡수해 뇌와 척추 신경을 보호하는 역할을 하는 경추는 앞쪽으로 휘어진 C자 형태를 유지하는 것이 일반적입니다.<br>
                                       그러나 일반적인 형태를 잃고 일자가 되는 것을 넘어서 거북이처럼 목이 앞으로 빠져나가있는 상태를 거북목 증후군이라고 합니다.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Content section 2-->
                <section id="scroll">
                    <div class="container px-5">
                        <div class="row gx-5 align-items-center">
                            <h2 class="display-4" style="text-align:center;">자가진단</h2>
                            <div class="col-lg-6">
                                <div>
                                    <img src="assets/img/turtle2_1.png" alt="..." style="max-width:100%; height:auto;"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <img src="assets/img/turtle2_2.png" alt="..." style="max-width:100%; height:auto;"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Content section 3-->
                <section id="scroll">
                    <div class="container px-5">
                        <h2 class="display-4" style="text-align:center;">스트레칭</h2>
                        <div class="row gx-5 align-items-center">
                            <div class="col-lg-6 order-lg-1">
                                <div>
                                    <img src="assets/img/turtle3_1.png" alt="..." style="max-width:100%; height:auto;"/>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-2">
                                <div class="p-5">
                                    <p style="font-size:18px; font-family: 'Noto Sans KR', sans-serif;">
                                      1. 바른자세로 앉아 오른쪽 윗머리에 왼손을 대고 왼쪽 귀가 어깨에 가까워질 수 있도록 지그시 눌러줍니다.<br>
                                      이때 목이 옆으로 늘어나는 걸 느끼실 수 있는데 상체가 옆으로 기울어지지 않게 주의해줍니다.<br><br>
                                      2. 10초 동안 유지하고 최소 5회 이상 실시하는 것이 좋습니다.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-5 align-items-center">
                            <div class="col-lg-6 order-lg-2">
                                <div>
                                    <img src="assets/img/turtle3_2.png" alt="..." style="max-width:100%; height:auto;"/>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-1">
                                <div class="p-5">
                                    <p style="font-size:18px; font-family: 'Noto Sans KR', sans-serif;">
                                      1. 수건을 5~7cm정도 두께로 접어 머리 밑에 베고 누워줍니다.<br><br>
                                      2. 양쪽 다리는 무릎을 접은 상태로 유지해주고 숨을 내쉬면서 턱을 가슴쪽으로 당겨줍니다.<br><br>
                                      3. 5초 정도 유지 후 목의 힘을 풀어주면서 처음으로 돌아가 10회 정도 반복해줍니다.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-5 align-items-center">
                            <div class="col-lg-6 order-lg-1">
                                <div>
                                    <img src="assets/img/turtle3_3.png" alt="..." style="max-width:100%; height:auto;"/>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-2">
                                <div class="p-5">
                                    <p style="font-size:18px; font-family: 'Noto Sans KR', sans-serif;">
                                      1. 앉은 상태에서 허리를 곧게 뼈고 오른 손은 왼쪽 쇄골 위에, 왼팔은 벌려 준비합니다.<br>
                                      이 때, 머리는 오른쪽으로 돌려 위쪽으로 살짝 젖혀주고, 시선은 위를 향하게 해줍니다.<br><br>
                                      2. 쇄골 위에 올린 손은 쇄골이 위로 딸려가지 않도록 잘 눌러주고,
                                      옆으로 뻗은 손은 아래 방향으로 눌려 목 앞쪽이 잘 늘어날 수 있게 해줍니다.<br><br>
                                      3. 10초 정도 유지한 뒤 다시 처음으로 돌아가 5회 정도 반복해줍니다.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="article4" style="width: 100%; height: 100%; border: 1px; solid white; display: none">
                <section id="scroll">
                    <div class="container px-5">
                        <div class="row gx-5 align-items-center">
                            <div class="col-lg-6 order-lg-2">
                                <div>
                                    <img src="assets/img/carpal1.png" alt="..." style="max-width:100%; height:auto;"/>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-1">
                                <div class="p-5">
                                    <h2 class="display-4">터널증후군</h2>
                                    <p style="font-size:18px; font-family: 'Noto Sans KR', sans-serif;">손목에는 손목 앞쪽 뼈와 인대에 의해 형성되어 있는 수근관이라는 작은 통로가 있는데, 이 통로에는 손바닥 감각과 손의 운동 기능을 담당하는 신경인 정중신경이 지나고 있습니다.</p>
                                      <p style="font-size:18px; font-family: 'Noto Sans KR', sans-serif;">이러한 정중신경이 어떤 원인에 의해 압박되어 손가락 저림, 손목 통증을 유발하는 질환을 손목터널 증후군이라고 합니다.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Content section 2-->
                <section id="scroll">
                    <div class="container px-5">
                        <div class="row gx-5 align-items-center">
                            <div class="col-lg-6">
                                <div>
                                    <img src="assets/img/carpal2.png" alt="..." style="max-width:100%; height:auto;"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <h2 class="display-4">자가진단</h2>
                                    <p style="font-size:18px; font-family: 'Noto Sans KR', sans-serif;">
                                      양 손등을 맞대고 90도로 꺾어 1분 정도 유지했을 때 엄지와 검지, 중지에 저림이 발생하는지 확인합니다.<br>
                                      저림 증상이 있다면 손목터널증후군을 의심해볼 수 있습니다.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Content section 3-->
                <section id="scroll">
                    <div class="container px-5">
                        <div class="row gx-5 align-items-center">
                            <h2 class="display-4" style="text-align:center;">스트레칭</h2>
                            <div class="col-lg-6 order-lg-1">
                                <div>
                                    <img src="assets/img/carpal3_1.png" alt="..." style="max-width:100%; height:auto;"/>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-2">
                                <div class="p-5">
                                    <p style="font-size:18px; font-family: 'Noto Sans KR', sans-serif;">
                                      1. 1, 2, 3번 화살표 방향대로 10번씩 반복하여 움직여줍니다.<br><br>
                                      2. 엄지와 검지를 이용하여 손목을 앞뒤로 잡고 마사지하듯이 위아래로 움직여줍니다.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-5 align-items-center">
                            <div class="col-lg-6 order-lg-2">
                                <div>
                                    <img src="assets/img/carpal3_2.png" alt="..." style="max-width:100%; height:auto;"/>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-1">
                                <div class="p-5">
                                    <p style="font-size:18px; font-family: 'Noto Sans KR', sans-serif;">
                                      1. 손끝을 앞으로 향하고 팔을 편 상태로 몸을 앞으로 향합니다. 30초씩 세번 반복해줍니다.<br><br>
                                      2. 손끝을 뒤로 향하게 하고 팔을 편 상태로 몸을 뒤로 향합니다. 30초씩 세번 반복해줍니다.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        <div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script>
      	$(document).ready(function(){

      				$("#step1").click(function(e){
      					e.preventDefault();
      					$('.article1').slideToggle();
      					$('.article2').hide();
      					$('.article3').hide();
      					$('.article4').hide();
      				});

      				$("#step2").click(function(e){
      					e.preventDefault();
      					$('.article1').hide();
      					$('.article2').slideToggle();
      					$('.article3').hide();
      					$('.article4').hide();
      				});

              $("#step3").click(function(e){
      					e.preventDefault();
      					$('.article1').hide();
      					$('.article2').hide();
      					$('.article3').slideToggle();
      					$('.article4').hide();
      				});

              $("#step4").click(function(e){
      					e.preventDefault();
      					$('.article1').hide();
      					$('.article2').hide();
      					$('.article3').hide();
      					$('.article4').slideToggle();
      				});
        });
        </script>
        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container px-5"><p class="m-0 text-center text-white small">Copyright &copy; Myungji College 2022</p></div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script>
        function logout() {
            console.log("hello");
            const data = confirm("로그아웃 하시겠습니까?");
            if (data) {
                location.href = "../htdocs/logoutProcess.php";
            }

        }
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
