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
		<h3 id = "clock" style = "color: black; text-align: left;">00:00:00</h3>
			<h1 id = 'header_in_logo' style="font-size: 50px;">[: Free To Image]</h1><br>
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
		<input type="button" value="Login" class="main_three_button" style="float: right;" onclick="location.href='login_form.php'">
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
		  
		  <!-- <li><a href="#explore" onclick = "location.href ='explore_list.php'">Explore</a></li> -->
		</ul>
	

</div>
		<div class="search_area">
				<center>
					<br><br><br><br><br><br><br><br><br>
					<h1 style="color:#fff">누구나 이미지를 무료로 자유롭게 이용해보세요!</h1>
					<h3 style="color:#fff">자유롭고 편리한 이미지 공유 커뮤니티</h3>
				</center>
		</div>
		
		<section>

<div id="board_box">

 
<?php
	if (isset($_GET["page"]))
		$page = $_GET["page"];
	else
		$page = 1;

	$con = mysqli_connect("localhost", "root", "", "fti");
	$sql = "select * from upload order by num desc";
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 글 수

	$scale = 10;

	// 전체 페이지 수($total_page) 계산 
	if ($total_record % $scale == 0)     
		$total_page = floor($total_record/$scale);      
	else
		$total_page = floor($total_record/$scale) + 1; 

// 표시할 페이지($page)에 따라 $start 계산  
	$start = ($page - 1) * $scale;      

	$number = $total_record - $start;

for ($i=$start; $i<$start+$scale && $i < $total_record; $i++){
	mysqli_data_seek($result, $i);
	// 가져올 레코드로 위치(포인터) 이동
	$row = mysqli_fetch_array($result);
	// 하나의 레코드 가져오기
	$num         = $row["num"];
	$id          = $row["id"];
	$name        = $row["name"];
	$subject     = $row["subject"];
	$regist_day  = $row["regist_day"];
	$hit         = $row["hit"];
	$file_copied  = $row["file_copied"];

	if ($row["file_name"])
		$file_image = "<img src='./img/file.gif'>";
	else
		$file_image = " ";
	?>
			<li class="DOCTYPE" style="padding: 20px;">
				<span class="col1"><a href="Upload_view.php?num=<?=$num?>&page=<?=$page?>"><?=$subject?></a></span>
				<span class="col2"><img src= "./data/<?=$file_copied?>" style="width: 400px; float: left;"></span>
			</li>	
	<?php
		$number--;
	}
		mysqli_close($con);

	?>
		</ul>
		<ul id="page_num"> 	
	<?php
	if ($total_page>=2 && $page >= 2)	{
		$new_page = $page-1;
		echo "<li><a href='explore_list.php?page=$new_page'>◀ 이전</a> </li>";
	}		
	else 
		echo "<li>&nbsp;</li>";

	// 게시판 목록 하단에 페이지 링크 번호 출력
	for ($i=1; $i<=$total_page; $i++){
		if ($page == $i)     // 현재 페이지 번호 링크 안함
	{
		echo "<li><b> $i </b></li>";
	}
	else
	{
		echo "<li><a href='explore_list.php?page=$i'> $i </a><li>";
	}
	}
	if ($total_page>=2 && $page != $total_page)		
	{
	$new_page = $page+1;	
	echo "<li> <a href='explore_list.php?page=$new_page'>다음 ▶</a> </li>";
	}
	else 
	echo "<li>&nbsp;</li>";
	?>
		</ul> <!-- page -->	    	
	<br>
			
	
 
</div> <!-- board_box -->
</section>
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