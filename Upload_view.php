<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "stylesheet" href = "main.css">
	<style>
		

.down_btn button{
    background: #000000;
    font-size: 12px;
    color: #fff;
    cursor: pointer;
    padding: 2px 16px;
    line-height: 20px;
    
    border:none;
    letter-spacing:-1px;
}



	</style>

	<title>Free To Image: 자유로운 이미지 놀이터</title>
</head>
<body>
	<div id="wrap">
		<div id="header">
			<div class="logo" style="text-align:center;">
			<h3 id = "clock" style = "color: black; text-align: left;">00:00:00</h3>
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
				 	echo "<h3 style = 'float:left;'> {$userid}님 환영합니다</h3>";
				?>
				</p><br><br>
			<?php
			 }
			 ?>
				<ul>
			      <li><a href="#home" onclick="location.href='main_form.php'">Home</a></li>
			      <li><a href="#news" onclick="location.href='news_form.php'">News</a></li>
			      <li><a href="#upload" onclick="location.href='Upload_form.php'">Upload</a></li>
				</ul>
			      <!-- <li><a href="#explore" onclick="location.href='explore_list.php'">Explore</a></li> -->
			     
			

		</div>
		<!-- <div class="search_area">
				<center>
				<br>
				<h1 style="color:#fff">누구나 이미지를 무료로 자유롭게 이용해보세요!</h1>
				<h3 style="color:#fff">자유롭고 편리한 이미지 공유 커뮤니티</h3>
				<p>
				<input type="text" placeholder="찾고 싶은 이미지 키워드를 입력하세요" class="search_box">
				<button class="search_btn" onclick=" ">search</button>
				</p>
				</center>
		</div> -->

		
<script src = "js/clock.js"></script>



<section>
	
   	<div id="board_box" >
<?php
	$num  = $_GET["num"];
	$page  = $_GET["page"];

	$con = mysqli_connect("localhost", "root", "", "fti");
	$sql = "select * from upload where num=$num";
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);
	$id      = $row["id"];
	$name      = $row["name"];
	$regist_day = $row["regist_day"];
	$subject    = $row["subject"];
	$content    = $row["content"];
	$file_name    = $row["file_name"];
	$file_type    = $row["file_type"];
	$file_copied  = $row["file_copied"];
	$hit          = $row["hit"];

	$content = str_replace(" ", "&nbsp;", $content);
	$content = str_replace("\n", "<br>", $content);

	$new_hit = $hit + 1;
	$sql = "update upload set hit=$new_hit where num=$num";   
	mysqli_query($con, $sql);
?>		
	    <ul id="view_content" style="color:#fff; font-size:30px; padding: 20px;">
			<li>
				<span class="col1"><?=$subject?></span>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<span class="col2"><?=$name?><?php echo"님"; ?> | <?=$regist_day?></span>
			</li><br><br>
			<li style="font-size: 20px;">
				<?php
					if($file_name) {
						$real_name = $file_copied;
						$file_path = "./data/".$real_name;
						$file_size = filesize($file_path);

						echo "▷ 첨부파일 : $file_name ($file_size Byte) &nbsp;&nbsp;&nbsp;&nbsp;
			       		";
			           	}
				?>
				
				<br>
				<p><?=$content?></p>
				<img src= "./data/<?=$file_copied?>" style="width: 600px; float: left;">

				<div class="down_btn">
		   			<a href= "./data/<?=$file_copied?>" download><button>이미지 원본 다운로드</button></a>
				</div>
			</li>	

	    </ul>


	    <ul class="buttons" style="padding: 20px;">
	    	<br><br>
			
				<li><button class="delete_btn" onclick="location.href='Upload_delete.php?num=<?=$num?>&page=<?=$page?>'">Delete</button></li>
		</ul>
		<br>
	</div> <!-- board_box -->
</section> 





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