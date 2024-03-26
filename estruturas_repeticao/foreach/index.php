<?php

$nomes = ["Fernando","Felipe","Gustavo","Gabriel","Guilherme"];

foreach($nomes as $nome){
    echo "O nome do indice atual é $nome <br>";
    if($nome == "Gustavo"){
        echo " $nome: Opa <br>";
    } 
}



$produtos = ["Xbox Series X","Prcessador Ryzen 9 9590X","Teclado Corsair 60% Switch: Purple","SSD NVMe.2 1TB","Headset Logitech ASTRO-50 Gaming","Monitor LG ULTRA GEAR 27 Polegadas 144Hz, 1ms, Tela Ips."];

foreach ($produtos as $itens) {
    echo " Produtos disponiveis á venda: $itens <br><br>";

    if ($itens == "Headset Logitech ASTRO-50 Gaming") {
        echo "Este produto esta em PROMOÇÂO!! <br>";
    }
    if ($itens == "Teclado Corsair 60% Switch: Purple") {
        echo " Produto em mega promoção <br>"; 
    }
}





?>