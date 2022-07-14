<?php
include "header.php";

$file = 'data.txt';

if (file_exists($file)) {
	$handle = fopen($file, "r");
	$content = fread($handle, filesize($file));
	$contentRow = explode("|", $content);
	echo $contentRow[0].'---'.$contentRow[1];
}else{
	echo "file tidak ada";
}

include "footer.php";

?>