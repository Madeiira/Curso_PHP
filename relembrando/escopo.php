<?php

//Escopos -> Variações de funcionalidades das variáveis 

/*
 *
 * Local      -> Dentro de funções especifica.
 * Static     -> Dentro de funções porém o valor permanece o mesmo entre chamadas da função  (Não é muito usada)
 * Global     -> Fora de funções (não pode ser acessada dentro de funções, a não ser pela instrução global $var)
 * Paramêtros -> Variáveis passadas dentro do ($var) de uma função
 *
 */

// Local e Global

$var = 1; // global

function funcao(){
    
    $var = 10;
    echo "Local: ". $var;

}

funcao();

echo "<br>";

 echo "Global antes: ". $var;

echo "<br>";

function funcaoGlobal(){

    global $var;

    $var = 2;

    echo "Global Dentro: ". $var;
}

funcaoGlobal();

echo "<br>";

echo "Global Depois: ". $var;

 //Estática Não é muito usada
 function functionNoStatic(){

    $local = 0;
    echo $local++;
    
}
echo "<br>Nao estatico <br>";
functionNoStatic();
echo "<br>";
functionNoStatic();
echo "<br>";

function functionStatic(){

    static $local = 0;
    echo $local++;
 
}
echo "estatico <br>";

functionStatic();
echo "<br>";
functionStatic();
echo "<br>";


//Variaveis de parametro

function soma($a, $b){

    echo "Soma= " . $a + $b;

}

soma(1,2);