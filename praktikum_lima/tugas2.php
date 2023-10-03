<?php

// Define input values
$input1_1 = "Ayo";
$input2_1 = " Belajar";
$gabungan1 = $input1_1 . $input2_1;
$input1_2 = " Bersama";
$input2_2 = " Nionic";
$gabungan2 = $input1_2.$input2_2;
$semuagabungan = $gabungan1 . $gabungan2;

// Output the table
echo "<h1>Operator String</h1>";
echo "<table border='1'>
        <tr>
            <th>Input 1</th>
            <th>Input 2</th>
            <th>Hasil</th>
        </tr>
        <tr>
            <td>{$input1_1}</td>
            <td>{$input2_1}</td>
            <td>{$gabungan1}</td>        
        </tr>
        <tr>
            <td>{$input1_2}</td>
            <td>{$input2_2}</td>
            <td>{$gabungan2}</td>
        </tr>
   </table> <br>";

   echo "Gabungan : {$semuagabungan} :) "
?>