<?php

//Orientação a objetos

//Métodos -> funções . Modificar objeto

//Propriedades -> Valor do objeto

// Para criar o Objeto precisamos do molde
//Ex:


class Pessoa{
    
    public $idade;

    function nome($nome){
        echo $nome;
    }
    
    function falar() {
        echo "Falando";
    }

}
//Instanciando Classe
$gabriel = new Pessoa();

//Métodos
$gabriel->nome("Gabriel ");
$gabriel->falar();

//Propriedades
$gabriel->idade = 22;

echo "<br>Idade: " . $gabriel->idade;