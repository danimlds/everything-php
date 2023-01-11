<?php

    echo 5;
    echo "<br>";
    echo 5 + 2;
    echo "<br>";
    echo 10 + 3;
    echo "<br>";
    echo 10 + 14;
    echo "<br>";
    echo 60 + 9;
    echo "<br>";

    $number = -5;
    $number2 = 12;

    $number3 = $number + $number2;

    //is_int verifica se é um número inteiro.

    if(is_int($number3)) {
        echo "true";
    }else {
        echo "false";
    }

?>