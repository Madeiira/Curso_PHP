<?php
/*

    EXPLODE 
STRING PARA ARRAY

Ex: ler dados de um arquivo csv, separado por , 



*/

$csv = "carro , navio , barco";

$explode = explode(",", trim($csv));

for ($i=0; $i < count($explode); $i++) { 
    echo "item: " . $explode[$i] ."<br>";
}

/*

    EXPLODE 
ARRAY PARA STRING



*/

$csv = ["carro" , "navio" , "barco"];

$implode = implode(";", $csv);

    echo "itens: " . $implode ."<br>";
