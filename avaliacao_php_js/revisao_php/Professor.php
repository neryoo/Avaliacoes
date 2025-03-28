<?php

class Professor extends Pessoa{

    function fala_pessoa(){
        echo "<br>" . $this->get_nome . " dando aula..." . "<br>";
    }

}