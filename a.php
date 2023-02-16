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
        <form action="a.php" method="POST" id = "sending" method="POST">
            <section class="search">
      	        <span class = 'mm1'>
                    <label id = 'nn'>어디 갈 거야?</label>
                    <select id = "nm1" name='DBname'>
          					<option value="none">선택하기</option>
          			        <option value="myouge">명지전문대 주변</option>
          			        <option value="hongdae">홍대</option>
          			        <option value="sinchone">신촌</option>
          			        <option value="yeonsinae">연신내</option>
                    </select>
                </span>
                <span class = 'mm2'>
                    <label id ='nn'>뭐 할 거야?</label>
                    <select id = "nm2" name='TABLEname'>
          				    <option value="none">선택하기</option>
          			        <option value="beer">술 마시러 갈 거야</option>
          			        <option value="lunch">밥 먹으러 갈 거야</option>
          			        <option value="cafe">분위기 좋은 카페 갈 거야</option>
          			        <!-- <option value="etc">가볍게 놀러 갈 거야</option> -->
                    </select>
                </span>
      			    <span>
      				    <input id = "nm3" type='submit' name='submit' value='선택완료' />
                        <input id = "nm3" type='button' name='submit' onclick='sendingF()' value='검색하기' />
      			    </span>
            </section>
      	</form>
      	<?php
      		error_reporting(E_ALL^ E_WARNING);
      		if($_POST['submit']){

          	$conn= mysqli_connect('localhost', 'root', 'root123', $_POST['DBname']);

          	$sql1="SELECT * FROM {$_POST['TABLEname']} where Id = 1";
          	$result1=mysqli_query($conn,$sql1);
          	$board1 = mysqli_fetch_array($result1);

      		$sql2="SELECT * FROM {$_POST['TABLEname']} where Id = 2";
          	$result2=mysqli_query($conn,$sql2);
          	$board2 = mysqli_fetch_array($result2);

      		$sql3="SELECT * FROM {$_POST['TABLEname']} where Id = 3";
          	$result3=mysqli_query($conn,$sql3);
          	$board3 = mysqli_fetch_array($result3);

      		$sql4="SELECT * FROM {$_POST['TABLEname']} where Id = 4";
          	$result4=mysqli_query($conn,$sql4);
          	$board4 = mysqli_fetch_array($result4);

      		$sql5="SELECT * FROM {$_POST['TABLEname']} where Id = 5";
          	$result5=mysqli_query($conn,$sql5);
          	$board5 = mysqli_fetch_array($result5);
      		}
      	?>
      	<div class="container px-5" id ="Leslist">
            <div class="row gx-5 align-items-center">
                <div style="display:flex; justify-content:space-around; padding-top:35px; padding-bottom:35px; align-items:center;">
                    <div class="p-2">
                  			<span>
                  		      <img id = 'poster' src = <?php echo $board1['menu'];?> />
                  			</span>
                    </div>
                    <div class="p-2 playdiv">
                        <div id=txt_line><p style="font-size:60px; font-family: 'Noto Sans KR', sans-serif; margin:0;"><?php printf("%s", $board1['shopname']);?></p></div>
                        <div>
                            <p class="menup">추천메뉴</p>
                            <div id=txt_line>
                            <p class="innerp"><?php printf("%s", $board1['suggestion1']);?></p>
                            <p class="innerp"><?php printf("%s", $board1['suggestion2']);?></p>
                            <p class="innerp"><?php printf("%s", $board1['suggestion3']);?></p>
                            </div>
                        </div>
                        <div>
                            <p class="menup">한줄평</p>
                            <div id=text_line> <p class="innerp"><?php printf("%s", $board1['coment']);?></p></div>
                        </div>
                        <div>
                            <p class="menup">길찾기</p>
                            <div id=txt_line><a class="innerp" href=<?php printf("%s", $board1['Direction']);?>><?php printf("%s", $board1['Direction']);?></a></div>
                        </div>
                    </div>
            		</div>

                <div style="display:flex; justify-content:space-around; padding-top:35px; padding-bottom:35px; align-items:center;">
                    <div class="p-2">
                  			<span>
                  		      <img id = 'poster' src = <?php echo $board2['menu'];?> />
                  			</span>
                    </div>
                    <div class="p-2 playdiv">
                        <div id=txt_line><p style="font-size:60px; font-family: 'Noto Sans KR', sans-serif; margin:0;"><?php printf("%s", $board2['shopname']);?></p></div>
                        <div>
                            <p class="menup">추천메뉴</p>
                            <div id=txt_line>
                            <p class="innerp"><?php printf("%s", $board2['suggestion1']);?></p>
                            <p class="innerp"><?php printf("%s", $board2['suggestion2']);?></p>
                            <p class="innerp"><?php printf("%s", $board2['suggestion3']);?></p>
                            </div>
                        </div>
                        <div>
                            <p class="menup">한줄평</p>
                            <div id=text_line> <p class="innerp"><?php printf("%s", $board2['coment']);?></p></div>
                        </div>
                        <div>
                            <p class="menup">길찾기</p>
                            <div id=txt_line><a class="innerp" href=<?php printf("%s", $board2['Direction']);?>><?php printf("%s", $board2['Direction']);?></a></div>
                        </div>
                    </div>
            		</div>
                <div style="display:flex; justify-content:space-around; padding-top:35px; padding-bottom:35px; align-items:center;">
                    <div class="p-2">
                  			<span>
                  		      <img id = 'poster' src = <?php echo $board3['menu'];?> />
                  			</span>
                    </div>
                    <div class="p-2 playdiv">
                        <div id=txt_line><p style="font-size:60px; font-family: 'Noto Sans KR', sans-serif; margin:0;"><?php printf("%s", $board3['shopname']);?></p></div>
                        <div>
                            <p class="menup">추천메뉴</p>
                            <div id=txt_line>
                            <p class="innerp"><?php printf("%s", $board3['suggestion1']);?></p>
                            <p class="innerp"><?php printf("%s", $board3['suggestion2']);?></p>
                            <p class="innerp"><?php printf("%s", $board3['suggestion3']);?></p>
                            </div>
                        </div>
                        <div>
                            <p class="menup">한줄평</p>
                            <div id=text_line> <p class="innerp"><?php printf("%s", $board3['coment']);?></p></div>
                        </div>
                        <div>
                            <p class="menup">길찾기</p>
                            <div id=txt_line><a class="innerp" href=<?php printf("%s", $board3['Direction']);?>><?php printf("%s", $board3['Direction']);?></a></div>
                        </div>
                    </div>
            		</div>
                <div style="display:flex; justify-content:space-around; padding-top:35px; padding-bottom:35px; align-items:center;">
                    <div class="p-2">
                  			<span>
                  		      <img id = 'poster' src = <?php echo $board4['menu'];?> />
                  			</span>
                    </div>
                    <div class="p-2 playdiv">
                        <div id=txt_line><p style="font-size:60px; font-family: 'Noto Sans KR', sans-serif; margin:0;"><?php printf("%s", $board4['shopname']);?></p></div>
                        <div>
                            <p class="menup">추천메뉴</p>
                            <div id=txt_line>
                            <p class="innerp"><?php printf("%s", $board4['suggestion1']);?></p>
                            <p class="innerp"><?php printf("%s", $board4['suggestion2']);?></p>
                            <p class="innerp"><?php printf("%s", $board4['suggestion3']);?></p>
                            </div>
                        </div>
                        <div>
                            <p class="menup">한줄평</p>
                            <div id=text_line> <p class="innerp"><?php printf("%s", $board4['coment']);?></p></div>
                        </div>
                        <div>
                            <p class="menup">길찾기</p>
                            <div id=txt_line><a class="innerp"><?php printf("%s", $board4['Direction']);?></a></div>
                        </div>
                    </div>
            		</div>
                <div style="display:flex; justify-content:space-around; padding-top:35px; padding-bottom:35px; align-items:center;">
                    <div class="p-2">
                  			<span>
                  		      <img id = 'poster' src = <?php echo $board5['menu'];?> />
                  			</span>
                    </div>
                    <div class="p-2 playdiv">
                        <div id=txt_line><p style="font-size:60px; font-family: 'Noto Sans KR', sans-serif; margin:0;"><?php printf("%s", $board5['shopname']);?></p></div>
                        <div>
                            <p class="menup">추천메뉴</p>
                            <div id=txt_line>
                            <p class="innerp"><?php printf("%s", $board5['suggestion1']);?></p>
                            <p class="innerp"><?php printf("%s", $board5['suggestion2']);?></p>
                            <p class="innerp"><?php printf("%s", $board5['suggestion3']);?></p>
                            </div>
                        </div>
                        <div>
                            <p class="menup">한줄평</p>
                            <div id=text_line> <p class="innerp"><?php printf("%s", $board5['coment']);?></p></div>
                        </div>
                        <div>
                            <p class="menup">길찾기</p>
                            <div id=txt_line><a class="innerp" href=<?php printf("%s", $board5['Direction']);?>><?php printf("%s", $board5['Direction']);?></a></div>
                        </div>
                    </div>
            	</div>
            </div>
      	</div>
        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container px-5"><p class="m-0 text-center text-white small">Copyright &copy; Myungji College 2022</p></div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
            
        </script>
        <script>
            const Leslist = document.getElementById("Leslist").style;
            Leslist.display = 'none';
            function sendingF(){
                Leslist.display='block';
            }
        </script>
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
