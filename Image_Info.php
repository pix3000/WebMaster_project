<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<style type="text/css">

	.search_area {
	  	position: relative;
	  	width: 100%;
	  	height: 600px;
	  	margin: 0 auto;
	  	background: url("https://cdn.pixabay.com/photo/2017/07/10/23/43/question-mark-2492009_960_720.jpg");
	  	background-size: 100% 100%;
	  	background-position: center;
	}

	.login_menu{
		padding: 10px;
		
	}


	.img_card{
		margin: 10px 50px 20px 50px;
	}

	input.login_btn {
		width: 100px;
		height: 40px;
		border: 0px;
		background: #fff;
		color: #000000;
		font-size: 20px;
		
	}

	input.signup_btn {
		width: 100px;
		height: 40px;
		border: 0px;
		background: #fff;
		color: #000000;
		font-size: 20px;
		
	}


	button.next_btn {
		width: 110px;
		height: 40px;
		border: 0px;
		background: #000000;
		color: #fff;
		font-size: 20px;
	}

	ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		background-color: #000000;
	}

	ul:after{
		    content:'';
		    display: block;
		    clear:both;
	}

	li {
		float: left;
	}

	li a {
		display: block;
		color: white;
		text-align: center;
		padding: 15px 100px;
		text-decoration: none;
	}

	li a:hover:not(.active) {
		background-color: #333;
	}

	.active {
		background-color: #4CAF50;
	}

	.img_card{
		float: left;
	}


	.down_btn button{
	    background: #222;
	    font-size: 30px;
	    color: #fff;
	    cursor: pointer;
	    padding: 5px 16px;
	    line-height: 50px;
	    border-radius:20px;
	    border:none;
	    letter-spacing:-1px;
	}
	.down_btn button:hover{
	   box-shadow:1px 1px 4px rgba(0,0,0,0.4);

	}

	.down_btn button:hover:not(.active) {
		background-color: #333;
	}


	</style>

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

				<input type="button" value="Sign Up" class="signup_btn" style="float: right;" onclick="location.href=''">&nbsp;&nbsp;
				<input type="button" value="Login" class="login_btn" style="float: right;" onclick="location.href='test_1.html'"><br><br>
				<ul>
			      <li><a class="active" href="#home">Home</a></li>
			      <li><a href="#news">News</a></li>
			      <li><a href="#contact">Contact</a></li>
			      <li><a href="#about">About</a></li>
			    </ul>
		</div>

				<div id="page_b" style="background-color:#000000; padding: 20px;">
					<img style="padding: 30px;  float: left;" id="img1-1" width="1000px" height="700px" src="https://cdn.pixabay.com/photo/2022/07/13/16/25/cat-7319589_960_720.jpg"><br><br>
					<div class="down_btn">
						<a href="https://cdn.pixabay.com/photo/2022/07/13/16/25/cat-7319589_960_720.jpg" download><button><b>Image Download ↓</b></button></a>
					</div>
					<h2 style="padding: 500px;"></h2>
				</div>	

		<h2 style="padding: 10px;"></h2>
		<div class="bottom">
			<br><br>
			<h2 style="text-align: center;">저작권이 자유로운 이미지 사이트</h2>
			<br><br>
			<center>
			<h3 style="color:#909090">모두가 제약없이 이미지를 올리고 내려받을 수 있는 창작 사이트를 만들도록 노력하겠습니다</h3>
			<h3 style="color:#909090">✉ e-mail: pix3000@naver.com</h3>
			<br><br><br><br><br><br>
			</center>
		</div>


	</div>	
</body>
</html>