<?php

namespace App\Models\Classification;


/**
 * Class QuickSort
 * @package App\Models\Classification
 */
class QuickSort
{


    /**
     * @param array $data
     * @return array
     */
    public function quickSort(array $data): array
    {
        $loe = $gt = [];

        if (count($data) < 2) {
            return $data;
        }

        $pivot_key = key($data);
        $pivot = array_shift($data);

        foreach ($data as $val) {
            if ($val <= $pivot) {
                $loe[] = $val;
            } elseif ($val > $pivot) {
                $gt[] = $val;
            }
        }
        return array_merge($this->quickSort($loe), array($pivot_key => $pivot), $this->quickSort($gt));
    }
}

$run = new QuickSort();

$data = [3, 0, 2, 5, -1, 4, 1, 33, 24, -2, 3];
echo 'Original Array : ' . implode(',', $data) . PHP_EOL;
echo 'Sorted Array : ' . implode(',', $run->quickSort($data)) . PHP_EOL;