<?php

    $pessoa = [
        'nome' => 'Frodo',
        'idade' => 33,
        'cidade' => 'Condado'
    ];

    $idade = $pessoa['idade'];

    if($idade > 18) {
        echo 'Frodo é maior de idade!';
    }else {
        echo 'Tem muito o que aprender!';
    }

?>