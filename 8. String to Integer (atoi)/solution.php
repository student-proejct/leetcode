<?php

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function myAtoi($s)
    {
        $r = intval(preg_replace('/[a-zA-Z]+.*/i', '', $s));
        if ($r < -2147483648)
            return -2147483648;
        if ($r > 2147483647)
            return 2147483647;

        return $r;
    }
}
