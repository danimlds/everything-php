<?php

    class Pessoa {
        function falar() {
            echo "No say";
        }
    }

    $daniel = new Pessoa();

    $daniel ->nome = "Daniel";

    echo $daniel->nome;

    echo "<br>";

    $daniel->falar();

?>