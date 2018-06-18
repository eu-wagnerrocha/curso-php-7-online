<?php

//Array super global

$nome = $_GET["q"];

echo '<br>';

$nome = (int)$_GET["q"];

//var_dump($nome);

//Retorna o IP do usuário
//$ip = $_SERVER["REMOTE_ADDR"];

//Retorno nome do endereço absoludo na url
$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;






















?>