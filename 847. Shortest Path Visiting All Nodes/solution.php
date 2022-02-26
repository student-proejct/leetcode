<?php

class Solution
{

    /**
     * @param Integer[][] $graph
     * @return Integer
     */
    function shortestPathLength($graph)
    {
        $paths = [];
        foreach ($graph as $n => $v) {
            $visited = [];
            $path = [];
            $this->traversal($graph, $n, -1, $visited, $path);
            var_dump($path);
            $paths[] = count($path) - 1;
        }

        return min($paths);
    }

    function traversal($graph, $node, $beforeNode = -1, &$visited = [], &$path = [])
    {
        if (count($visited) === count($graph))
            return;

        $visited[$node] = true;
        $path [] = $node;

        //echo "$node - ";

        $n = 0;

        while (isset($visited[$graph[$node][$n]]) && $n < count($graph[$node]) - 1)
            $n++;
        if ($n > count($graph[$node]) - 1)
            return;
        $this->traversal($graph, $graph[$node][$n], $node, $visited, $path);

    }
}

$testCases = [
    //[[1], [2], [3], [0]],
    //[[1, 2, 3], [0], [0], [0]],
    [[1], [0, 2, 4], [1, 3, 4], [2], [1, 2]]
];

$s = new Solution();
foreach ($testCases as $case) {
    echo $s->shortestPathLength($case) . PHP_EOL;
}

