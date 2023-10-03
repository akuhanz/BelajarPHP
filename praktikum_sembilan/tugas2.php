<?php

    function tes($angka)
    {
        if ($angka < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($angka); $i++) {
            if ($angka % $i === 0) {
                return false;
            }
        }
        return true;
    }

    $angka = 200;
    
    for ($i = 0; $i <= $angka; $i++) {
        if (tes($i)) {
            echo $i .",";
        }
    } 
    ?>

