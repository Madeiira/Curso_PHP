<?php

//Escopos -> Variações de funcionalidades das variáveis 

/*
*
* Local      -> Dentro de funções especifica.
* Static     -> Dentro de funções porém o valor permanece o mesmo entre chamadas da função  
* Global     -> Fora de funções (não pode ser acessada dentro de funções)
* Paramêtros -> Variáveis passadas dentro do ($var) de uma função
*
*/

// LOCAL e GLOBAL

$var = 1; // global
echo "Global: ". $var;

function funcao(){
    echo "<br>";
    $var = 10;
    echo "Local: ". $var;

}

funcao();