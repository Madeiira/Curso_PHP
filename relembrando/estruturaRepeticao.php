<?php

// Estrutura While

function estruturaWhile($var1){


    while($var1 <= 10){
        if ($var1 % 2 !=0)
        echo "Impares: ".$var1; 
        echo "<br>";
        $var1++;
    }

}

estruturaWhile(0);