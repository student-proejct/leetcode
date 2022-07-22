<?php

class Solution
{

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x)
    {
        if ($x == 0)
            return '0';
        $is_negative = $x < 0;
        $str = strrev(preg_replace('/[^0-9]/', '', strval($x)));

        return ($is_negative ? '-' : '') . ltrim($str, '0');
    }
}


echo (new Solution())->reverse(210);

