<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<link rel="stylesheet" href="../css/common.css">
<link rel="stylesheet" href="../css/message_box.css">
</head>
<body>
<header>

</header>
<section>
	<div id="main_img_bar">

    </div>
   	<div id="message_box">
	    <h3 class="title">
<?php
	$mode = $_GET["mode"];
	$num  = $_GET["num"];

	$con = mysqli_connect("127.0.0.1", "root", "root123", "userinfo", "3306");
	$sql = "select * from message where num=$num";
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);
	$send_id    = $row["send_id"];
	$rv_id      = $row["rv_id"];
	$regist_day = $row["regist_day"];
	$subject    = $row["subject"];
	$content    = $row["content"];

	$content = str_replace(" ", "&nbsp;", $content);
	$content = str_replace("\n", "<br>", $content);

	if ($mode=="send")
		$result2 = mysqli_query($con, "select nickname from userinfo where nickname='$rv_id'");
	else
		$result2 = mysqli_query($con, "select nickname from userinfo where nickname='$send_id'");

	$record = mysqli_fetch_array($result2);
	$msg_name = $record["nickname"];

	if ($mode=="send")
	    echo "송신 쪽지함 > 내용보기";
	else
		echo "건의함 내용보기";
?>
		</h3>
	    <ul id="view_content">
			<li>
				<span class="col1"><b>제목 :</b> <?=$subject?></span>
				<span class="col2"><b>작성자 : </b><?=$msg_name?> | <?=$regist_day?></span>
			</li>
			<li><br>
				<b>내용 : </b><?=$content?>
			</li>
	    </ul>
	    <ul class="buttons">
				<li><button onclick="location.href='message_box.php?mode=rv'">목록</button></li>

				<li><button onclick="location.href='message_delete.php?num=<?=$num?>&mode=<?=$mode?>'">삭제</button></li>
		</ul>
	</div> <!-- message_box -->
</section>
</body>
</html>
