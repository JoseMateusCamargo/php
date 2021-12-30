<?php
# Spaceship operators : O operador <=> é utilizado para fazer comparações combinadas.
# ref: https://www.php.net/manual/en/language.operators.comparison.php

/*
Retorna 0 se os valores de ambos os lados são iguais.
Retorna 1 se o valor à esquerda é maior.
Retorna -1 se o valor à direita é maior.

echo 1 <=> 1; // 0
echo 3 <=> 4; // -1
echo 4 <=> 3; // 1
 */

foreach (range(0, 9) as $row) {
    $x = random_int(0, 9);
    $rel = $row <=> $x;

    echo "<pre>" . "v=$row <=> x=$x is $rel \n" . "</pre>";
}