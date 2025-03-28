<?php

class Aluno extends Pessoa{

    function fala_pessoa(){
        echo "<br>" . $this->get_nome . " perguntando..." . "<br>";
    }
}