<?php
# range — Create an array containing a range of elements
# ref: https://www.php.net/manual/en/function.range.php

$x = range(11, 1, 4);
$y = range("a", "z", 2);

print_r($y);
print_r($x);

$numbers = range(5, 10);

// use & (&$value) like pointer (pass reference, not a copy the value)
foreach ($numbers as $key => &$value) {
    $value *= 10;
    echo $value . "\n";
}

print_r($numbers);