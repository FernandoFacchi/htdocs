<?php

class pessoa {
    function falar() {
        echo "Olá, Mundo!";
    }
}

$programador = new pessoa();

$programador -> nome = "Fernando";

echo $programador -> nome;
echo "<br>";

$programador -> falar();