<?php
    session_start();
    include "./dbconn.php"  ;

    $num = $_GET['num'];
    $table = $_GET['table'];

    $sql = "SELECT * FROM $table WHERE num = $num";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);

    $copied_name[0] = $row['file_copied_0'];
    $copied_name[1] = $row['file_copied_1'];

    for ($i=0; $i<2; $i++){
		if ($copied_name[$i]){
			$image_name = "./data/".$copied_name[$i];
			unlink($image_name);
	    }
    }

    $sql = "DELETE FROM $table WHERE num = $num";
    mysqli_query($connect, $sql);
    mysqli_close($connect);

    echo "
        <script>
            location.href = 'notice.php?table=$table';
        </script>
	";
?>