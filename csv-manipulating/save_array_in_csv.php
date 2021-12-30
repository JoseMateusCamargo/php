<?php

function saveArrayCsv(array $data, string $filename)
{
    $f = fopen($filename, 'wb');
    $fields = array_keys((array)$data[0]); // Headers

    fputcsv($f, $fields, ',');

    foreach ($data as $key) {
        fputcsv($f, (array)$key, ',');
    }

    fclose($f);
}