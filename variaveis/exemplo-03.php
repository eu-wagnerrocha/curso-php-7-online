<?php
//8 Tipos de dados em PHP divididos em 3 grupos


//1-Básico

//Strings
$nome = "Wagner Rocha";
$site = 'www.wagnerrocha.net';

//Flutuantes
$ano = 2018;
$salario = 150.000;
$bloqueado = false;

//2-Composto

//Array
$frutas = array("Abacaxi", "Laranja", "Limão");
echo $frutas[0];
$nascimento = new DateTime();
var_dump($nascimento);

//3-Especiais

$arquivo = fopen("exemplo-02.php" , "r");

var_dump($arquivo);

$nulo = null;
$vaio = "";


?>