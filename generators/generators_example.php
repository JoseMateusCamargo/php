<?php
/*
 * Exemplo simples de uso de Generators
 * Simple example of using Generators
 */

declare(strict_types=1);

/**
 * @return Generator
 */
function getItem(): Generator
{
    for ($i = 0; $i < 100; $i++) {
        yield "Item_$i";
    }
}

foreach (getItem() as $key => $value) {
    echo "{$key} -> {$value}" . \PHP_EOL;
}