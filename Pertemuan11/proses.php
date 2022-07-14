<?php

$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];
$komentar = $_POST['komentar'];

echo "<head><title>My Guest Book</head><title>";
$fp = fopen("GuestBook.txt","a+");
fputs($fp,"$nama|$alamat|$email|$status|$komentar\n");
fclose($fp);

header('Location: setelah-proses.php');
?>