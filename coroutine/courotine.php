<?php
# Cooperative multitasking using coroutines (in PHP!)
#ref: https://www.npopov.com/2012/12/22/Cooperative-multitasking-using-coroutines-in-PHP.html

declare(strict_types=1);

require 'Service.php';
require 'Scheduler.php';

/**
 * @return Generator
 */
$task1 = static function () {
    for ($i = 1; $i <= 4; ++$i) {
        echo "This is task 1 iteration $i.\n";

        yield;
    }
};

/**
 * @return Generator
 */
$task2 = static function () {
    for ($i = 1; $i <= 8; ++$i) {
        echo "This is task 2 iteration $i.\n";

        yield;
    }
};

$scheduler = new Scheduler();

$scheduler->schedule(new Service($task1()));
$scheduler->schedule(new Service($task2()));

$scheduler->run();