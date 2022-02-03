<?php
#array_map — Aplica uma função em todos os elementos dos arrays dados
# ref: https://www.php.net/manual/pt_BR/function.array-map.php

$list = [1, 2, 3, 4, 5];

$cube = static function ($x) {
    return $x * $x * $x;
};

$result = array_map($cube, $list);
print_r($result);


// using map to make new array
$prods = [
    ['id' => 1, 'name' => 'name 01', 'value' => 129.99],
    ['id' => 2, 'name' => 'name 02', 'value' => 122.90],
    ['id' => 3, 'name' => 'name 03', 'value' => 242.20]
];

$prod_map = array_map(static function ($prod) {
    if ($prod['value'] > 150) {
        $prod['value'] -= $prod['value'] * 0.5;
    }

    return $prod;
}, $prods);

var_dump($prod_map);