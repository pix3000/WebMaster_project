<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        .popup{
            width:500px;
            height:200px;
            padding-top:10px;
            padding-bottom:10px;
            border: 2px solid;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        input[type = "submit"]{
            background-color: #000000; 
            text-align: center; 
            color: #fff;
            font-size: 15px;
            margin-left: 45px;
            width : 100px;
            height : 50px;
            border:1px;
            cursor: pointer;
        }
        input[name="login_id"]{
            height: 20px;
            width : 400px;
        }
        input[name="login_password"]{
            width : 400px;
            height : 20px;
        }
        input[type = "button"]{
            background-color: #000000; 
            text-align: center; 
            color: #fff;
             font-size: 15px;
            margin-left: 45px;
            width : 100px;
            height : 50px;
            border:1px;
            cursor: pointer;
        }
        .hover_btn:hover{
            background: #333;
        }

        button.home_btn {
        width: 100px;
        height: 50px;
        border: 0px;
        background: #000000;
        color: #fff;
        font-size: 15px;
        cursor: pointer;

    }

        .home_btn:hover{
            background: #333;
        }

    </style>
    <title>php 로그인 화면</title>
</head>
<body>
    <div class="logo" style="text-align:center; background-color: #000000;">
        <h1 style="font-size: 50px; color: #FFF"">[: Free To Image]</h1>
        <h2 style= "color: #FFF">Free To Image: 자유로운 이미지 놀이터</h2>
        <br><br>
        <h3 style="color:#909090">저희의 웹 사이트에 방문한 것을 진심으로 환영합니다!</h3><br>
    </div>

    <div style = "text-align: center;">
        <img name = "logo" src="img\resize_logo.jpg" alt="">
    </div>
    <form name = "login_form" method = "POST" action = "test_2.php">
        <div class = "popup" style="text-align: center;">
            <p>아이디 &nbsp;&nbsp;&nbsp;&nbsp;
            <input type = "text" class = "sign" name = "login_id" style="width:300px; height: 30px; font-size: 20px;"></p>
            <p>비밀번호&nbsp;&nbsp;
            <input type = "password" class = "sign" name = "login_password" style="width:300px; height: 30px; font-size: 20px;" ></p><br>
            <input type = "button" class = "hover_btn" name = "sign_up" value = "회원가입">
            <input type = "button" class = "hover_btn" name = "find_id" value = "아이디 찾기">
            <input type = "submit" class = "hover_btn" name = "login_btn" value = "로그인">
            <script src = "null_check.js" ></script>
        </div>
    </form>

    <div class="bottom" style = "text-align: center;">

            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <button class="home_btn" onclick="location.href='main_form.php'">홈으로</button><br><br>
            <h3 style="color:#909090">모두가 제약없이 이미지를 올리고 내려받을 수 있는 창작 사이트를 만들도록 노력하겠습니다</h3>
            <h3 style="color:#909090">✉ e-mail: pix3000@naver.com</h3>
            <br><br><br><br><br><br>
        </div>
</body>
</html>