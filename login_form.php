<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/style.css">
    <title>php 로그인 화면</title>
</head>
<body>
    <div class="logo">
        <h3 id = "clock" style = "color: #fff; text-align: left;">00:00:00</h2>
        <h1 style="font-size: 50px; color: #FFF">[: Free To Image]</h1>
        <h2 style= "color: #FFF">Free To Image: 자유로운 이미지 놀이터</h2>
        <h3 style="color:#909090; display:inline;">저희의 웹 사이트에 방문한 것을 진심으로 환영합니다!</h3>
        <br></br>
    </div>

    <form name = "login_form" id = "form_id" method = "POST" action = "login.php">
        <div class = "popup">
            <p>아이디 &nbsp;&nbsp;&nbsp;&nbsp;
            <input type = "text" id = "login_id" class = "sign" name = "login_id" ></p>
            <p>비밀번호&nbsp;&nbsp;
            <input type = "password" id = "login_password" class = "sign" name = "login_password"></p><br>
            <input type = "button" class = "hover_btn" name = "sign_up" value = "회원가입"  onclick = "location.href ='signup_form.html'">
            <input type = "button" class = "hover_btn" name = "find_id" value = "아이디 찾기">
            <input type = "submit" class = "hover_btn" name = "login_btn" value = "로그인">
            
        </div>
    </form>

    <div class="bottom" style = "text-align: center;">

            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <button class="home_btn" onclick="location.href='main_form.php'">홈으로</button><br><br>
            <h3 style="color:#909090">모두가 제약없이 이미지를 올리고 내려받을 수 있는 창작 사이트를 만들도록 노력하겠습니다</h3>
            <h3 style="color:#909090">✉ e-mail: pix3000@naver.com</h3>
            <br><br><br><br><br><br>
        </div>
    <script src = "js/clock.js"></script>
    <script src = "js/no_empty.js" ></script>
</body>
</html>