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
echo"<br>";
function estruturaWhileBreak($arr1){
    
    $count1 = count($arr1);
    $cont   = 0;
    echo "Procurando string no array<br>";
    while ($cont < $count1){
        if(is_string($arr1[$cont])){
            echo "String encontrada no array<br>";
            echo "String: ". $arr1[$cont] ."<br>na key: ". $cont;
            break;
        }
        echo "Varlor array: ". $arr1[$cont] ." Key:". $cont ."<br>"  ;
     $cont++;
    }

}

estruturaWhileBreak([1,2,3,4,5,"String",7,8,9,10]);


echo "<br>";

function estruturaWhileAninahdo(){
    
    $cont   = 0;
    echo "Procurando string no array<br>";
    while ($cont < 5){

        echo "loop externo $cont <br>";
        //segundo contador 
        $cont2   = 0;
        //loop aninhado
        while ($cont2 < 3){
            echo "loop interno $cont2 <br>";
            $cont2++;
        }

     $cont++;
    }

}

estruturaWhileAninahdo();


