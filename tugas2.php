<?php 

$Rp = "Rp. ";
$cireng = 1000;
$esduren = 15000;
$esmilo = 20000;
$esteh = 5000;
$piscok = 1000;

?>

<!DOCTYPE html>
<html>
    <body>
        <h1>Daftar Menu</h1>
        <table border="bold">
        <tr>
            <td>NO</td>
            <td>Nama Menu</td>
            <td>Harga</td>
        </tr>
        <tr>
            <td>1</td>
            <td><?php echo "Cireng" ?></td>
            <td><?php echo "$Rp" . "$cireng" ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td><?php echo "Es Duren" ?></td>
            <td><?php echo "$Rp" . "$esduren" ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td><?php echo "Es Milo" ?></td>
            <td><?php echo "$Rp" . "$esmilo" ?></td>
        </tr>
        <tr>
            <td>4</td>
            <td><?php echo "Es Teh" ?></td>
            <td><?php echo "$Rp" . "$esteh" ?></td>
        </tr>
        <tr>
            <td>5</td>
            <td><?php echo "Piscok" ?></td>
            <td><?php echo "$Rp" . "$piscok" ?></td>
        </tr>
        </table>
    </body>
</html>