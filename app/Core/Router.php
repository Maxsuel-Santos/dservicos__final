<?php

namespace Ifba\Core;

class Router{
    # Métodos e propriedades estáticos (static) são aqueles que pertecem a classe e não aos seus objetos. Não existe para acessá-los a necessidade de se ter um objeto baseado nesta classes.

    protected static array $rotas = [];

    public static function get(string $url, string $controller, string $acao){
        static::add($url, $controller, $acao, 'GET');
    }

    public static function post(string $url, string $controller, string $acao){
        static::add($url, $controller, $acao, 'POST');
    }

    public static function add(string $url, string $controller, string $acao, string $metodo)
    {
        static::$rotas[$url] = [$controller, $acao, $metodo];
    }



public static function execute(string $url, string $metodoHTTP)
    {

        $rotas = static::$rotas;

        # Verifico se a url passada existe como chave no array
        if(array_key_exists($url, $rotas)){
            [$controller, $acao,$metodo] = $rotas[$url];
            if($metodo == $metodoHTTP){
                static::carregaController($controller,$acao);
            }else{
                static::erro('naopermitido',405);
            }
        }else{
            static::erro('404',404);
        }
    }

    protected static function carregaController($controller, $metodo)
    {
        $controller = NS_CONTROLLERS. $controller;
        if(class_exists($controller)){
            $ctr = new $controller;

            if(method_exists($ctr,$metodo)){
                http_response_code(200);
                $ctr->$metodo();
            }else{
                static::erro('metodo', 405);
            }

        }else{
            static::erro('controller', 405);
        }
    }

    protected static function erro(string $tipo, int $codigo = 400)
    {
        http_response_code($codigo);
        $controller = NS_CONTROLLERS. 'ErroController';
        $ctr = new $controller();        
        $ctr->erro($tipo);
    }
}