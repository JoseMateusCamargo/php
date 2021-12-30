<?php
# array_reduce — Reduz um array para um único valor através de um processo iterativo via função callback
# ref: https://www.php.net/manual/pt_BR/function.array-reduce.php

$prod = [
    ['id' => 1, 'name' => 'name 01', 'value' => 129.99],
    ['id' => 2, 'name' => 'name 02', 'value' => 122.90],
    ['id' => 3, 'name' => 'name 03', 'value' => 242.20]
];

$total = array_reduce($prod, static function ($value, $prod) {
    $value += $prod['value'];
    return $value;
});

echo $total;