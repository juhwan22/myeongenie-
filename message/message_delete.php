﻿<meta charset='utf-8'>

<?php

	$num = $_GET["num"];

	$mode = $_GET["mode"];



	$con = mysqli_connect("127.0.0.1", "root", "root123", "userinfo", "3306");


	$sql = "delete from message where num=$num";

	mysqli_query($con, $sql);



	mysqli_close($con);                // DB 연결 끊기



	if($mode == "send")

		$url = "message_box.php?mode=send";

	else

		$url = "message_box.php?mode=rv";



	echo "

	<script>

		location.href = '$url';
	</script>

	";

?>
