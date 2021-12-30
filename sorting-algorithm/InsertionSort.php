<?php

namespace App\Models\Classification;


/**
 * Class InsertionSort
 * @package App\Models\Classification
 */
class InsertionSort
{


    /**
     * @param array $data
     * @return array
     */
    public function insertionSort(array $data): array
    {
        foreach ($data as $i => $i_value) {
            $val = $i_value;
            $j = $i - 1;

            while ($j >= 0 && $data[$j] > $val) {
                $data[$j + 1] = $data[$j];
                $j--;
            }

            $data[$j + 1] = $val;
        }

        return $data;
    }
}

$run = new InsertionSort();

$data = [3, 0, 2, 5, -1, 4, 1, 33, 24, -2, 3];
echo "Original Array: " . implode(', ', $data) . PHP_EOL;
echo "Sorted Array: " . implode(', ', $run->insertionSort($data)) . PHP_EOL;