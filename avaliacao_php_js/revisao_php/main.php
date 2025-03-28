<?php

include_once("Pessoa.php");
include_once("Professor.php");
include_once("Aluno.php");

$pessoa1 = new Pessoa(23) ;
$pessoa1->get_nome= "Sabrina";
$pessoa1->set_troca_nome() . "<br>";
$pessoa1->fala_pessoa() . "<br>";


$prof1 = new Professor(35);
$prof1->get_nome = "Wagner";
$prof1->set_troca_nome(). "<br>";
$prof1->fala_pessoa() . "<br>";

$al1 = new Aluno(15);
$al1->get_nome = "Enzo";
$al1->set_troca_nome() . "<br>";
$al1->fala_pessoa() . "<br>";

