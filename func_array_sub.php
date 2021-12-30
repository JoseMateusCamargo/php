<?php
# Simple function to subtract value from two arrays with the same key

function sub_array($arr1, $arr2)
{
    foreach ($arr2 as $key => $value) {
        if (array_key_exists($key, $arr1)) {
            $arr1[$key] -= $value;
        } else {
            $arr1[$key] = -$value;
        }
    }
    return $arr1;
}

$a1 = array(
    'one' => 3,
    'second' => 2,
    'third' => 1,
    'fourth' => 3
);
$a2 = array(
    'one' => 2,
    'second' => 2,
    'fifth' => 1
);

print_r(sub_array($a1, $a2));