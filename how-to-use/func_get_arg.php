<?php
# func_get_arg — Retorna um item para uma lista de argumentos
# ref: https://www.php.net/manual/pt_BR/function.func-get-arg.php

function exampleOne()
{
    $result = func_get_arg(0) + func_get_arg(1);
    echo $result . "\n";
}

exampleOne(2, 1);


function exampleSecond()
{
    $list = func_get_args();
    $contd = func_num_args();
    $total = 0;

    for ($x = 0; $x < $contd; $x++) {
        $total += $list[$x];
    }
    echo $total . "\n";
}

exampleSecond(1, 2, 3, 4, 5, 6);


function exampleThird()
{
    $list = func_get_args();
    $total = 0;

    foreach ($list as $item) {
        $total += $item;
    }
    echo $total . "\n";
}

exampleThird(1, 2, 3, 4, 5, 6);