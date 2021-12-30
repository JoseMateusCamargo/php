<?php
# Usada somente para construir nosso banco de dados .CSV
# Used only to build our .CSV database

$file = fopen("data_base.csv", 'wb');

for ($i = 1; $i < 10000000; $i++) {
    $item = "item_$i";
    $value = random_int(1, 9999);

    fputcsv($file, [$item, $value]);
}

fclose($file);