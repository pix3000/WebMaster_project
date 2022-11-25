<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type="text/css" href = "main.css">
       
    <title>php 로그인 화면</title>
</head>
<body>
    <div class="logo" style="text-align:center; background-color: #000000;">
        <h1 style="font-size: 50px; color: #FFF"">[: Free To Image]</h1>
        <h2 style= "color: #FFF">Free To Image: 자유로운 이미지 놀이터</h2>
        <br><br>
        <h3 style="color:#909090">저희의 웹 사이트에 방문한 것을 진심으로 환영합니다!</h3><br>
    </div>
    
    <form name = "login_form" method = "POST" action = "login.php">
        <div class = "popup" style="text-align: center;">
            <p>아이디 &nbsp;&nbsp;&nbsp;&nbsp;
            <input type = "text" class = "sign" name = "id" style="width:300px; height: 30px; font-size: 20px;"></p>
            <p>비밀번호&nbsp;&nbsp;
            <input type = "password" class = "sign" name = "pass" style="width:300px; height: 30px; font-size: 20px;" ></p><br>
            <input type = "button" class = "hover_btn" name = "sign_up" value = "회원가입" onclick = "location.href ='sign_form.html'">
            <input type = "button" class = "hover_btn" name = "find_id" value = "아이디 찾기">
            <input type = "submit" class = "hover_btn" name = "login_btn" value = "로그인">
            <script src = "null_check.js" ></script>
        </div>
    </form>
    <script src = js/clock.js></script>
    <div class="bottom" style = "text-align: center;">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <button class="home_btn" onclick="location.href='main_form.php'">홈으로</button><br><br>
            <h3 style="color:#909090">모두가 제약없이 이미지를 올리고 내려받을 수 있는 창작 사이트를 만들도록 노력하겠습니다</h3>
            <h3 style="color:#909090">✉ e-mail: pix3000@naver.com</h3>
            <br><br><br><br><br><br>
        </div>
</body>
</html>
