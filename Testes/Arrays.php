<?php
// VARRER ARRAY ASSOCIATIVO
$arrayAssoc = ["MARCA" => "RENAULT", "MODELO" => "SANDERO GT LINE"];

foreach ($arrayAssoc as $i => $value) {

    print_r($i . ": " . $value . "</br>");
}

//VARRER ARRAY NORMAL

$array = [1, 2, 3];

for ($i = 0; $i < count($array); $i++) {

    print_r("Indice: " . $i . " Valor: " . $array[$i] . "</br>");
}
