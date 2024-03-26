<?php

$x = 0;
$y = 10;
// Inicio do loop
while($x <= 10){
//corpo da loop    
    echo "$x <br>";
//Incremento do contador
    $x = $x + 1;
//  $x++;
//  $x = $x + 2;
}

echo "<hr>";
// Inicio do loop
while($y >= 0){
//corpo da loop
    echo "$y <br>";
//Incremento do contador
    $y = $y - 1;
//  $y = $y - 2;
//  $y--; 

}
//Inicio/Definição de sua Estrutura
while($x <= $y){
//Corpo do loop
    if($x % 2 != 0) {
        echo $x . "<br>";
    }
// Incremento do contador
    $x--;
} 
?>