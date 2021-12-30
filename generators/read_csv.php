<?php
require 'Generators.php';

$generator = new Generators('data_base.csv');
$data = $generator->read();

foreach ($data as $item) {
    printf('%s with %d cost %s', $item[0], $item[1], PHP_EOL);
}


# Test
# Fatal error: Allowed memory size of 2147483648 bytes exhausted (tried to allocate 268435464 bytes)
/*
$data = [];

$csv_file = fopen('data_base.csv', 'rb');

while (!feof($csv_file)) {
    $data[] = fgetcsv($csv_file);
}

foreach ($data as $item) {
    printf('%s with %d cost %s', $item[0], $item[1], PHP_EOL);
}
*/