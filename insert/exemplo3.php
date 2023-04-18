<?php

// Exemplo 3
$tabelaUsuario = Query::getTable('tabela_usuario', null, 'id');

$tabelaUsuario->data    = $data;
$tabelaUsuario->login   = $login;
$tabelaUsuario->senha   = $senha;
$tabelaUsuario->usuario = $usuario;
$tabelaUsuario->adm     = $adm;

$tabelaUsuario->save(); // Vale para insert ou update se definido antes o id.
$novoId = $tabelaUsuario->id;
