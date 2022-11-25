<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "stylesheet" type="text/css" href = "main.css">
<script>
  function check_input() {
      if (!document.Upload_form.subject.value)
      {
          alert("제목을 입력하세요!");
          document.Upload_form.subject.focus();
          return;
      }
      if (!document.Upload_form.content.value)
      {
          alert("내용을 입력하세요!");    
          document.Upload_form.content.focus();
          return;
      }
      document.Upload_form.submit();
   }
</script>

	<title>Free To Image: 자유로운 이미지 놀이터</title>
</head>
<body>
	<div id="wrap">

		<div id="header">
			<div class="logo" style="text-align:center;">
				<h1 style="font-size: 50px;">[: Free To Image]</h1><br>
			</div>
		</div>

		
		<div class="login_menu">

			<?php
			    session_start();
			    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
			    else $userid = "";
			    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
			    else $username = "";


    			if(!$userid) {
			?>                
                
				<input type="button" value="Sign Up" class="signup_btn" style="float: right;" onclick="location.href='member_form.php'">&nbsp;&nbsp;
				<input type="button" value="Login" class="login_btn" style="float: right;" onclick="location.href='login_form.php'"><br><br>
			<?php
    		} else {
			?>
			    <input type="button" value="Logout" class="logout_btn" style="float: right; width: 100px; height: 40px;border: 0px; background: #fff; color: #000000; font-size: 20px;
		cursor: pointer;" onclick="location.href='logout.php'">&nbsp;&nbsp;
				<p style="float: right; font-size: 20px; margin: 10px;">

				<?php
				 	 $logged = $username."(".$userid.")님";
				 	echo "{$userid}님 환영합니다";
				?>
				</p><br><br>
			<?php
			 }
			 ?>
				<ul>
			      <li><a href="#home" onclick="location.href='main_form.php'">Home</a></li>
			      <li><a href="#news" onclick="location.href='news_form.php'">News</a></li>
			      <li><a href="#upload" onclick="location.href='Upload_form.php'">Upload</a></li>
			      <li><a href="#explore" onclick="location.href='explore_list.php'">Explore</a></li>

		</div>


		<!-- <div class="search_area">
				<center>
				<br>
				<h1 style="color:#fff;">누구나 이미지를 무료로 자유롭게 이용해보세요!</h1>
				<h3 style="color:#fff">자유롭고 편리한 이미지 공유 커뮤니티</h3>
				<p>
				<input type="text" placeholder="찾고 싶은 이미지 키워드를 입력하세요" class="search_box">
				<button class="search_btn" onclick=" ">search</button>
				</p>
				</center>
		</div> -->

		<div class="Upload_box" style="background-color: #000000;">
			<center>
			<h1 style="font-size: 50px; color: #fff;"><b>Upload your Image</b></h1><br>



			<form name="Upload_form" method="post" action="Upload_insert.php" enctype="multipart/form-data"> 
				<div id="in_title">
                <input type="text" name="subject" id="utitle" rows="1" cols="55" placeholder="title" maxlength="10" style="width: 1500px; height: 30px; font-size: 20px;" required>
                </div><br>
                <div id="in_content">
                    <textarea name="content" id="ucontent" placeholder="content" style="width: 1500px; height: 400px; font-size: 20px" required></textarea>
                </div>
 				<br><br>	
		</center>
		</div>
		<div class="filebox">
			<center>
				<br>
				<label for="ex_file" >Browse</label>
				<input type="file" id="ex_file" name="upfile"> 

				<button class="upload_btn" onclick="check_input()">Upload</button>
			</center>
		</div>
   </form>                

		<div class="bottom">
			
			<br><br><br><br><br>
			<h2 style="text-align: center;">저작권이 자유로운 이미지 사이트</h2>
			<br><br>
			<h3 style="color:#909090">모두가 제약없이 이미지를 올리고 내려받을 수 있는 창작 사이트를 만들도록 노력하겠습니다</h3>
			<h3 style="color:#909090">✉ e-mail: pix3000@naver.com</h3>
			<br><br><br><br><br><br>
		</div>


	</div>
</body>
</html>
