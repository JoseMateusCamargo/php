<?php

function saveObjectCsv(object $data, string $filename)
{
    $fp = fopen($filename, 'wb');

    foreach ($data as $fields) {
        fputcsv($fp, get_object_vars($fields));
    }

    fclose($fp);
}