<?php

namespace Ifba\Controllers;

use Ifba\Core\Controller;

class ErroController extends Controller{

    public function erro($tipo)
    {
        switch($tipo){
            case "404":
                $this->view('erro');
            break;

            case "controlador":
                $this->view('erro', ['msg' => 'Controlador Não Existe']);
            break;

            case "metodo":
                $this->view('erro', ['msg' => 'Metodo Não Existe no Controlador']);
            break;

            case "naopermitido":
                $this->view('erro', ['msg' => 'A Rota Não É Permitida Para Este Método']);
            break;
        }
        
    }
}