<?php

function controleIF($var1, $var2, $var3)
{

    if ($var1 > $var2 && $var3 == 0) {
        echo "True";
    } else {
        echo "False";
    }

    if ($var1 > $var2 && $var3 == 0) {
        echo "True";
    } else if ($var2 == 2) {
        echo "Else If";
    }

    if ($var1 > $var2) {
        if ($var3 == 0) {
            echo "True IF Aninhado";
        }else{
            echo "False IF Aninhado";
        }
    }
}

function controleSwitch($var1){
    

    switch($var1){

        case 0:
            echo "Valor 0";
            break;
        case 1:
            echo "Valor 1";
            break;

    }


}
