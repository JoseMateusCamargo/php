<?php
/*
 * Begin license text.
 * Copyright (c) 2021-2021. Mateus
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * End license text.
 */

/*
 * Example code for: PHP 7 Data Structures and Algorithms
 *
 * Modification: Mateus
 *
 */

namespace App\Models\Classification;

/**
 *
 */
class Kruskals
{

    private $tree = [];
    private $set = [];


    /**
     * @param array $graph
     * @return void
     */
    public function kruskal(array $graph): void
    {
        foreach ($graph as $k => $adj) {
            $this->set[$k] = [$k];
        }

        $edges = [];

        foreach ($graph as $i => $iValue) {
            for ($j = 0; $j < $i; $j++) {
                if ($iValue[$j]) {
                    $edges[$i . ',' . $j] = $iValue[$j];
                }
            }
        }

        asort($edges);

        foreach ($edges as $k => $w) {
            [$i, $j] = explode(',', $k);

            $iSet = $this->findSet($i);
            $jSet = $this->findSet($j);

            if ($iSet != $jSet) {
                $this->tree [] = ["from" => $i, "to" => $j, "cost" => $graph[$i][$j]];
                $this->unionSet($iSet, $jSet);
            }
        }

        $this->response();
    }


    /**
     * @param int $index
     * @return false|int|string
     */
    private function findSet(int $index)
    {
        foreach ($this->set as $k => $v) {
            if (in_array($index, $v, true)) {
                return $k;
            }
        }

        return False;
    }


    /**
     * @param int $i
     * @param int $j
     * @return void
     */
    private function unionSet(int $i, int $j): void
    {
        $a = $this->set[$i];
        $b = $this->set[$j];
        unset($this->set[$i], $this->set[$j]);

        $this->set[] = array_merge($a, $b);
    }


    /**
     * @return void
     */
    private function response(): void
    {
        $minimumCost = 0;

        foreach ($this->tree as $v) {
            echo "From {$v['from']} to {$v['to']} cost is {$v['cost']} \n";
            $minimumCost += $v['cost'];
        }

        echo "Minimum cost: $minimumCost \n";
    }
}

$run = new Kruskals();

$graph = [
    [0, 3, 1, 6, 0, 0],
    [3, 0, 5, 0, 3, 0],
    [1, 5, 0, 5, 6, 4],
    [6, 0, 5, 0, 0, 2],
    [0, 3, 6, 0, 0, 6],
    [0, 0, 4, 2, 6, 0]
];

$run->kruskal($graph);