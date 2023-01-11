<?php

    $num1 = 1.5;
    $num2 = 3.5;
    $num3 = 2;

    if(is_float($num1)) {
        echo "true <br>";
        echo ($num1 + $num2 + $num3);
        echo " days to die";
    }else {
        echo "false";
    }

?>