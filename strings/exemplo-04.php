<?php

$frase = "Deus é amor, só Jesus salva.";

$palavra = "Jesus";

$q = strpos($frase, $palavra);

$texto = substr($frase, 0, $q); 

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));


var_dump($texto2);



?>