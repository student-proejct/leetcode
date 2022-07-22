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
        $intval = ($is_negative ? -1 : 1) * intval($str);
        if ($intval < -(2 ** 31) || $intval > (2 ** 31 - 1))
            return '0';
        return ($is_negative ? '-' : '') . ltrim($str, '0');
    }
}


echo (new Solution())->reverse(123) . "\n";
echo (new Solution())->reverse(021) . "\n";
echo (new Solution())->reverse(1534236469) . "\n";

