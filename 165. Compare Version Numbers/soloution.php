<?php

class Solution
{

    /**
     * @param String $version1
     * @param String $version2
     * @return Integer
     */
    function compareVersion($version1, $version2)
    {
        while (!empty($version1) || !empty($version2)) {
            $sp1 = strpos($version1, '.');
            $s1 = intval($sp1 ? substr($version1, 0, $sp1) : $version1);
            $version1 = $sp1 ? substr($version1, $sp1 + 1) : '';

            $sp2 = strpos($version2, '.');
            $s2 = intval($sp2 ? substr($version2, 0, $sp2) : $version2);
            $version2 = $sp2 ? substr($version2, $sp2 + 1) : '';

            if ($s1 > $s2)
                return 1;
            if ($s1 < $s2)
                return -1;
        }

        return 0;
    }
}

$tc = [
    ['0','1'],
    ['1.001', '1.01'],
];
$s = new Solution();
foreach ($tc as $t) {
    echo $s->compareVersion($t[0], $t[1]) . PHP_EOL;
}
