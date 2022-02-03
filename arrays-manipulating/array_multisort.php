<?php
# array_multisort — Ordena múltiplos arrays ou arrays multidimensionais
# ref: https://www.php.net/manual/pt_BR/function.array-multisort.php

$array[] = array('name' => 'Dupont', 'age' => 72);
$array[] = array('name' => 'Albert', 'age' => 11);
$array[] = array('name' => 'Durand', 'age' => 56);
$array[] = array('name' => 'Michel', 'age' => 52);
$array[] = array('name' => 'Dupont', 'age' => 36);
$array[] = array('name' => 'Plutot', 'age' => 27);

# Sort by name ascending
$columns = array_column($array, 'name');
array_multisort($columns, SORT_ASC, $array);
print_r($columns);

# Sort by age descending
$columns = array_column($array, 'age');
array_multisort($columns, SORT_DESC, $array);
print_r($columns);

# Sort by name ascending, then by age descending
$array[] = array('name' => 'Durand', 'age' => 57);
$columns_1 = array_column($array, 'name');
$columns_2 = array_column($array, 'age');
$new = array_multisort($columns_1, SORT_ASC, $columns_2, SORT_DESC, $array);
print_r($columns_2);