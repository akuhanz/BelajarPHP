<?php 

    $dusjambu = 5 * 6;
    $hargaJambu = 15000;
    $penghasilan = $dusjambu * $hargaJambu;
    $hargaKardus = 2000;
    $penghasilanKardus = $hargaKardus * 2;
    $total = $penghasilan + $penghasilanKardus;

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Tugas 2</title>
    </head>
    <body>
        <h3>===========================================</h3>
        <p>Harga jambu = <?= $hargaJambu; ?> / kg</p>
        <p>Harga kardus = <?= $hargaKardus; ?></p>
        <p>Total penjualan(Dus dan jambu) = Rp.<?= $total; ?></p>
        <h3>===========================================</h3>
    </body>
</html>