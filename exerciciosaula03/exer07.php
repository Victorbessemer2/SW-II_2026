<?php
function somaArray2($array) {
    $soma = 0;

    foreach ($array as $valor) {
        $soma += $valor;
    }

    return $soma;
}
?>