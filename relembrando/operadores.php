<?php

// Expressão -> instrução de código 
// EX: Soma, Baskhara, impressão de texto, regras de negocio, login

// Operadores -> Recursos para compor expressões
// EX: < , > , >= , == , = , + , *, **


// Ordem dos operadores é cfe a matematica
// 2 + 2 * 6 = 14

function contaDefault($a, $b, $c){

    $contaDefault = $a + $b * $c;
    echo "Conta default: ". $contaDefault;

}

contaDefault(2,2,6);

echo "<br>";

function contaDif($a, $b, $c){

    $contaDif = ($a + $b) * $c;
    echo "Conta dif: ". $contaDif;

}

contaDif(2,2,6);
echo "<br>";

//AUTOCAST

function autoCast($var1,$var2){

    echo $divisao = $var1 / $var2; //ceil() para arredondar para cima
    echo "<br>";

}


autoCast(5,2);

function getTypee($var1,$var2){

    echo $expressao = $var1 * $var2;
    echo "<br>";

    echo "gettype: ". gettype($expressao);
    echo "<br>";

}

getTypee("5",12);



//OPERADOR DE MODULO

function operadorModulo($var1,$var2){

    echo "Modulo: ". $modulo = $var1 % $var2;
    echo "<br>";

}

operadorModulo(6,2);

//Operador de exponenciação

function operadorExponenciacao($var1,$var2){


    echo "Exponenciação: ". $exponenciacao = $var1 ** $var2;
    echo "<br>";

}

operadorExponenciacao(5,2);