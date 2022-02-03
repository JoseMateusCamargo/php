<?php

/**
 * @return array
 */
function getArr(): array
{
    return [
        ['date' => '2021-05-25', 'site' => 'Google', 'visits' => '6,000', 'account' => '255'],
        ['date' => '2021-05-25', 'site' => 'Google', 'visits' => 600, 'account' => '45'],
        ['date' => '2021-05-25', 'site' => 'Facebook', 'visits' => 600, 'account' => '75'],
        ['date' => '2021-05-24', 'site' => 'Google', 'visits' => 600, 'account' => '88'],
        ['date' => '2021-05-24', 'site' => 'Facebook', 'visits' => 1600, 'account' => '45'],
        ['date' => '2021-05-24', 'site' => 'Facebook', 'visits' => 700, 'account' => '4'],
    ];
}

$array = getArr();

/**
 * Function that groups an array of associative arrays by some key.
 *
 * @param {String} $key Property to sort by.
 * @param {Array} $data Array that stores multiple associative arrays.
 */
function groupBy($key, $data): array
{
    $result = array();

    foreach ($data as $val) {
        if (array_key_exists($key, $val)) {
            $result[$val[$key]][] = $val;
        } else {
            $result[""][] = $val;
        }
    }

    return $result;
}

// Group data by the "site" key
$byGroup = groupBy("site", $array);

// Dump result
echo "<pre>" . var_export($byGroup, true) . "</pre>";