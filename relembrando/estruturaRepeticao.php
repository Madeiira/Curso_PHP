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


function estruturaWhileArr($arr1){

    $count1 = count($arr1);
    $x = 0;
    echo "Contagem Array <br>";
    while($x < $count1){
        echo "Valor: ". $arr1[$x];
        echo "<br>";
        $x++;
    }

}

estruturaWhileArr([1,2,3,4,5,6,7,8,9,10]);