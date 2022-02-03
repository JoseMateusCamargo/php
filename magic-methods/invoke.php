<?php

class Logger
{
    # O método __invoke() é chamado quando um script tenta chamar um objeto como uma função.
    # Documentation: https://www.php.net/manual/pt_BR/language.oop5.magic.php#object.invoke
    public function __invoke($message)
    {
        echo strtoupper($message);
    }
}

$log = new Logger();
$log('Hello World'); // Output: HELLO WORLD