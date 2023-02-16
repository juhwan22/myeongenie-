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
                    <ul class="navbar-nav ms-left">
                        <!-- <li class="nav-item"><a class="nav-link" href="htdocs/signup.html" onclick="window.open(this.href, '_blank', toolbars=no,scrollbars=no'); return false;">Sign Up</a></li>
                        <li class="nav-item"><a class="nav-link" href="htdocs/login.html" onclick="window.open(this.href, '_blank', toolbars=no,scrollbars=no'); return false;">Log In</a></li> -->
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
                            <!-- </a> -->
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
        <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5">
                            <button type="button" class="img-fluid rounded-circle" onClick="location.href='a.php'">
                                <img class="img-fluid rounded-circle" src="assets/img/a.png" alt="..." />
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Activity</h2>
                            <p style="font-size:20px; font-family: 'Noto Sans KR', sans-serif;">100여명의 명지전문대학교 학생들에게 직접 설문조사를 하여 학교 주변 명소들을 모아두었습니다. 명지대와 명지전문대 학교 학생들이 공강시간과 하교 시간에 즐길 수 있는 장소들을 추천해드립니다.</p>
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
                        <div class="p-5">
                            <button type="button" class="img-fluid rounded-circle" onClick="location.href='m.php'">
                                <img class="img-fluid rounded-circle" src="assets/img/m.png" alt="..." />
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">Movie</h2>
                            <p style="font-size:20px; font-family: 'Noto Sans KR', sans-serif;">박스오피스 영화 정보를 실시간으로 가져와 1~10등까지의 영화 정보를 제공합니다.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 3-->
        <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5">
                            <button type="button" class="img-fluid rounded-circle" onClick="location.href='e.php'">
                                <img class="img-fluid rounded-circle" src="assets/img/e.png" alt="..." />
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Exercise</h2>
                            <p style="font-size:20px; font-family: 'Noto Sans KR', sans-serif;">자세체크법과 잘못된 자세교정방법,일상에서 쉽게 따라할 수 있는 스트레칭 등을 제공받을 수 있습니다.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5">
                            <button type="button" class="img-fluid rounded-circle" onClick="location.href='t.php'">
                                <img class="img-fluid rounded-circle" src="assets/img/t.png" alt="..." />
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">Travel</h2>
                            <p style="font-size:20px; font-family: 'Noto Sans KR', sans-serif;">계절별로 정리해 둔 국내 제철 여행지를 추천해 드립니다. 각 계절 속의 세 가지 키워드를 통해 랜덤으로 여행지를 추천받을 수 있습니다.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
