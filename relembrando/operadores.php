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

$var1 = 5.9;
$var2 = 2;

echo $divisao = ceil($var1 / $var2);

echo "<br>";

echo $divisao = $var1 / $var2;

$expressao = "5" * 12;

echo "<br>";

echo "Resultado: ". $expressao;

echo "<br>";

echo "gettype: ". gettype($expressao);


//OPERADOR DE MODULO

