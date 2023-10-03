<?php 

echo "harga beli = Rp 6000<br>";
echo "harga Jual = Rp 7500<br>";
echo "keuntungan = Rp 300<br>";
echo "Beberapa jumlah kambing yang dibeli?Jawaban :...... Ekor<br>";

$hargabeli = 6000;
$hargajual = 7500;
$keuntungan = 300;

$kurang = $hargajual - $hargabeli;
echo "<br>";
echo "hasil pengurangan dari harga beli dengan harga jual = $kurang";
$bagi = $kurang / $keuntungan;
echo "<br>";
echo "jumlah kambing yang dibeli adalah $bagi"



?>