<?php

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s)
    {
        $n = strlen($s);
        $uniqueLen = 0;
        for ($step = 1; $step <= $n ; $step++) {
            for ($j = 0; $j < ($n - $step) + 1; $j++) {
                $str = substr($s, $j, $step);
                $len = count(array_unique(str_split($str)));

                if ($step === $len && $len > $uniqueLen) {
                    $uniqueLen = $len;
                }
            }
        }

        return $uniqueLen;
    }
}

$s = new Solution();
/*var_dump($s->lengthOfLongestSubstring("asdfqwreowifasdfasdfqwerqweriasdfasfiasfsadfafasdfqweroasf"));
var_dump($s->lengthOfLongestSubstring("abcabcbb"));
var_dump($s->lengthOfLongestSubstring("bbbbb"));


$s->lengthOfLongestSubstring("bbbb");
echo "\n\n---------------------------------------------\n\n";
$s->lengthOfLongestSubstring("abcabcbb");
echo "\n\n---------------------------------------------\n\n";
$s->lengthOfLongestSubstring("pwwkew");
echo "\n\n---------------------------------------------\n\n";
$s->lengthOfLongestSubstring("abcdefghji");
echo "\n\n---------------------------------------------\n\n";
$s->lengthOfLongestSubstring("aa");
echo "\n\n---------------------------------------------\n\n";
$s->lengthOfLongestSubstring("  ");
echo "\n\n---------------------------------------------\n\n";
$s->lengthOfLongestSubstring(" ");
echo "\n\n---------------------------------------------\n\n";
$s->lengthOfLongestSubstring("au");*/
