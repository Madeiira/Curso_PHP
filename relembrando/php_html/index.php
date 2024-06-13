<?php

    include_once "backend.php";

?>

<html> 

    <h1> Seja bem vindos ao meu site </h1>
    <p>  Veja as linguagens com que eu (<?= $nome; ?>) já atuei  </p>

    <h2> Linguagens</h2>
    <ul>
        <?php foreach($linguagens as $linguagem): ?>
            
            <li> <?=  strtoupper($linguagem) ?> </li>

        <?php endforeach ?>
    </ul>



</html>

