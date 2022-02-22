<?php

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s)
    {
        $res = '';
        $str = '';
        do {
            $t = substr($s, 0, 1);
            $s = substr($s, 1);
            if (strpos($str, $t) === false)
                $str .= $t;
            else {
                if (strlen($res) < strlen($str))
                    $res = $str;
                $str = substr($str, strrpos($str, $t) + 1) . $t;
            }
        } while (strlen($s) > 0);

        if (strlen($res) < strlen($str))
            $res = $str;
        return strlen($res);
    }
}
