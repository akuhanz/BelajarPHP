<?php

    $bilangan1 = 0;
    $bilangan2 = 1;
    $batas     = 20;


    echo $bilangan1. " ";
    echo $bilangan2. " ";

    for($i=0; $i < $batas; $i++){
        $bilangan3 = $bilangan1 + $bilangan2;
        echo $bilangan3. " ";
        $bilangan1 = $bilangan2;
        $bilangan2 = $bilangan3;
    }

?>
