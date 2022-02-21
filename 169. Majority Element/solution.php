<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $res = [];
        $more_repeat_key = null;
        $more_repeat_count = 0;
        foreach($nums as $n){
            if(isset($res[$n]))
                $res[$n] += 1;
            else
                $res[$n] = 1;

            if($res[$n] > $more_repeat_count)                {
                $more_repeat_count = $res[$n];
                $more_repeat_key = $n;
            }
        }

        return $more_repeat_key;
    }
}
