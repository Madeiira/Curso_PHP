<?php

// Estrutura While

function estruturaWhile($var1){


    while($var1 <= 10){
        if ($var1 % 2 !=0){
        echo "Impares: ".$var1; 
        echo "<br>";
        }
        $var1++;
    }

}

// estruturaWhile(0);


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

// estruturaWhileArr([1,2,3,4,5,6,7,8,9,10]);

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

// estruturaWhileBreak([1,2,3,4,5,"String",7,8,9,10]);
// echo "<br>";

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

// estruturaWhileAninahdo();


function estruturaWhileContinue(){

    $i = 10;
    while($i >= 0){
        if ($i % 2 != 0){
            echo "Continue Impares: ".$i;
            echo "<br>";
            $i--;
        }
        
        echo "Fora do continue Pares:". $i;
        echo "<br>";
        $i--;
    }

}

// estruturaWhileContinue();


function estruturaDoWhile(){

    $i = 0;

    do{
        echo "Testando While ".$i;
        echo "<br>";
        $i++;
    }while($i <= 10);

}

// estruturaDoWhile();


function estruturaFor($arr1){

    for ($i=0; $i < count($arr1); $i++) { 
        
        if ($arr1[$i] % 2 == 0){
            echo "Numero par do array". $arr1[$i];
            echo "<br>";
        }

    }
    
}

estruturaFor([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]);

function estruturaForArrayPush($arrayTamanho){
    
    $arr1 = [];


    for ($i=1; $i <= $arrayTamanho; $i++) { 
        
        array_push($arr1, $i);
        
    }
    print_r($arr1);
    
}

estruturaForArrayPush(10);