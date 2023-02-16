<!DOCTYPE html>
<?php session_start();
 ?>
<html>
<head>
    <meta charset="UTF-8">
    <title>건의함</title>

    <link rel="stylesheet" href="../message/css/css.css">
    <link rel="stylesheet" href="../message/css/css.css">
</head>
<body>
    <div class="board_wrap">
        <div class="board_title">
            <strong>건의함</strong>
            <p>건의사항을 적어서 제출해주세요.</p>
        </div>
        <form action="../message/message_insert.php?send_id=<?=$_SESSION['userId']?>" method="post" name="message_form">
            <div class="board_write_wrap">
                <div class="board_write">
                    <div class="title">                    
                         <dl>
                            <dt>제목</dt>
                            <dd><input type="text" name = "subject" placeholder="제목 입력"></dd>
                        </dl>
                    </div>
                    <!-- <div class="info">
                        <dl>
                            <dt>발신자</dt>
                            <dd class="col2"><input type="text" value = <?=$_SESSION['userId']?> readonly></dd>
                        </dl> -->
                    <div class="info">
                        <dl>                           
                            <dt>수신자</dt>
                            <dd class="col2"><input name="rv_id" type="text" value="관리자" readonly></dd>
                        </dl>    
                    </div>        
                    <div class="cont">                    
                        <dl>
                            <textarea name = "content" placeholder="내용 입력"></textarea>
                       </dl>
                   </div>
                   <div class="bt_wrap">
                    <div class="on">
                    <input id = "test" type="submit" value="보내기">
                    <input id = "test" type="button" onclick = "cancle()" value="취소">
                   </div>
                </div>
                    
                </div>
            </div>
        </form>
    </div>
    <script>
        function cancle() {
                location.replace('../index.php');
        }
    </script>
</body>
</html>
