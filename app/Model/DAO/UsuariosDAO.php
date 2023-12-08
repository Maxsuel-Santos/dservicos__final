<?php

namespace Ifba\Model\DAO;

use Ifba\Model\Entities\Usuario;
use Ifba\Core\DAO;

/* class UsuariosDAO
{
    public function inserir($usuario)
    {
        $sql = "INSERT INTO usuarios (nome, email, usuario, senha, lider, turma_id) VALUES (?, ?, ?, ?, ?, ?)";

        

        $db = new Database();
        return $db -> executaSQL($sql, $dados);
    }

    public function buscarTodos()
    {
        $sql = "SELECT * FROM usuarios";
        $db = new Database();
        $db -> executaSQL($sql);
        # Usuario::class => '\Ifba\Model\Entities\Usuario'
        return $db -> recuperarTodos(Usuario::class);
    }
} */

class UsuariosDAO extends DAO{

    protected static string $tabela = "usuario";
    protected static string $classe = Usuario::class;
   
}