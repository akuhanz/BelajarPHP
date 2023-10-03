<?php 

$AyamGoreng = 13000;
$AyamBakar = 15000;
$AyamSayur = 13000;
$TempeGoreng = 1000;
$Tahu = 1000;
$Soto = 3000;
$NasiPutih = 5000;
$esteh = 4000;
$estebu = 5000;
$harga = " = Rp. ";

?>

<!DOCTYPE html>
<html>
    <body>
        <h1>Daftar Menu</h1>
        <table border="0">
        <Tr>
            <td><li><?php echo "Ayam Goreng " ?></li></td>
            <td><?php echo "$harga" . "$AyamGoreng"; ?></td>
        </Tr>
        <tr>
            <td><li><?Php echo "Ayam Bakar " ?></li></td>
            <td><?php echo "$harga" . "$AyamBakar"; ?></td>
        </tr>
        <tr>
            <td><li><?php echo "Ayam Sayur " ?></li></td>
            <td><?php echo "$harga" . "$AyamSayur"; ?></td>
        </tr>
        <tr>
            <td><li><?php echo "Tempe Goreng " ?></li></td>
            <td><?php echo "$harga" . "$TempeGoreng"; ?></td>
        </tr>
        <tr>
            <td><li><?php echo "Tahu " ?></li></td>
            <td><?php echo "$harga" . "$Tahu" ?></td>
        </tr>
        <tr>
            <td><li><?php echo "Soto" ?></li></td>
            <td><?php echo "$harga" . "$Soto" ?></td>
        </tr>
        <tr>
            <td><li><?php echo "Nasi Putih" ?></li></td>
            <td><?php echo "$harga" . "$NasiPutih" ?></td>
        </tr>
        <tr>
            <td><li><?php echo "Es Teh" ?></li></td>
            <td><?php echo "$harga" . "$esteh" ?></td>
        </tr>
        <tr>
            <td><li><?php echo "Es Tebu" ?></li></td>
            <td><?php echo "$harga" . "$estebu" ?></td>
        </tr>
    </table>
    </body>
</html>