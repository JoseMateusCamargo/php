<?php
// Generate CSV File/Download from Array

$results = [
    0 => ["name" => "name one", "email" => "one@br", "gender" => "Male"],
    1 => ["name" => "name second", "email" => "second@br", "gender" => "Female"],
    2 => ["name" => "name third", "email" => "third@br", "gender" => "Female"],
];

$file = 'data.csv';

header("Content-type: text/csv");
header("Content-Disposition: attachment; filename=$file");

$output = fopen("php://output", 'wb');
$header = array_keys($results[0]);

fputcsv($output, $header);

foreach ($results as $row) {
    fputcsv($output, $row);
}

fclose($output);