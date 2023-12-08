<?php

namespace Ifba\Controllers;

use Ifba\Core\Controller;
use Ifba\Core\Database;
use Ifba\Core\Validator;
use Ifba\Model\DAO\UsuariosDAO;
use Ifba\Model\Entities\Usuario;
use Ifba\View;

class LoginController extends Controller{

    public function login()
    {
        $this -> view('login');
    }

    public function cadastropessoal() {
        $this -> viewPessoal('cadastropessoal');
    }
    
    public function cadastroprofissional() {
        $this -> viewProfissional('cadastroprofissional');
    }

    public function cadastrarconta(){

        $houveerro = Validator::execute(Usuario::getRegras(), $this->post());

       if ($houveerro){
            foreach(Validator::getErros() as $erro){
                echo"<li>{$erro}</li>";
            }
            die;
       } 

       $usuario = new Usuario($this->post());
       $usuario->tipo = 1;
          
       if (UsuariosDAO::inserir($usuario)){
        flash("Usuário {$usuario->nome} Foi Cadastrado com Sucesso!");
        redirecionar('login');
       }
    }
}