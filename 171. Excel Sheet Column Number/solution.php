<?php

class Solution
{

    /**
     * @param String $columnTitle
     * @return Integer
     */
    function titleToNumber($columnTitle)
    {
        $res = 0;
        $len = strlen($columnTitle);
        for ($i = 0; $i < $len; $i++)
            $res += (ord($columnTitle[$i]) - 64) * pow(26, ($len - 1 - $i));

        return $res;
    }
}
