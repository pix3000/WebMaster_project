<?php
    $server_name = "localhost";
    $user = "root";
    $password = "";
    $db_name = "fti";
    $connect = mysqli_connect($server_name, $user, $password, $db_name);
    
    $user_id = $_POST["login_id"];
    $user_password = $_POST["login_password"];
    $password_equal = $_POST["equal_password"];
    $user_name = $_POST["user_name"];
    $user_email_1rd = $_POST["user_email_1rd"];
    $user_email_2nd = $_POST["user_email_2nd"];
    $user_email = $user_email_1rd."@".$user_email_2nd;

    if(!$connect){
        die("서버와 연결 실패: ".mysqli_connect_error());
        // DB 연결에 실패하면 에러 메시지를 출력하고 PHP 스크립트를 종료
    }
    
    $insert_sql = "insert into users(id, pass, name, email) values('$user_id', '$user_password','$user_name', '$user_email')";

    mysqli_query($connect, $insert_sql);

    echo "<script>location.href = 'login_form.php'</script>";
    
    mysqli_close($connect);
    // echo "서버와 연결 해지";
?>