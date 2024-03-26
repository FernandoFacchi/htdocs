 <?php

$num = 0;
$name = "Gustavo";
// CONTADOR; CONDIÇÃO; INCREMENTO/DECREMENTO
for($num = 0; $num < 10; $num++) {

    if($num == 3){
        echo "$name <br>";
    }

    if($num == 7){
        break;
    }

    echo "testando for $num <br>";
}


$mts = 100;
$metade = "Esta na metade ";

for($mts = 100; $mts > 0; $mts--){

    if($mts == 50) {

        echo "$metade || $mts <br>";
    continue;
    }

    if($mts == 25) {
        break;
    }

    echo "metragem: $mts <br>";
}
