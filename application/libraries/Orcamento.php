<?php


class Orcamento{

    private $texto;
    private $preco;

    function __construct($texto=null, $preco=null,$resultado=null){
        $this->texto  =     $texto;
        $this->preco  =     $preco;
        $this->resultado =  $resultado;
    }

    function calculoOrcamento($data){
        $texto = $data['texto'];
        $preco = $data['preco'];

        $qtdpalavras = substr_count($texto,' ');
        $orca     = ($qtdpalavras + 1) * $preco;

        $resultado= "o preço sera de R$ $orca";
        return $resultado; 
    }

}