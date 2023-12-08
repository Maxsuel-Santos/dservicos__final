<?php

use Ifba\Core\Router;
Router::get('/', 'HomeController', 'index');
Router::get('home', 'HomeController', 'index');
Router::get('login', 'LoginController', 'login');
Router::get('eletricista', 'HomeController', 'eletricista');
Router::post('cadastropessoal', 'HomeController', 'cadastropessoal');
Router::post('cadastroprofissional', 'HomeController', 'cadastroprofissional');
Router::post('cadastrofeito', 'HomeController', 'cadastrofeito');

//Router::get('pedidofeito', 'HomeController', 'pedidofeito');

/*Router::add('teste', 'HomeController', 'teste');
Router::add('teste2', 'HomeController', 'teste2');
Router::add('teste3', 'HomeController', 'teste3');
Router::add('teste4', 'HomeController', 'teste4');
Router::add('teste5', 'HomeController', 'teste5');
Router::add('teste6', 'HomeController', 'teste6');*/