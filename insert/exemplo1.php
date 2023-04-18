<?php

// Exemplo 1

use Bmodel\Query;

$novoId = Query::getTable('tabela_usuario')->insert(
    [
        'data'    => $data,
        'login'   => $login,
        'senha'   => $senha,
        'usuario' => $usuario,
        'adm'     => $adm
    ]
);
