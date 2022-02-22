<?php
class Solution {

    /**
     * @param Integer[][] $intervals
     * @return Integer
     */
    function removeCoveredIntervals($intervals) {
        $len = count($intervals);

        for($i = 0 ; $i < $len - 1 ; $i++){
            for($j = $i + 1; $j < $len; $j++){
                if(!$intervals[$i] || !$intervals[$j])
                    continue;

                if($intervals[$i][0] <= $intervals[$j][0] && $intervals[$i][1] >= $intervals[$j][1])
                    unset($intervals[$j]);
                if($intervals[$j][0] <= $intervals[$i][0] && $intervals[$j][1] >= $intervals[$i][1])
                    unset($intervals[$i]);

            }
        }

        return count($intervals);
    }
}
