<?php

    $num   = $_GET["num"];
    $page   = $_GET["page"];

    $con = mysqli_connect("localhost", "root", "", "fti");
    $sql = "select * from upload where num = $num";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    $copied_name = $row["file_copied"];

	if ($copied_name)
	{
		$file_path = "./data/".$copied_name;
		unlink($file_path);
    }

    $sql = "delete from upload where num = $num";
    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "
	     <script>
	     	 alert('정상적으로 삭제 되었습니다.');
	         location.href = 'main_form.php';
	     </script>
	   ";
?>

