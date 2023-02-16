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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
        <link href="css/styles.css" rel="stylesheet" />
        <!--<?php
            $tmp = 1; //영화 첫 화면에서 포스터 클릭시 포스터의 랭킹 수는 받아와야 됨
            $conn= mysqli_connect('localhost', 'root', 'root123', 'testmovie'); //php에서 데이터베이스를 사용하기 위한 코드
            $sql = "SELECT * FROM movie where ranking= '$tmp'"; // movie is table name
            $result=mysqli_query($conn,$sql); //mysql 쿼리 실행
            $board = mysqli_fetch_array($result) //result를 딕셔너리로 반환함, 배열의 인덱 -> 딕셔너리의 (key)
            //딕셔너리 예 -> 배열 a = [1,2,3], a[1] = 1, 딕셔너리 b = [ name : 하연, age : 18], b['name'] = 하연석
        ?> -->
    </head>
    <?php
            $conn= mysqli_connect('localhost', 'root', 'root123', 'testmovie');

            $sql1 = "SELECT * FROM movie where ranking = '1'";
            $result1=mysqli_query($conn,$sql1);
            $board1 = mysqli_fetch_array($result1);

            $sql2 = "SELECT * FROM movie where ranking = '2'";
            $result2=mysqli_query($conn,$sql2);
            $board2 = mysqli_fetch_array($result2);

            $sql3 = "SELECT * FROM movie where ranking = '3'";
            $result3=mysqli_query($conn,$sql3);
            $board3 = mysqli_fetch_array($result3);

            $sql4 = "SELECT * FROM movie where ranking = '4'";
            $result4=mysqli_query($conn,$sql4);
            $board4 = mysqli_fetch_array($result4);

            $sql5 = "SELECT * FROM movie where ranking = '5'";
            $result5=mysqli_query($conn,$sql5);
            $board5 = mysqli_fetch_array($result5);

            $sql6 = "SELECT * FROM movie where ranking = '6'";
            $result6=mysqli_query($conn,$sql6);
            $board6 = mysqli_fetch_array($result6);

            $sql7 = "SELECT * FROM movie where ranking = '7'";
            $result7=mysqli_query($conn,$sql7);
            $board7 = mysqli_fetch_array($result7);

            $sql8 = "SELECT * FROM movie where ranking = '8'";
            $result8=mysqli_query($conn,$sql8);
            $board8 = mysqli_fetch_array($result8);

            $sql9 = "SELECT * FROM movie where ranking = '9'";
            $result9=mysqli_query($conn,$sql9);
            $board9 = mysqli_fetch_array($result9);

            $sql10 = "SELECT * FROM movie where ranking = '10'";
            $result10=mysqli_query($conn,$sql10);
            $board10 = mysqli_fetch_array($result10);

        ?>
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
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><a href="#move1" class="scroll"><img src=<?php echo $board1['imageurl'];?> width="210px" height="300px"></a></div>
                    <div class="swiper-slide"><a href="#move2" class="scroll"><img src=<?php echo $board2['imageurl'];?> width="210px" height="300px"></a></div>
                    <div class="swiper-slide"><a href="#move3" class="scroll"><img src=<?php echo $board3['imageurl'];?> width="210px" height="300px"></a></div>
                    <div class="swiper-slide"><a href="#move4" class="scroll"><img src=<?php echo $board4['imageurl'];?> width="210px" height="300px"></a></div>
                    <div class="swiper-slide"><a href="#move5" class="scroll"><img src=<?php echo $board5['imageurl'];?> width="210px" height="300px"></a></div>
                    <div class="swiper-slide"><a href="#move6" class="scroll"><img src=<?php echo $board6['imageurl'];?> width="210px" height="300px"></a></div>
                    <div class="swiper-slide"><a href="#move7" class="scroll"><img src=<?php echo $board7['imageurl'];?> width="210px" height="300px"></a></div>
                    <div class="swiper-slide"><a href="#move8" class="scroll"><img src=<?php echo $board8['imageurl'];?> width="210px" height="300px"></a></div>
                    <div class="swiper-slide"><a href="#move9" class="scroll"><img src=<?php echo $board9['imageurl'];?> width="210px" height="300px"></a></div>
                    <div class="swiper-slide"><a href="#move10" class="scroll"><img src=<?php echo $board10['imageurl'];?> width="210px" height="300px"></a></div>
                </div>

                <!-- 네비게이션 -->
                <div class="swiper-button-next"></div><!-- 다음 버튼 (오른쪽에 있는 버튼) -->
                <div class="swiper-button-prev"></div><!-- 이전 버튼 -->
            </div>
        </header>
        <!-- Section -->
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div>
                    <div style="text-align:center; padding-top:75px; padding-bottom:25px; padding-left:50px; padding-right:50px;  ">
                        <h1>오늘의 영화순위</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-5" style="margin-bottom:75px; padding-right:0; margin-right:125px;" id="move1">
            <div class="row gx-6 align-items-top">
                <div class="col-lg-5">
                    <div class="p-5" style="text-align:center;">
                        <img src=<?php echo $board1['imageurl'];?> width="65%" height="65%">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5">
                        <h2 class="display-6" style="margin-top:0; margin-bottom:20px;"><?php echo $board1['moviename'] ?></h2>
                        <dl class="modal_inner">
                            <dt class="movie">순위</dt><dd class="movie">1위</dd>
                            <dt class="movie">개봉일</dt><dd class="movie"> <?php echo $board1['openingdate'] ?></dd>
                            <dt class="movie">누적관객</dt><dd class="movie"><?php echo $board1['audiCnt']?></dd>
                            <dt class="movie">감독</dt><dd class="movie"><?php echo $board1['dir']?></dd>
                            <dt class="movie">배우</dt><dd class="movie"><?php echo $board1['actor']?></dd>
                            <dt class="movie">평점</dt><dd class="movie"><?php echo $board1['rating']?></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-5" style="margin-bottom:75px; padding-right:0; margin-right:125px;" id="move2">
            <div class="row gx-6 align-items-top">
                <div class="col-lg-5">
                    <div class="p-3" style="text-align:center;">
                        <img src=<?php echo $board2['imageurl'];?> width="60%" height="60%">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2">
                    <div class="p-3">
                        <h2 class="display-6" style="margin-top:0; margin-bottom:20px;"><?php echo $board2['moviename'] ?></h2>
                        <dl class="modal_inner">
                            <dt class="movie">순위</dt><dd class="movie">2위</dd>
                            <dt class="movie">개봉일</dt><dd class="movie"> <?php echo $board2['openingdate'] ?></dd>
                            <dt class="movie">누적관객</dt><dd class="movie"><?php echo $board2['audiCnt']?></dd>
                            <dt class="movie">감독</dt><dd class="movie"><?php echo $board2['dir']?></dd>
                            <dt class="movie">배우</dt><dd class="movie"><?php echo $board2['actor']?></dd>
                            <dt class="movie">평점</dt><dd class="movie"><?php echo $board2['rating']?></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-5" style="margin-bottom:75px; padding-right:0; margin-right:125px;" id="move3">
            <div class="row gx-6 align-items-top">
                <div class="col-lg-5">
                    <div class="p-3" style="text-align:center;">
                        <img src=<?php echo $board3['imageurl'];?> width="60%" height="60%">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2">
                    <div class="p-3">
                        <h2 class="display-6" style="margin-top:0; margin-bottom:20px;"><?php echo $board3['moviename'] ?></h2>
                        <dl class="modal_inner">
                            <dt class="movie">순위</dt><dd class="movie">3위</dd>
                            <dt class="movie">개봉일</dt><dd class="movie"> <?php echo $board3['openingdate'] ?></dd>
                            <dt class="movie">누적관객</dt><dd class="movie"><?php echo $board3['audiCnt']?></dd>
                            <dt class="movie">감독</dt><dd class="movie"><?php echo $board3['dir']?></dd>
                            <dt class="movie">배우</dt><dd class="movie"><?php echo $board3['actor']?></dd>
                            <dt class="movie">평점</dt><dd class="movie"><?php echo $board3['rating']?></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-5" style="margin-bottom:75px; padding-right:0; margin-right:125px;" id="move4">
            <div class="row gx-6 align-items-top">
                <div class="col-lg-5">
                    <div class="p-3" style="text-align:center;">
                        <img src=<?php echo $board4['imageurl'];?> width="60%" height="60%">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2">
                    <div class="p-3">
                        <h2 class="display-6" style="margin-top:0; margin-bottom:20px;"><?php echo $board4['moviename'] ?></h2>
                        <dl class="modal_inner">
                            <dt class="movie">순위</dt><dd class="movie">4위</dd>
                            <dt class="movie">개봉일</dt><dd class="movie"> <?php echo $board4['openingdate'] ?></dd>
                            <dt class="movie">누적관객</dt><dd class="movie"><?php echo $board4['audiCnt']?></dd>
                            <dt class="movie">감독</dt><dd class="movie"><?php echo $board4['dir']?></dd>
                            <dt class="movie">배우</dt><dd class="movie"><?php echo $board4['actor']?></dd>
                            <dt class="movie">평점</dt><dd class="movie"><?php echo $board4['rating']?></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-5" style="margin-bottom:75px; padding-right:0; margin-right:125px;" id="move5">
            <div class="row gx-6 align-items-top">
                <div class="col-lg-5">
                    <div class="p-3" style="text-align:center;">
                        <img src=<?php echo $board5['imageurl'];?> width="60%" height="60%">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2">
                    <div class="p-3">
                        <h2 class="display-6" style="margin-top:0; margin-bottom:20px;"><?php echo $board5['moviename'] ?></h2>
                        <dl class="modal_inner">
                            <dt class="movie">순위</dt><dd class="movie">5위</dd>
                            <dt class="movie">개봉일</dt><dd class="movie"> <?php echo $board5['openingdate'] ?></dd>
                            <dt class="movie">누적관객</dt><dd class="movie"><?php echo $board5['audiCnt']?></dd>
                            <dt class="movie">감독</dt><dd class="movie"><?php echo $board5['dir']?></dd>
                            <dt class="movie">배우</dt><dd class="movie"><?php echo $board5['actor']?></dd>
                            <dt class="movie">평점</dt><dd class="movie"><?php echo $board5['rating']?></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-5" style="margin-bottom:75px; padding-right:0; margin-right:125px;" id="move6">
            <div class="row gx-6 align-items-top">
                <div class="col-lg-5">
                    <div class="p-3" style="text-align:center;">
                        <img src=<?php echo $board6['imageurl'];?> width="60%" height="60%">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2">
                    <div class="p-3">
                        <h2 class="display-6" style="margin-top:0; margin-bottom:20px;"><?php echo $board6['moviename'] ?></h2>
                        <dl class="modal_inner">
                            <dt class="movie">순위</dt><dd class="movie">6위</dd>
                            <dt class="movie">개봉일</dt><dd class="movie"> <?php echo $board6['openingdate'] ?></dd>
                            <dt class="movie">누적관객</dt><dd class="movie"><?php echo $board6['audiCnt']?></dd>
                            <dt class="movie">감독</dt><dd class="movie"><?php echo $board6['dir']?></dd>
                            <dt class="movie">배우</dt><dd class="movie"><?php echo $board6['actor']?></dd>
                            <dt class="movie">평점</dt><dd class="movie"><?php echo $board6['rating']?></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-5" style="margin-bottom:75px; padding-right:0; margin-right:125px;" id="move7">
            <div class="row gx-6 align-items-top">
                <div class="col-lg-5">
                    <div class="p-3" style="text-align:center;">
                        <img src=<?php echo $board7['imageurl'];?> width="60%" height="60%">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2">
                    <div class="p-3">
                        <h2 class="display-6" style="margin-top:0; margin-bottom:20px;"><?php echo $board7['moviename'] ?></h2>
                        <dl class="modal_inner">
                            <dt class="movie">순위</dt><dd class="movie">7위</dd>
                            <dt class="movie">개봉일</dt><dd class="movie"> <?php echo $board7['openingdate'] ?></dd>
                            <dt class="movie">누적관객</dt><dd class="movie"><?php echo $board7['audiCnt']?></dd>
                            <dt class="movie">감독</dt><dd class="movie"><?php echo $board7['dir']?></dd>
                            <dt class="movie">배우</dt><dd class="movie"><?php echo $board7['actor']?></dd>
                            <dt class="movie">평점</dt><dd class="movie"><?php echo $board7['rating']?></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-5" style="margin-bottom:75px; padding-right:0; margin-right:125px;" id="move8">
            <div class="row gx-6 align-items-top">
                <div class="col-lg-5">
                    <div class="p-3" style="text-align:center;">
                        <img src=<?php echo $board8['imageurl'];?> width="60%" height="60%">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2">
                    <div class="p-3">
                        <h2 class="display-6" style="margin-top:0; margin-bottom:20px;"><?php echo $board8['moviename'] ?></h2>
                        <dl class="modal_inner">
                            <dt class="movie">순위</dt><dd class="movie">8위</dd>
                            <dt class="movie">개봉일</dt><dd class="movie"> <?php echo $board8['openingdate'] ?></dd>
                            <dt class="movie">누적관객</dt><dd class="movie"><?php echo $board8['audiCnt']?></dd>
                            <dt class="movie">감독</dt><dd class="movie"><?php echo $board8['dir']?></dd>
                            <dt class="movie">배우</dt><dd class="movie"><?php echo $board8['actor']?></dd>
                            <dt class="movie">평점</dt><dd class="movie"><?php echo $board8['rating']?></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-5" style="margin-bottom:75px; padding-right:0; margin-right:125px;" id="move9">
            <div class="row gx-6 align-items-top">
                <div class="col-lg-5">
                    <div class="p-3" style="text-align:center;">
                        <img src=<?php echo $board9['imageurl'];?> width="60%" height="60%">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2">
                    <div class="p-3">
                        <h2 class="display-6" style="margin-top:0; margin-bottom:20px;"><?php echo $board9['moviename'] ?></h2>
                        <dl class="modal_inner">
                            <dt class="movie">순위</dt><dd class="movie">9위</dd>
                            <dt class="movie">개봉일</dt><dd class="movie"> <?php echo $board9['openingdate'] ?></dd>
                            <dt class="movie">누적관객</dt><dd class="movie"><?php echo $board9['audiCnt']?></dd>
                            <dt class="movie">감독</dt><dd class="movie"><?php echo $board9['dir']?></dd>
                            <dt class="movie">배우</dt><dd class="movie"><?php echo $board9['actor']?></dd>
                            <dt class="movie">평점</dt><dd class="movie"><?php echo $board9['rating']?></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        <div class="container px-5" style="margin-bottom:75px; padding-right:0; margin-right:125px;" id="move10">
            <div class="row gx-6 align-items-top">
                <div class="col-lg-5">
                    <div class="p-3" style="text-align:center;">
                        <img src=<?php echo $board10['imageurl'];?> width="60%" height="60%">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2">
                    <div class="p-3">
                        <h2 class="display-6" style="margin-top:0; margin-bottom:20px;"><?php echo $board10['moviename'] ?></h2>
                        <dl class="modal_inner">
                            <dt class="movie">순위</dt><dd class="movie">10위</dd>
                            <dt class="movie">개봉일</dt><dd class="movie"> <?php echo $board10['openingdate'] ?></dd>
                            <dt class="movie">누적관객</dt><dd class="movie"><?php echo $board10['audiCnt']?></dd>
                            <dt class="movie">감독</dt><dd class="movie"><?php echo $board10['dir']?></dd>
                            <dt class="movie">배우</dt><dd class="movie"><?php echo $board10['actor']?></dd>
                            <dt class="movie">평점</dt><dd class="movie"><?php echo $board10['rating']?></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
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
