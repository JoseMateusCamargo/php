<?php

$array = [
    ['date' => '2021-05-25', 'site' => 'Google', 'visits' => '6,000', 'account' => '255'],
    ['date' => '2021-05-25', 'site' => 'Google', 'visits' => 600, 'account' => '45'],
    ['date' => '2021-05-25', 'site' => 'Facebook', 'visits' => 600, 'account' => '75'],
    ['date' => '2021-05-24', 'site' => 'Google', 'visits' => 600, 'account' => '88'],
    ['date' => '2021-05-24', 'site' => 'Facebook', 'visits' => 1600, 'account' => '45'],
    ['date' => '2021-05-24', 'site' => 'Facebook', 'visits' => 700, 'account' => '4'],
];

foreach ($array as $subarray) {
    $tempKey = $subarray['site'] . $subarray['date'];  // this is the compound value
    $subarray['visits'] = str_replace(',', '', $subarray['visits']); // get rid of meddlesome comma
    if (isset($result[$tempKey])) {
        $result[$tempKey]['visits'] += $subarray['visits'];
        $result[$tempKey]['account'] += $subarray['account'];
    } else {
        $result[$tempKey] = $subarray;
    }
}

// Dump result
echo "<pre>" . var_export(array_values($result), true) . "</pre>";