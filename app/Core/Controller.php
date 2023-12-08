<?php

namespace Ifba\Core;

abstract class Controller{

    # Uma classe abstrata é uma classe que não pode ser instanciada, somente herdada. É uma classe que pode ter implementação e também os contratos a serem seguidos pelas classes filhas.
    protected array $postVars = [];
    protected array $getVars = [];

    protected string $pasta_view = './View/';

    public function __construct(){
        $this->postVars = $_POST ?? [];
        $this->getVars = $_GET ?? [];

    }

    public function view(string $arquivo, array $dados = [])
    {
        extract($dados);
        # Função extract cria variáveis a partir de um arra associativo em que as chaves do array tornam-se o nome das variáveis.

        require PASTA_VIEW."{$arquivo}.view.php";
    }

    public function post(string $nome = null){
        if(is_null($nome)){
            return $this->postVars;
        }

        if(key_exists($nome, $this->postVars)){
            return $this->postVars[$nome];
        }
        return null;
    }

    public function get(string $nome = null){
        if(is_null($nome)){
            return $this->getVars;
        }

        if(key_exists($nome, $this->getVars)){
            return $this->getVars[$nome];
        }
        return null;
    }

    public function input(string $nome = null){
        if(is_null($nome)){
            return null;
        }
        $inputs = array_merge($this->postVars, $this->getVars);
        if (key_exists($nome,$inputs)) {
            return $inputs[$nome];
        }
        return null;
    }

    public function all(){
        $inputs = array_merge($this->postVars, $this->getVars);
        return $inputs;
    }
}