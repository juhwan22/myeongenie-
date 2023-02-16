<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="playing.css">
    <meta charset="UTF-8">
</head>
    <!-- $sql = "INSERT INTO topic (title,description,author,created) VALUES('".$_POST['title']."', '".$_POST['description']."', '".$_POST['author']."', now())";-->
<body>
	<form action="playing.php" method="POST" id = "sending" method="POST">
        <section class="search">
	        <span class = 'mm1'>
                <label id = 'nn'>어디 갈 거야?</label> 
                    <select id = "nm1" name='DBname'>
					<option selected>선택하기</option>
			        <option value="명지전문대_주변">명지전문대 주변</option>
			        <option value="홍대">홍대</option>
			        <option value="신촌">신촌</option>
			        <option value="연신내">연신내</option>
                    </select>
					
            </span>
            <span class = 'mm2'>
                <label id ='nn'>뭐 할 거야?</label> 
                    <select id = "nm2" name='TABLEname'>
					<option selected>선택하기</option>
			        <option value="beer">술 마시러 갈 거야</option>
			        <option value="lunch">밥 먹으러 갈 거야</option>
			        <option value="cafe">분위기 좋은 카페 갈 거야</option>
			        <option value="etc">가볍게 놀러 갈 거야</option>
                    </select>
            </span>
			<span>
				<input id = "nm3" type='submit' name='submit' value='검색하기' />
			</span>
        </section>
	</form>	
	<?php
		error_reporting(E_ALL^ E_WARNING);
		if($_POST['submit']){
			
    	$conn= mysqli_connect('localhost', 'root', 'ictdbdgkqrhdgkrrhk', $_POST['DBname']);

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
	<section class='rlist'>
		<div>
			<span>
				<img id = 'poster' src = "<?php echo $board1['menu']; ?>" />
			</span>
			<span>
				<div id=txt_line><?php echo $board1['shopname']; ?></div>
				<div id=txt_line><?php echo $board1['shopname']; ?></div>
			</span>
		</div>
		<div>
			<span>
				<img id = 'poster' src = "<?php echo $board2['menu']; ?>" />
			</span>
			<span>
				<div id=txt_line><?php echo $board2['shopname']; ?></div>
				<div id=txt_line><?php echo $board2['shopname']; ?></div>
			</span>
		</div>
		<div>
			<span>
				<img id = 'poster' src = "<?php echo $board3['menu']; ?>" />
			</span>
			<span>
				<div id=txt_line><?php echo $board3['shopname']; ?></div>
				<div id=txt_line><?php echo $board3['shopname']; ?></div>
			</span>
		</div>
		<div>
			<span>
				<img id = 'poster' src = "<?php echo $board4['menu']; ?>" />
			</span>
			<span>
				<div id=txt_line><?php echo $board4['shopname']; ?></div>
				<div id=txt_line><?php echo $board4['shopname']; ?></div>
			</span>
		</div>
		<div>
			<span>
				<img id = 'poster' src = "<?php echo $board5['menu']; ?>" />
			</span>
			<span>
				<div id=txt_line><?php echo $board5['shopname']; ?></div>
				<div id=txt_line><?php echo $board5['shopname']; ?></div>
			</span>
		</div>
		

	</section>











		
</body>
</html>