<?php
echo "<head><title>My Guest Book</title></head>";
$fp=fopen("GuestBook.txt","r");

echo "<table border=0>";

while($isi=fgets($fp)){
    $pisah = explode("|",$isi);
    $waktu = date('Y-m-d');
    echo "<table border=1>";
    echo "<td>Waktu:  :$waktu  </td>>";
    echo "<td>Nama: </td><td> : $pisah[0] </td>";
    echo "<td>Alamat: </td><td> : $pisah[1] </td>";
    echo "<td>Email: </td><td> : $pisah[2] </td>";
    echo "<td>Status: </td><td> : $pisah[3] </td>";
    echo "<td>Komentar: </td><td> : $pisah[4] </td>";
    echo "<td><br></td><td><br></td>";
    echo "</table>";
}

echo "</table>";
echo "<a href='tampilan.php' > Isi Buku tamu </a>";
?>