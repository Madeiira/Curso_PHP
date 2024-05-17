<?php

function controleIF($var1, $var2, $var3)
{

    if ($var1 > $var2 && $var3 == 0) {
        echo "True";
    } else {
        echo "False";
    }

    if ($var1 > $var2 && $var3 == 0) {
        echo "True";
    } else if ($var2 == 2) {
        echo "Else If";
    }

    if ($var1 > $var2) {
        if ($var3 == 0) {
            echo "True IF Aninhado";
        }else{
            echo "False IF Aninhado";
        }
    }
}

function controleSwitch($var1){
    

    switch($var1){

        case 0:
            echo "Valor 0";
            break;
        case 1:
            echo "Valor 1";
            break;
        default:
            echo "nenhum valor encontrado";

    }


}


// EXERCICIOS

function calcularDesconto($valorProduto, $categoria) {
    switch ($categoria) {
        case "eletrônicos":
            $desconto = 0.1;
            break;
        case "vestuário":
            $desconto = 0.2;
            break;
        case "alimentos":
            $desconto = 0.05;
            break;
        default:
            $desconto = 0;
            break;
    }
    
    $valorDesconto = $valorProduto * $desconto;
    $valorComDesconto = $valorProduto - $valorDesconto;
    return $valorComDesconto;
}

$valorProduto = 100;
$categoria = "vestuário";

$valorFinal = calcularDesconto($valorProduto, $categoria);
echo "Valor do produto com desconto: " . $valorFinal;


function verificarAcesso($idade, $autorizacao) {
    if ($idade >= 18 && $autorizacao) {
        return "Acesso autorizado";
    } elseif ($idade < 18) {
        return "Acesso negado. Idade mínima requerida: 18 anos";
    } elseif ($idade >= 18 && !$autorizacao) {
        return "Acesso negado. Autorização necessária";
    }
}

$idade = 20;
$autorizacao = true;

$resultado = verificarAcesso($idade, $autorizacao);
echo $resultado;


function verificarCategoria($categoria) {
    switch ($categoria) {
        case "eletrônicos":
            return "Essa categoria é de produtos eletrônicos";
        case "vestuário":
            return "Essa categoria é de produtos de vestuário";
        case "alimentos":
            return "Essa categoria é de produtos alimentícios";
        default:
            return "Categoria desconhecida";
    }
}

$categoria = "vestuário";

$mensagem = verificarCategoria($categoria);
echo $mensagem;

function compararNumeros($numero1, $numero2) {
    if ($numero1 > $numero2) {
        return "O primeiro número é maior.";
    } elseif ($numero2 > $numero1) {
        return "O segundo número é maior.";
    } else {
        return "Os números são iguais.";
    }
}

$numero1 = 10;
$numero2 = 5;

$resultado = compararNumeros($numero1, $numero2);
echo $resultado;