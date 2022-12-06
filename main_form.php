<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "stylesheet" href = "main.css">
	<title>Free To Image: 자유로운 이미지 놀이터</title>
</head>
<body>
<div id="wrap">

	<div id="header">
		<div class="logo" style="text-align:center;">
		<h3 id = "clock" style = "color: black; text-align: left;">00:00:00</h2>
			<h1 style="font-size: 50px;">[: Free To Image]</h1><br>
			<p style="float: left; font-size: 20px; margin: 15px"><b>🔥 실시간 인기 이미지: </b><b>#가을</b>&nbsp;<b>#단풍</b>&nbsp;<b>#하늘</b>&nbsp;<b>#겨울</b></p>
		</div>
	</div>
<?php
		if (isset($_SESSION['userid'])) {
			echo '<input type="button" value="logOut" class="main_three_button" style="float: right;" onclick="logout()">';
			echo "<h2 style = 'float:right'>{$_SESSION['userid']}님 환영합니다 </h2>";
	?>                
<div class="login_menu">
	<?php
	} else {
	?>
		<input type="button" value="Sign Up" class="main_three_button" style="float: right;" onclick="location.href='sign_form.html'">&nbsp;&nbsp;
		<input type="button" value="Login" class="main_three_button" style="float: right;" onclick="location.href='login_form.php'"><br><br>
		<p style="float: right; font-size: 20px; margin: 10px"><b>
		</b></p>
	<?php
	 }
	 ?>
	 <br><br><br>
		<ul>
		  <li><a href="#home" onclick="location.href='main_form.php'">Home</a></li>
		  <li><a href="#news" onclick="location.href='news_form.php'">News</a></li>
		  <li><a href="#upload" onclick="location.href='Upload_form.php'">Upload</a></li>
		  <li><a href="#explore" onclick = "location.href ='explore_list.php'">Explore</a></li>
		</ul>
	

</div>
		<div class="search_area">
				<center>
				<br>
				<h1 style="color:#fff">누구나 이미지를 무료로 자유롭게 이용해보세요!</h1>
				<h3 style="color:#fff">자유롭고 편리한 이미지 공유 커뮤니티</h3>
				<p>
				<input type="text" placeholder="찾고 싶은 이미지 키워드를 입력하세요" class="search_box">
				<button class="search_btn" onclick=" ">search</button>
				</p>
				</center>
		</div>

		<div id="page_b" style="background-color:#000000;">
		<h2 style="padding: 5px; color:#fff">회원들이 올린 이미지를 구경해보세요</h2>
				<div class="img_card">
					<center>
					<!--width:1750px -->
					<!--첫째줄-->
					<img style="cursor: pointer;" id="img1-1" width="380px" height="300px" src="https://cdn.pixabay.com/photo/2022/07/13/16/25/cat-7319589_960_720.jpg">
					<img style="cursor: pointer;" id="img1-2" width="380px" height="300px" src="https://cdn.pixabay.com/photo/2022/05/29/03/40/goldfinch-7228334_960_720.jpg">
					<img style="cursor: pointer;" id="img1-3" width="380px" height="300px" src="https://cdn.pixabay.com/photo/2022/10/31/17/31/copper-teapots-7560392_960_720.jpg">
					<img style="cursor: pointer;" id="img1-4" width="250px" height="300px" src="https://cdn.pixabay.com/photo/2022/09/15/11/14/sea-7456253_960_720.jpg">
					<img style="cursor: pointer;" id="img1-5" width="360px" height="300px" src="https://cdn.pixabay.com/photo/2022/10/16/13/53/early-morning-7525151_960_720.jpg">
					<p style="padding: 1px;"></p>

					<!--둘째줄-->
					<img style="cursor: pointer;" id="img2-1" width="420px" height="300px" src="https://cdn.pixabay.com/photo/2022/08/08/13/59/cloud-of-bunch-of-7372799_960_720.jpg">
					<img style="cursor: pointer;" id="img2-2" width="220px" height="300px" src="https://cdn.pixabay.com/photo/2022/09/25/09/58/houses-7477950_960_720.jpg">
					<img style="cursor: pointer;" id="img2-3" width="370px" height="300px" src="https://cdn.pixabay.com/photo/2022/09/24/16/32/bulldog-7476727_960_720.jpg">
					<img style="cursor: pointer;" id="img2-4" width="380px" height="300px" src="https://cdn.pixabay.com/photo/2022/04/26/01/09/tibet-7157189_960_720.jpg">
					<img id="img2-5" width="360px" height="300px" src="https://cdn.pixabay.com/photo/2022/08/28/17/37/flower-7417160_960_720.jpg">
					<p style="padding: 1px;"></p>

					<!--셋째줄-->
					<img id="img3-1" width="500px" height="400px" src="https://cdn.pixabay.com/photo/2016/01/19/01/42/library-1147815_960_720.jpg">
					<img id="img3-2" width="250px" height="400px" src="https://cdn.pixabay.com/photo/2022/09/14/14/36/window-7454482_960_720.jpg">
					<img id="img3-3" width="540px" height="400px" src="https://cdn.pixabay.com/photo/2016/11/27/21/42/stock-1863880_960_720.jpg">
					<img id="img3-4" width="460px" height="400px" src="https://cdn.pixabay.com/photo/2015/12/04/14/05/code-1076536_960_720.jpg">
					<p style="padding: 1px;"></p>

					<!--넷째줄-->
					<p style="padding: 1px;"></p>

					<h2 style="padding: 2px;"></h2>
			</center>
			
	</div>
		</div>
		<script>
			function logout() {
            const data = confirm("로그아웃 하시겠습니까?");
            if (data) {
                location.href = "logout.php";
            }

        }
		</script>
		<script src = "js/clock.js"></script>
		<div class="bottom">

		
			<br><br>
			<h2 style="text-align: center;">저작권이 자유로운 이미지 사이트</h2>
			<br><br>
			<h3 style="color:#909090">모두가 제약없이 이미지를 올리고 내려받을 수 있는 창작 사이트를 만들도록 노력하겠습니다</h3>
			<h3 style="color:#909090">✉ e-mail: pix3000@naver.com</h3>
			<br><br><br><br><br><br>
		</div>


	</div>
</body>
</html>