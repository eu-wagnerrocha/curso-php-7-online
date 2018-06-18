<?php

//Escopo de variável


$nome = "Wagner";

function teste() {

    global $nome;
    echo $nome;
}

teste();










?>