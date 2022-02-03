<?php
# array_filter — Filtra elementos de um array utilizando uma função callback
# ref: https://www.php.net/manual/pt_BR/function.array-filter.php

$list = [1, 2, 3, 4, 5];

$f = static function ($x) {
    return $x < 3;
};

$list_proc = array_filter($list, $f);

print_r($list_proc);