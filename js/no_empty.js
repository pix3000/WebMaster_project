document.getElementById("form_id").addEventListener("submit", function(e){
    let login_value = document.getElementById("login_id").value;
    let password_value = document.getElementById("login_password").value;
    let check_password = document.getElementById("equal_password").value;
    let user_name = document.getElementById("user_name").value;
    let email1 = document.getElementById("user_email_1rd").value;
    let email2 = document.getElementById("user_email_2nd").value;
    if(password_value != check_password){
        alert("비밀번호를 확인하세요.");
        e.preventDefault();
    }
    else if(!(login_value && password_value && check_password && user_name && email1 && email2))  {
        alert("빈칸을 채워주세요");
        e.preventDefault();
    }
    else{
        alert("성공적으로 회원가입 하였습니다.");
    }
});



