<?php

echo "Tabungan awal = Rp. 150000 <br>";
echo "bunga bulanan = 12,5% <br>";
echo "Total tabungan setahun = ? <br>";
echo "Jawaban : Rp.......<br>";

$angka_1 = 150000;
$angka_2 = 12.5;
$angka_3 = 100;
$bagi = $angka_2 / $angka_3;
echo "<br>";
echo " mengubah angka persen menjadi bilangan = $bagi";
$kali = $bagi * $angka_1;
echo "<br>";
echo "Jadi bunga dalam satu tahun adalah $kali";
$tambah = $angka_1 + $kali;
echo "<br>";
echo "Total Tabungan Setahun = Rp. $tambah"


?>