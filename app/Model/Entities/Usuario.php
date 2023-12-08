<?php

namespace Ifba\Model\Entities;
use Ifba\Core\Entity;

class Usuario extends Entity
{
    protected ?int $id;
    protected ?string $nome;
    protected ?string $email;
    protected ?string $usuario;
    protected ?string $senha;
    protected ?bool $lider;
    protected ?int $turma_id;

    
    public function setSenha($valor){
        $this->senha = password_hash($valor, PASSWORD_DEFAULT);
    }

     public static function getRegras() : array{
        return[
            'nome'      =>    'obrigatorio',
            'email'     =>    'obrigatorio|email',
            'usuario'   =>    'obrigatorio',
            'senha'     =>    'obrigatorio',
            'turmas_id' =>    'obrigatorio'
        ];
     }
}