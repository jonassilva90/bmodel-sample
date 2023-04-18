<?php
// Exemplo 4

/* Criar uma class model na pasta de models
<?php

namespace Model;

use Bmodel\Model;

class TabelaUsuario extends Model {
    protected $table = 'tabela_usuario';
    protected $primaryKey = 'id';
}
*/

use Model\TabelaUsuario;

$tabelaUsuario = new TabelaUsuario();

$tabelaUsuario->data    = $data;
$tabelaUsuario->login   = $login;
$tabelaUsuario->senha   = $senha;
$tabelaUsuario->usuario = $usuario;
$tabelaUsuario->adm     = $adm;

$tabelaUsuario->save(); // Vale para insert ou update se definido antes o id.
$novoId = $tabelaUsuario->id;