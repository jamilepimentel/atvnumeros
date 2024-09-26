<?php

function capturarNumeros($dados) {
    $numeros = [];

    for ($i = 1; $i <= 10; $i++) {
        $numeros[] = intval($dados["numero$i"]);
    }

    return $numeros;
}

function contarNegativos($numeros) {
    $negativos = 0;

    foreach ($numeros as $numero) {
        if ($numero < 0) {
            $negativos++;
        }
    }

    return $negativos;
}

function contarPositivos($numeros) {
    $positivos = 0;

    foreach ($numeros as $numero) {
        if ($numero > 0) {
            $positivos++;
        }
    }

    return $positivos;
}

function contarPares($numeros) {
    $pares = 0;

    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $pares++;
        }
    }

    return $pares;
}

function contarImpares($numeros) {
    $impares = 0;

    foreach ($numeros as $numero) {
        if ($numero % 2 != 0) {
            $impares++;
        }
    }

    return $impares;
}

$numeros = capturarNumeros($_POST);

$negativos = contarNegativos($numeros);
$positivos = contarPositivos($numeros);
$pares = contarPares($numeros);
$impares = contarImpares($numeros);

echo "Quantidade de números negativos: " . $negativos . "<br>";
echo "Quantidade de números positivos: " . $positivos . "<br>";
echo "Quantidade de números pares: " . $pares . "<br>";
echo "Quantidade de números ímpares: " . $impares . "<br>";
?>