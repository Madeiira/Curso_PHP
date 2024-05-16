<?php

//Variável da variável

$var = 1;

echo "Variável original: ". $var;

$$var = "Dois";


echo "<br>Variável da Variável: ".$$var;

//Variável de Referência

$x = 1;

$y =& $x;

echo "<br><br>";
echo "X= ". $x ." Y= ". $y;

$x = 100;
echo "<br><br>";
echo " Mudando a referencia<br>";
echo "X= ". $x ." Y= ". $y;

$y = 10;
echo "<br><br>";
echo " Mudando a referenciada<br>";
echo "X= ". $x ." Y= ". $y;



