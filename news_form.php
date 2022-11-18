<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "stylesheet" href = "main.css">
	<title></title>
</head>
<body>
	<div id="wrap">

		<div id=header">
			<div class="logo" style="text-align:center;">
				<h1 style="font-size: 50px;">[: Free To Image]</h1><br>
			</div>
		</div>

		<div class="login_menu">
			    <p style="float: left; font-size: 20px; margin: 10px"><b>🔥 실시간 인기 이미지: </b><b>#가을</b>&nbsp;<b>#단풍</b>&nbsp;<b>#하늘</b>&nbsp;<b>#겨울</b></p>


			<?php
    			if(!$userid) {
			?>                
                
				<input type="button" value="Sign Up" class="signup_btn" style="float: right;" onclick="location.href=''">&nbsp;&nbsp;
				<input type="button" value="Login" class="login_btn" style="float: right;" onclick="location.href='login_form.php'">
				<br><br>
			<?php
    		} else {
			?>
			    <input type="button" value="Logout" class="logout_btn" style="float: right;" onclick="location.href='main_form.php'">
				<p style="float: right; font-size: 20px; margin: 10px"><b>
				<?php
				 	$id = $_POST["login_id"];
				 	echo "{$id}님 환영합니다";
				?>
				</b></p>
			<?php
			 }
			 ?>
				<ul>
			      <li><a href="#home" onclick="location.href='main_form.php'">Home</a></li>
			      <li><a href="#news">News</a></li>
			     <li><a href="#upload" onclick="location.href='Upload_form.php'">Upload</a></li>
			      <li><a href="#explore">Explore</a></li>
			     
		</div>
		<div clss="introduce" style="float: center; margin: 150px;">
			<p style="font-size:40px"><b>프로젝트 소개</b></p>
			<hr>
			<p style="font-size:20px"><b>프로젝트 명</b></p>
			<p>웹마스터 과정(1)</p>
			<p>기말 웹 사이트 제작 후 발표</p>
			<br>
			<p style="font-size:20px"><b>제작 기간</b></p>
			<p>2022.11.03 ~ 2022.11.29</p>
			<br>

			<p style="font-size:20px"><b>소속</b></p>
			<p>안동대학교 컴퓨터공학과</p>
			<p>주소 : 경상북도 안동시 경동로 1375 (송천동)</p>
			<p>전화번호 : 054-820-5114</p>
			<br><br><br>
			<div>	
				<div style="float:center">
					<p style="font-size:20px"><b>팀원1: 박종국</b></p>
					<img src= "./img_file/p2.png" style="width: 200px; height: 200px; float: left;">
				</div>
				<div>
					<br>
					<p style="padding: 10px; margin:10px"><b>🎓 student ID:</b> </p>
					<p style="padding: 10px; margin:10px"><b>✉ e-mail:</b> </p>
					<p style="padding: 10px; margin:10px"><b>⌨ github:</b> </p>
				</div>
			</div>
			<div>	
				<div style="float:center">
					<br><br><br>
					<p style="font-size:20px"><b>팀원2: 곽희진</b></p>
					<img src= "./img_file/p1.png" style="width: 200px; height: 200px; float: left;">
				</div>
				<div>
					<br>
					<p style="padding: 10px; margin:10px"><b>🎓 student ID:</b> 20191115</p>
					<p style="padding: 10px; margin:10px"><b>✉ e-mail:</b> pix3000@naver.com</p>
					<p style="padding: 10px; margin:10px"><b>⌨ github:</b> https://github.com/pix3000</p>
				</div>
			</div>

		</div>
		

</body>
</html>
