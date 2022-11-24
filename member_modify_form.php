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
				<input type="button" value="Login" class="login_btn" style="float: right;" onclick="location.href='login_form.php'"><br><br>
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
			      <li><a href="#news" onclick="location.href='news_form.php'">News</a></li>
			      <li><a href="#upload" onclick="location.href='Upload_form.php'">Upload</a></li>
			      <li><a href="#explore" onclick="location.href='explore_list.php'">Explore</a></li>
			     
			

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
<?php    
   	$con = mysqli_connect("localhost", "root", "", "fti");
    $sql    = "select * from users where id='$userid'";
    $result = mysqli_query($con, $sql);
    $row    = mysqli_fetch_array($result);

    $pass = $row["pass"];
    $name = $row["name"];

    $email = explode("@", $row["email"]);
    $email1 = $email[0];
    $email2 = $email[1];

    mysqli_close($con);
?>
	<section>
		<div id="main_img_bar">
            <img src="./img/main_img.png">
        </div>
        <div id="main_content">
      		<div id="join_box">
          	<form  name="member_form" method="post" action="member_modify.php?id=<?=$userid?>">
			    <h2>회원 정보수정</h2>
    		    	<div class="form id">
				        <div class="col1">아이디</div>
				        <div class="col2">
							<?=$userid?>
				        </div>                 
			       	</div>
			       	<div class="clear"></div>

			       	<div class="form">
				        <div class="col1">비밀번호</div>
				        <div class="col2">
							<input type="password" name="pass" value="<?=$pass?>">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="form">
				        <div class="col1">비밀번호 확인</div>
				        <div class="col2">
							<input type="password" name="pass_confirm" value="<?=$pass?>">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="form">
				        <div class="col1">이름</div>
				        <div class="col2">
							<input type="text" name="name" value="<?=$name?>">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="form email">
				        <div class="col1">이메일</div>
				        <div class="col2">
							<input type="text" name="email1" value="<?=$email1?>">@<input 
							       type="text" name="email2" value="<?=$email2?>">
				        </div>                 
			       	</div>
			       	<div class="clear"></div>
			       	<div class="bottom_line"> </div>
			       	<div class="buttons">
	                	<img style="cursor:pointer" src="./img/button_save.gif" onclick="check_input()">&nbsp;
                  		<img id="reset_button" style="cursor:pointer" src="./img/button_reset.gif"
                  			onclick="reset_form()">
	           		</div>
           	</form>
        	</div> <!-- join_box -->
        </div> <!-- main_content -->
	</section> 
	<div class="bottom">
			<button class="next_btn" onclick=" ">next page</button>
			<br><br>
			<h2 style="text-align: center;">저작권이 자유로운 이미지 사이트</h2>
			<br><br>
			<h3 style="color:#909090">모두가 제약없이 이미지를 올리고 내려받을 수 있는 창작 사이트를 만들도록 노력하겠습니다</h3>
			<h3 style="color:#909090">✉ e-mail: pix3000@naver.com</h3>
			<br><br><br><br><br><br>
		</div>

</body>
</html>

