<?php
$hari=date("d");
$hariini=$hari;
$bulan=date("m");
$tahun=date("Y");

$jumlahhari=date("t",mktime(0,0,0,$bulan,$hari,$tahun));
?>
<br><br>

<?php
switch($bulan){
	case 1: $nmbulan = "Jan";break;
	case 2: $nmbulan = "feb";break;
	case 3: $nmbulan = "mar";break;
	case 4: $nmbulan = "apr";break;
	case 5: $nmbulan = "mei";break;
	case 6: $nmbulan = "jum";break;
	case 7: $nmbulan = "Jul";break;
	case 8: $nmbulan = "agu";break;
	case 9: $nmbulan = "sep";break;
	case 10: $nmbulan = "okt";break;
	case 11: $nmbulan = "nop";break;
	case 12: $nmbulan = "des";break;
}
echo"<center><h1>$nmbulan $tahun </h1></center>";?>
<br>
<table style="border: 2px solid #1E90FF" align="center" cellpadding="10">
<tr bgcolor="#ADD8E6">
	<td align="center"><font color="#FF0000">Min</font></td>
	<td align="center">Sen</td>
	<td align="center">Sel</td>
	<td align="center">Rab</td>
	<td align="center">Kam</td>
	<td align="center">Jum</td>
	<td align="center">Sab</td>
</tr>
<br>
<?php
$s=date("w",mktime(0,0,0,$bulan,1,$tahun));
for ($ds=1; $ds<=$s ; $ds++) {
	echo"<td></td>" ;
}

for($d=1;$d<=$jumlahhari;$d++){
	if(date("w",mktime(0,0,0,$bulan,$d,$tahun))==0){
		echo"<tr>";
	}

	$warna="#000000";
	$warnasel="#ffffff";

	if(date("l",mktime(0,0,0,$bulan,$d,$tahun))=="Sunday"){
		$warna="#FF0000";
	}

	//blok sel yang sesuai hari ini
	if($hariini == $d){
		$warna="white";
		$warnasel="grey";
	}

	echo" <td align=center valign=middle bgcolor=$warnasel> <span style=\"color: $warna\"> $d </span></td>";
	if(date("w",mktime(0,0,0,$bulan,$d,$tahun))==6){
		echo"</tr>";
	}
}
echo'</table>';
?>
