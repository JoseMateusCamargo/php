<?php

namespace App\Models\Classification;


/**
 * Class Dijkstra
 * @package App\Models\Classification
 */
class Dijkstra
{


    /**
     * @param array $graph_array
     * @param string $source
     * @param string $target
     * @return array
     */
    public function dijkstra(array $graph_array, string $source, string $target): array
    {
        $vertices = $neighbours = [];

        foreach ($graph_array as $edge) {
            array_push($vertices, $edge[0], $edge[1]);
            $neighbours[$edge[0]][] = array("end" => $edge[1], "cost" => $edge[2]);
            $neighbours[$edge[1]][] = array("end" => $edge[0], "cost" => $edge[2]);
        }

        $vertices = array_unique($vertices);

        foreach ($vertices as $vertex) {
            $dist[$vertex] = INF;
            $previous[$vertex] = NULL;
        }

        $dist[$source] = 0;
        $Q = $vertices;

        while (count($Q) > 0) {

            // TODO - Find faster way to get minimum
            $min = INF;
            foreach ($Q as $vertex) {
                if ($dist[$vertex] < $min) {
                    $min = $dist[$vertex];
                    $u = $vertex;
                }
            }

            $Q = array_diff($Q, array($u));
            if ($dist[$u] === INF || $u === $target) {
                break;
            }

            if (isset($neighbours[$u])) {
                foreach ($neighbours[$u] as $arr) {
                    $alt = $dist[$u] + $arr["cost"];
                    if ($alt < $dist[$arr["end"]]) {
                        $dist[$arr["end"]] = $alt;
                        $previous[$arr["end"]] = $u;
                    }
                }
            }
        }

        $path = array();
        $u = $target;

        while (isset($previous[$u])) {
            array_unshift($path, $u);
            $u = $previous[$u];
        }

        array_unshift($path, $u);

        return $path;
    }
}

$dijkstra = new Dijkstra();

$graph_array = [
    ["a", "b", 7],
    ["a", "c", 9],
    ["a", "f", 14],
    ["b", "c", 10],
    ["b", "d", 15],
    ["c", "d", 11],
    ["c", "f", 2],
    ["d", "e", 6],
    ["e", "f", 9]
];

$path = $dijkstra->dijkstra($graph_array, "a", "e");
echo "Path is: " . implode(", ", $path) . PHP_EOL; // Output => Path is: a, c, f, e