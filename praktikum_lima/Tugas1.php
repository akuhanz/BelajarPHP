<?php
function logical_and($a, $b) {
    return $a and $b;
}

function logical_or($a, $b) {
    return $a or $b;
}

$inputs = array(
    array(false, false),
    array(false, true),
    array(true, false),
    array(true, true),
);

echo "<h2>Tabel Logika 1111</h2>";
echo "<table border ='1'>
    <tr>
        <th>Input true</th>
        <th>Input 2</th>
        <th>AND</th>
        <th>OR</th>
    </tr>";
    
foreach ($inputs as $input) {
    $a = $input[0];
    $b = $input[1];
    $and_result = logical_and($a, $b) ?  1 : 0;
    $or_result = logical_or($a, $b) ? 1 : 0;

    echo "<tr>
        <td>". ($a ? "true" : "false") ."</td>
        <td>". ($b ? "true" : "false") ."</td>
        <td>$and_result</td>
        <td>$or_result</td>
    </tr>";
}



echo "</table>";



 ?>