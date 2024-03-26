<?php
//Primeiro contador
$f = 1;

while($f <= 10) {
    echo "Loop Externo $f <br>";

//segundo contador
$q = 1;

while($q <= 5) {
    echo "Loop Interno $q <br>";
    $q++;
} 
    $f++;
}