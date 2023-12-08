<?php

function css(string $arquivo): string
{
    return URL_BASE."/public/css/{$arquivo}.css";
}

function imagem(string $arquivo): string
{
    return URL_BASE."/public/img/{$arquivo}";
}


function linkUrl(string $rota = ""): string
{
    return URL_BASE . "/" . "{$rota}";
}

function componente(string $componente)
{
    require PASTA_VIEW . "componentes/{$componente}.view.php";
}

function paginaview(string $paginaview)
{
    require PASTA_VIEW . "{$paginaview}.view.php";
}

function redirecionar($rota = "")
{
    header("location: ".linkUrl('rota'));
    die;
}

function flash($msg = "", $tipo = "sucesso"){
    if(!empty($mensagem)){
        $_SESSION['__mensagem'] = [$mensagem, $tipo];
    } else if (empty($mensagem) && isset($_SESSION['__mensagem']))
    {
        [$mensagem,$tipo] = $_SESSION['__mensagem'];   
        $retorno = "";
        $retorno .= "<div class= 'mensagem {$tipo}'>";
        $retorno .= $mensagem;
        $retorno .= "</div>";
        unset($_SESSION['__mensagem']);
        return $retorno;
    }else{
        return "";
    }
}