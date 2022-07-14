<?php
	
	echo $_SESSION['umur'];


	if ($_SESSION['isLogin'] == TRUE) {
		echo "sedang login";
	}else{
		header('Location: http://localhost/pweb2');
	}
?>