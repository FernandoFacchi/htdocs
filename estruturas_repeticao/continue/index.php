<?php

echo "<hr>";

$numb = 15;
//Drecrimento- (Maior para o menor)

while ($numb > 0) {
    
    echo "Executando looping $numb <br>";

    if ( $numb == 6 || $numb == 8) {
    
        echo "Execução pulada $numb <br>";
        
        $numb--;
        
        continue;
    }

    if ($numb == 4 ) {

        echo "Loop finalizado em $numb Break <br>";
        
        break;
    }

    $numb--;
}