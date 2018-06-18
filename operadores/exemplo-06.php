<?php

//Operador de Comparação NULL Collece PHP7
//varre as variáveis até achar um valor diferente de NULL;


$a = null;

$b = 30;

$c= 23;


var_dump($a ?? $b ?? $c);




?>