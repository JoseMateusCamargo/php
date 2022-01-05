<?php
/*
 * Begin license text.
 * Copyright (c) 2022. Mateus
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

class Prim
{
    public function primMST(array $graph): void
    {
        $parent = []; // Array to store the MST
        $key = []; // used to pick minimum weight edge
        $visited = []; // set of vertices not yet included in MST
        $len = count($graph);

        // Initialize all keys as MAX
        for ($i = 0; $i < $len; $i++) {
            $key[$i] = PHP_INT_MAX;
            $visited[$i] = false;
        }

        $key[0] = 0;
        $parent[0] = -1;

        // The MST will have V vertices
        for ($count = 0; $count < $len - 1; $count++) {

            // Pick the minimum key vertex
            $minValue = PHP_INT_MAX;
            $minIndex = -1;

            foreach (array_keys($graph) as $v) {
                if ($visited[$v] === false && $key[$v] < $minValue) {
                    $minValue = $key[$v];
                    $minIndex = $v;
                }
            }
            $u = $minIndex;

            // Add the picked vertex to the MST Set
            $visited[$u] = true;

            for ($v = 0; $v < $len; $v++) {
                if ($graph[$u][$v] !== 0 && $visited[$v] === false &&
                    $graph[$u][$v] < $key[$v]) {
                    $parent[$v] = $u;
                    $key[$v] = $graph[$u][$v];
                }
            }
        }

        // Print MST
        echo "Edge\tWeight\n";

        $minimumCost = 0;

        for ($i = 1; $i < $len; $i++) {
            echo $parent[$i] . " - " . $i . "\t" . $graph[$i][$parent[$i]] . "\n";
            $minimumCost += $graph[$i][$parent[$i]];
        }

        echo "Minimum cost: $minimumCost \n";
    }
}

$run = new Prim();

$graph = [
    [0, 3, 1, 6, 0, 0],
    [3, 0, 5, 0, 3, 0],
    [1, 5, 0, 5, 6, 4],
    [6, 0, 5, 0, 0, 2],
    [0, 3, 6, 0, 0, 6],
    [0, 0, 4, 2, 6, 0]
];

$run->primMST($graph);