<?php

namespace App\Models\Classification;


/**
 * Class BubbleSort
 * @package App\Models\Classification
 */
class BubbleSort
{


    /**
     * @param $data
     * @return mixed
     */
    public function bubbleSort($data)
    {
        do {
            $swapped = false;

            for ($i = 0, $c = count($data) - 1; $i < $c; $i++) {
                if ($data[$i] > $data[$i + 1]) {
                    [$data[$i + 1], $data[$i]] = array($data[$i], $data[$i + 1]);
                    $swapped = true;
                }
            }

        } while ($swapped);

        return $data;
    }
}

$run = new BubbleSort();

$data = [3, 0, 2, 5, -1, 4, 1, 33, 24, -2, 3];
echo "Original Array: " . implode(', ', $data) . PHP_EOL;
echo "Sorted Array: " . implode(', ', $run->bubbleSort($data)) . PHP_EOL;