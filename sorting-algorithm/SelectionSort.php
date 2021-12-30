<?php

namespace App\Models\Classification;


/**
 * Class SelectionSort
 * @package App\Models\Classification
 */
class SelectionSort
{


    /** First Example
     * @param array $data
     * @return array
     */
    public function selectionSortOne(array $data): array
    {
        for ($i = 0; $i < count($data) - 1; $i++) {
            $min = $i;
            for ($j = $i + 1, $jMax = count($data); $j < $jMax; $j++) {
                if ($data[$j] < $data[$min]) {
                    $min = $j;
                }
            }
            $data = $this->swapPositions($data, $i, $min);
        }

        return $data;
    }


    /**
     * @param array $data
     * @param $left
     * @param $right
     * @return array
     */
    public function swapPositions(array $data, $left, $right): array
    {
        $backup_old_data_right_value = $data[$right];
        $data[$right] = $data[$left];
        $data[$left] = $backup_old_data_right_value;
        return $data;
    }


    /** Second Example
     * @param array $arr
     * @param $n
     */
    public function selectionSortSecond(array &$arr, $n): void
    {
        for ($i = 0; $i < $n; $i++) {
            $low = $i;
            for ($j = $i + 1; $j < $n; $j++) {
                if ($arr[$j] < $arr[$low]) {
                    $low = $j;
                }
            }

            // swap the minimum value to $ith node
            if ($arr[$i] > $arr[$low]) {
                $tmp = $arr[$i];
                $arr[$i] = $arr[$low];
                $arr[$low] = $tmp;
            }
        }
    }
}

$run = new SelectionSort();

$first_example = [3, 0, 2, 5, -1, 4, 1, 33, 24, -2, 3];
echo "First example" . PHP_EOL;
echo "Original Array: " . implode(', ', $first_example) . PHP_EOL;
echo "Sorted Array: " . implode(', ', $run->selectionSortOne($first_example)) . PHP_EOL;

echo PHP_EOL;

$second_example = [3, 0, 2, 6, -1, 43, 1, 99, 24, -2, 3];
echo "Second example" . PHP_EOL;
echo "Original Array: " . implode(', ', $second_example) . PHP_EOL;
$run->selectionSortSecond($second_example, count($second_example));
echo "Sorted array: " . implode(', ', $second_example) . PHP_EOL;