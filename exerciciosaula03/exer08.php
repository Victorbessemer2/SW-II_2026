<?php
function gerarAleatorios() {
    $numeros = [];

    for ($i = 0; $i < 10; $i++) {
        $numeros[] = rand(0, 100);
    }

    return $numeros;
}
?>