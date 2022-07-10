<?php
include('../config.php');

 //var_dump($_POST);

// inisialisasi variable
$nama = $_POST['nama'];
$email = $_POST['email'];
$subjek = $_POST['subjek'];
$pesan = $_POST['pesan'];



$sql = "INSERT INTO `contact-us`(`nama`, `email`, `subject`, `pesan`) VALUES ('$nama','$email','$subjek','$pesan')";


if ($conn->query($sql) === TRUE) {
    echo "DATA TERKIRIM";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>