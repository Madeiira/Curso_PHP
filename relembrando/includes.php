<?php

// Iniciando Relembrando Includes

// Método include "includes/php/exemplo.php";

// echo "<p> após o include </p> <br> $var1"; 

// INCLUDE NAO GERA ERRO FATAL APENAS WARNING
// para nao notificar o warning 
// encontre o php.ini
// Localize no arquivo o seguinte código: error_reporting = E_ALL
// Substitua por: error_reporting = E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED
// Salve as alterações e reinicie o PHP + APACHE.

// PARA WORDPRESS TEM OUTRA FORMA

// Método Require

// Ele gera fatal error

require "includes/php/require_functions.php";
require "includes/html/require_html.html";

exemploRequire("Texto Require PHP Function");



