<?php
    date_default_timezone_set('Asia/Seoul');
    // GET방식으로 전달된 송신 id [보내는 사람]
    $send_id=$_GET['send_id'];

    // post방식으로 전달된 다른 값들
    $rv_id=$_POST['rv_id']; //수신자 아이디
    //$rv_id='관리자';
    $subject= $_POST['subject'];
    $content= $_POST['content'];

    // 쪽지 보낸 시간
    $regist_day=date("Y-m-d H:i");

    // message테이블에 저장하기!!
    include "./dbconn.php";

    // 수신아이디가 존재하는지
    $sql= "SELECT * FROM userinfo WHERE nickname='$rv_id'";
    $result= mysqli_query($conn, $sql);
    $numNum= mysqli_num_rows($result);

    if($numNum){
        // message테이블에 저장
        $sql= "INSERT INTO message(send_id, rv_id, subject, content, regist_day) ";
        $sql .= "VALUES('$send_id','$rv_id','$subject','$content','$regist_day')";
        mysqli_query($conn, $sql);
        echo"
            <script>
                alert('전송되었습니다.');
                location.replace('../index.php');
            </script>
        "

        ;
    }else{
        echo"
            <script>
                alert('수신 아이디가 잘못되었습니다.');
                history.back();
            </script>
        ";
        exit;
    }

    mysqli_close($conn);
    // 우선은 뒤로 돌아가기..즉, 메세지 작성 페이지로 이동
    echo "
        <script>
            history.back();
        </script>
    ";
    // 원래는 송신쪽지함 페이지로 이동
?>
