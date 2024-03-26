<?php

echo "testing this true or false: <br>";

echo "4.8 >= 5?<br>";

if(is_bool(4.8 >= 5)) {
    echo "the expression is false";
}

if(is_bool(0)) {
    echo "number is false!";
}

echo "<br>";

if(is_bool( 0 == false)) {
    echo " 0 is considered false";
}