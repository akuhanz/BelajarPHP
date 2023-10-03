<?php 

echo "jarak kota A - Z = 360 KM<br>";
echo "Kecepatan Motor = 90km/Jam<br>";
echo "Waktu tempuh = ?<br>";
echo " jawaban : ...... Menit<br>";


$angka = array(360,90,60);
$jam = $angka[0] / $angka[1];
echo "<br>";
echo "waktu yang di tempuh motor tersebut : $jam Jam <br>";
$menit = $jam * $angka[2];
echo "<br>";
echo "Waktu yang di butuh kan motor untuk <br> pergi ke kota A sampai ke Z adalah $menit Menit";


?>