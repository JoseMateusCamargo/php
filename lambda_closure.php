<?php
# Lambdas são mais rápidas que funções criadas utilizando a função create_function.
# http://php.net/manual/en/function.create-function.php

# Funções anônimas, também conhecidas como closures, permitem a criação de funções que não tem o nome especificado.
# Documentation: https://www.php.net/manual/pt_BR/functions.anonymous.php

// [1] --------------------------------------------------- Lambda
$one = 100;
$second = 200;
echo '----------- Lambda: use & (&$value) like pointer (pass reference, not a copy the value)' . PHP_EOL;
# use & (&$value) like pointer (pass reference, not a copy the value)
$anon = static function () use (&$one, $second) {
    echo $one + $second . PHP_EOL;
    $one = 1500;
};

echo $one . PHP_EOL;
$anon();
echo $one . PHP_EOL;

echo '----------- Lambda: normal use' . PHP_EOL;
# normal use
$lambda = static function ($first, $second) {
    return $first + $second;
};

$result_lambda = $lambda(2, 3);
echo 'Lambda: ' . $result_lambda . PHP_EOL; // Output: 5

// [2] --------------------------------------------------- Closure
$config['uppercase'] = true;

$closure = static function ($message) use ($config) {
    if (isset($config['uppercase']) && $config['uppercase'] === true) {
        $message = strtoupper($message);
    }

    return $message;
};

$result_closure = $closure('Hello world');
echo 'Closure: ' . $result_closure . PHP_EOL; // Output: HELLO WORLD

// [3] --------------------------------------------------- Using Callback
// Using as a callback
function closureCallback($message, $callback)
{
    $parts = explode(' ', $message);

    return $callback($parts[0]);
}

$result_callback = closureCallback('Hello World', $closure);
echo 'Callback: ' . $result_callback . PHP_EOL; // Output: HELLO