<?php
include('../config.php');


// inisialisasi variable
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$email = $_POST['email'];
$jalur= $_POST['jalur'];
$jurusan1 = $_POST['jurusan1'];
$jurusan2 = $_POST['jurusan2'];
$nohp = $_POST['nogp'];
$asalsma = $_POST['asalsma'];
$alamat= $_POST['alamt'];

$sql = "INSERT INTO `pmb`(`nama`, `nik`, `email`, `jalurseleksi`, `jurusan1`, `jurusan2`, `nohp`, `asalsma`, `alamat`) VALUES ('$nama','$nik','$email','$jalur','$jurusan1','$jurusan2','$nohp','$asalsma','$alamat')";

if ($conn->query($sql) === TRUE) {
    echo "DATA TERKIRIM";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>