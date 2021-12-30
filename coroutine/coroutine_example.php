<?php
# ref: https://www.php.net/manual/pt_BR/function.rewind.php
# ref: https://www.php.net/manual/pt_BR/function.next.php

/**
 * @return Generator
 */
function service(): Generator
{
    for ($i = 0; $i < 5; $i++) {
        echo "Service: $i" . PHP_EOL;
        yield;
    }
}

$generator = service();
# rewind — Reinicializa a posição do ponteiro de arquivos para o início
$generator->rewind();

for ($i = 0; $i < 6; $i++) {
    echo "Scheduler: $i" . PHP_EOL;
    # next — Avança o ponteiro interno de um array
    $generator->next();
}