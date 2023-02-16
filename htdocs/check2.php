<?php
    $conn = mysqli_connect("127.0.0.1", "root", "root123", "userinfo", "3306");
    $uid= $_GET["userid2"];  //GET으로 넘긴 userid
    $sql= "SELECT * FROM userinfo where nickname='$uid'";
    $result = mysqli_fetch_array(mysqli_query($conn, $sql));

    if(!$result){
        echo "<span style='color:blue;'>$uid</span> 는 사용 가능한 닉네임입니다.";
       ?><p><input type=button value="이 닉네임 사용" onclick="opener.parent.decide2(); window.close();"></p>

    <?php
    } else {
        echo "<span style='color:red;'>$uid</span> 는 중복된 닉네임입니다.";
        ?><p><input type=button value="다른 닉네임 사용" onclick="opener.parent.change2(); window.close()"></p>
    <?php
    }
?>
