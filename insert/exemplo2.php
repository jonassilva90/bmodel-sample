<?php
// Exemplo 2

use Bmodel\Query;
use Bmodel\Connection;

$result = Query::query(
    "INSERT INTO (`data`, `login`, `senha`, `usuario`, `adm`) ".
    " VALUES (:data, :login, :senha, :usuario, :adm)", 
    [
        ':data'    => $data,
        ':login'   => $login,
        ':senha'   => $senha,
        ':usuario' => $usuario,
        ':adm'     => $adm
    ]
);

$novoId = Connection::connect()->lastInsertId();