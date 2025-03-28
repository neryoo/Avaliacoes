<?php

class Pessoa{
    private $nome;
    public $idade;

    function __construct($idade){
        $this->idade = $idade;
    }

    function get_nome(){
        return $this->nome;
    }

    function set_troca_nome(){
        if($this->idade >= 18){
            echo "<br>" . "Nome: " . $this->get_nome . " " . "<br>" . "Idade: " . $this->idade . " ano(s)" . "<br>" . "Situação: " . "Maior de idade, pode trocar de nome!" ;
        }else{
            echo "<br>" . "Nome: " . $this->get_nome . " " . "<br>" . "Idade: " . $this->idade . " ano(s)" . "<br>" . "Situação: " . "Menor de idade, não pode trocar de nome!" ;
        }
    }


    function fala_pessoa(){
        echo "<br>" . $this->get_nome . " falando..." . "<br>";
    }
}