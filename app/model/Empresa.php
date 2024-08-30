<?php

class Empresa {

    private $id;
    private $nome;
    private $cnpj;
    private $endereco;
    private $telefone;


    function __construct($nome, $cnpj, $endereco, $telefone) {
        
        $this->nome = $nome;
        $this->cnpj = $cnpj;
        $this->endereco = $endereco;
        $this->telefone = $telefone;

    }

    function getID() {
        return $this->id;

    }

    function getNome() {
        return $this->nome;
        
    }
    function getCnpj() {
        return $this->cnpj;
        
    }
    function geEnderco() {
        return $this->endereco;
        
    }
    function getTelefone() {
        return $this->telefone;
        
    }
    function setID($id){
        $this->id = $id;

    }
    function setNome($nome){
        $this->id = $nome;

    }
    function setCnpj($cnpj){
        $this->id = $cnpj;

    }
    function setEndereco($endereco){
        $this->id = $endereco;

    }
    function setTlefone($telefone){
        $this->id = $telefone;

    }




}




?>