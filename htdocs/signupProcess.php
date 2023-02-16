<?php
$conn = mysqli_connect("127.0.0.1", "root", "root123", "userinfo", "3306");
$hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
echo $hashedPassword;
$sql = "
    INSERT INTO userinfo
    (email, password, created, nickname)
    VALUES('{$_POST['decide_id']}', '{$hashedPassword}', NOW(), '{$_POST['decide_id2']}'
    )";
echo $sql;
$result = mysqli_query($conn, $sql);



    if ($result == false) {
        echo "저장에 문제가 생겼습니다. 관리자에게 문의해주세요.";
        echo mysqli_error($conn);
    } else {
?>
    <script>
        alert("회원가입이 완료되었습니다");
        location.href = "login.html";
    </script>
<?php
}
?>