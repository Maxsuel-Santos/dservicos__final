<?php
namespace Ifba\Core;

class Validator
{
    protected static bool $houveerro = false;
    protected static array $msg = [];

    public static function execute(array $regrasValidacao, array $valores){
        foreach($regrasValidacao as $campo => $regra){
            echo $campo . "<br>";
            $listaregras = explode ("|", $regra);
            $valor = $valores[$campo] ?? null;
            $parametros = [$valor, $campo];

            foreach($listaregras as $campo => $regras){
                if(method_exists(__CLASS__,$regras)){
                    call_user_func_array([__CLASS__,$regras],$parametros);
                }
            }
        }
        return static::$houveerro;
    }

    protected static function obrigatorio($valor,$nomecampo){
        $valor = trim($valor);
        if(strlen($valor == 0)){
            static:: $houveerro = true;
            static::$msg[$nomecampo] = "O {$nomecampo} é obrigatório e não foi preenchido";
        }
    }

    protected static function email($valor, $nomecampo){
        if(!filter_var($valor, FILTER_VALIDATE_EMAIL)){
            static::$houveerro = true;
            static::$msg[$nomecampo] = "O {$nomecampo} prescisa ser um email válido";
        }
    }

    public static function getErros():array{
        return static::$msg;
    }
        }