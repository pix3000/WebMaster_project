<?php
    $server_name = "localhost";
    $user = "root";
    $password = "";
    $db_name = "test";
    $connect = mysqli_connect($server_name, $user, $password, $db_name);

    $user_id = $_POST["login_id"];
    $user_password = $_POST["login_password"];

    $id_sql = "select * from user_info where id = '$user_id'";
    $result = mysqli_query($connect, $id_sql);
    $row = mysqli_fetch_array($result);
    // while($row = mysqli_fetch_array($result)){
    //     echo '<h2>'.$row['password'].'</h2>';
    // }
    if($user_password != $row["password"]){
        echo "<script>
            alert('아이디와 비밀번호를 다시 입력해주세요');
            location.href = 'login_form.php';
        </script>";
    }
    else{
        echo "<script>
            alert('로그인에 성공하셨습니다');
            location.href = 'main_form.php';
        </script>";
    }
    mysqli_close($connect);      
?>