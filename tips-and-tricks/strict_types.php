<?php
# Scalar type declarations

# Use strict_types to force only that use of int and try to declare '100' in variable like example 2
declare(strict_types=1);

function mean(int ...$array)
{
    $total = array_sum($array) / count($array);
    echo $total;
}

mean(5, 5, 6, 100);
echo PHP_EOL;

# Example 2
//mean(5, 5, 6, '100');