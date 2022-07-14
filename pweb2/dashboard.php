<?php
	include "myfunction.php";
	
	include 'header.php';


	$file = 'data.txt';

	if (file_exists($file)) {
		$handle = fopen($file, "r");
		$content = fread($handle, filesize($file));
		$contentRow = explode("|", $content);
	}else{
		echo "file tidak ada";
	}

	if ($_POST['username'] == $contentRow[0] AND $_POST['password'] == $contentRow[1]) {
		echo "anda berhasil login";
		$_SESSION['isLogin'] = TRUE;
	}else{
		header('Location: http://localhost/pweb2');
	}

	include "footer.php";
?>