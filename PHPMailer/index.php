<!DOCTYPE html>
<html>
<head>
 <title>FORM KIRIM EMAIL</title>
</head>
<body>
<h2>Kirim Email</h2>
<?php
    date_default_timezone_set("Asia/Jakarta");
    echo "Waktu dan Tanggal: ";
    echo date('d-m-Y H:i:s');
    echo "<br><br>";
?>
<form method="POST" action="kirim.php">
 <table>
  <tr>
   <td>Nama :</td>
   <td><input type="text" name="nama" size="30"></td>
  </tr>
  <tr>
   <td>Email :</td>
   <td><input type="email" name="email" size="30"></td>
  </tr>
  <tr>
   <td>Subjek :</td>
   <td><input type="text" name="subjek" size="30"></td>
  </tr>
  <tr>
   <td>Pesan :</td>
   <td><textarea name="pesan" cols="32" rows="5"></textarea></td>
  </tr>
  <tr>
   <td></td>
   <td><input type="submit" name="kirim" value="Kirim"></td>
  </tr>
 </table> 
</form>
</body>
</html>
