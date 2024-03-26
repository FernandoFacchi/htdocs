<?php

if (5 > 2) {
    echo "5 > 2 primeira condição 'if' <br>";
    if(5 < 4) {
       
    } else {
        echo "5 < 4 ", "condição else aplicada <br>";
    }
} else {

}

if (10 == 10) {
    echo " 10 == 10 Condição if verdadeira <br>";
    if(3>= 4) {
        echo "if aplicado como verdadeiro";
    } else {

    }
} else {

}

if (9 < 2) {
    
    echo "if aplicado a condição";
    
    if( 1 == 1){

        echo "condição else aplicada";

    } else{

    }
}else {

}
$n1 = 6;
$n2 = 8;
$if = "condição If";
$else = "condição else";
if($n1 < $n2){

    echo "$if <br>";
    if($n2 == $n1) {
        
        echo "$if ";
    }else {
        echo "$else";
    }
}else {
    echo "$else";
}

?>