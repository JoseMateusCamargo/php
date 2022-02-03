<?php
# Setting default argument values for function parameters

function login($user = "username", $pass = "098")
{
    echo PHP_EOL;
    echo $user . PHP_EOL;
    echo $pass . PHP_EOL;
}

login();
login('name01');
login('name01', 'master');