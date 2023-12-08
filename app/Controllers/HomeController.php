<?php

namespace Ifba\Controllers;

use Ifba\Core\Controller;
use Ifba\Core\Database;
use Ifba\Model\DAO\UsuariosDAO;
use Ifba\Model\Entities\Usuario;
use Ifba\Model\Usuarios;
use Ifba\View;

class HomeController extends Controller{

    public function index(){
        $this -> view('inicial');
    }

    public function eletricista() {
        $this -> view('eletricista');
    }

    public function pedidofeito() {
        $this -> view('pedidofeito');
    }

    public function cadastrofeito() {
        $this -> view('cadastrofeito');
    }
    

/*
    public function teste(){
        $usuario = new Usuario;
        $usuario -> nome = "José";
        $usuario -> email = "jose@ifba.edu.br";
        $usuario -> usuario = "jose";
        $usuario -> senha = "123456";
        $usuario -> lider = False;
        $usuario -> turma_id = 1;

       UsuariosDAO::inserir($usuario);
    }

    public function teste2(){
        $usuarios = UsuariosDAO::getAll();

        foreach($usuarios as $usuario){
            echo $usuario->nome;
            echo "<hr>";
        }
    }

    public function text3(){
        $usuario = UsuariosDAO::getById(9);
        echo "<pre>";
        var_dump($usuario);
    }

    public function text4(){
        $usuario = UsuariosDAO::getById(9);
        $usuario->nome = "Thiago";
        $usuario->email = "thiago@ifba.edu.br";
        $usuario->usuario = "thiago";

        UsuariosDAO::editar($usuario);

        echo "<pre>";
        var_dump($usuario);
    }

    public function text5(){
        $usuario = UsuariosDAO::getById(9);
       
        if($usuario){
            UsuariosDAO::excluir($usuario);
            echo "Usuário Excluido com Sucesso!";
        }else{
            echo "Usuário Inexistente!";
        }

        echo "<pre>";
        var_dump($usuario);
    }

    public function teste6(){
        $usuario = new Usuario(
         ['nome' => 'José',
         'email' => 'jose@ifba.edu.br',
         'usuario' => 'jose',
         'senha' => 1234,
         'lider' => False,
         'turma_id' => 1]
        );
       var_dump($usuario);
    }
    public function criarconta()
        $dados = [
            'titulo' => 'D+ Serviços',
            'data' => date('d/m/Y h:i:s')
        ];

        $this -> view('inicial', $dados);
    }

    public function login()
    {
        $this -> view('login');
    }

    public function criarconta()
    {
        

        $dao = new UsuariosDAO;
        if($dao -> inserir($usuario)){
            echo "Usuário inserido com sucesso";
        }else{
            echo "Erro ao Inserir o usuário";
        }

        $this -> view('conta');
    }*/

    /*public function listarUsuarios()
    }

    public function listarUsuarios()
    {
        $dao = new UsuariosDAO;
        $usuarios = $dao -> buscarTodos();
        
        foreach($usuarios as $usuario)
        {
            echo $usuario -> id . " - " . $usuario -> nome . "<hr>";
        }

    }*/

    }
