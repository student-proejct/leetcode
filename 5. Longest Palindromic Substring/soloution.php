<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        $len = strlen($s);
        if ($len === 1)
            return $s;
        for ($step = $len; $step > 0; $step--) {
            for ($i = 0; $i <= $len - $step; $i++) {
                $r = substr($s, $i, $step);
                if ($this->isPalindromic($r))
                    return $r;
            }
        }
    }

    function isPalindromic($s)
    {
        return $s === strrev($s);
    }
}

system('cls');
$s = new Solution();
$t = time();
/*echo $s->longestPalindrome("badasdfasdfasdfmadamsadf") . PHP_EOL;
echo $s->longestPalindrome("cbbd") . PHP_EOL;
echo $s->longestPalindrome("aa") . PHP_EOL;
echo $s->longestPalindrome("ab") . PHP_EOL;
echo $s->longestPalindrome("a") . PHP_EOL;
echo $s->longestPalindrome("lphbehiapswjudnbcossedgioawodnwdruaaxhbkwrxyzaxygmnjgwysafuqbmtzwdkihbwkrjefrsgjbrycembzzlwhxneiijgzidhngbmxwkhphoctpilgooitqbpjxhwrekiqupmlcvawaiposqttsdgzcsjqrmlgyvkkipfigttahljdhtksrozehkzgshekeaxezrswvtinyouomqybqsrtegwwqhqivgnyehpzrhgzckpnnpvajqevbzeksvbezoqygjtdouecnhpjibmsgmcqcgxwzlzztdneahixxhwwuehfsiqghgeunpxgvavqbqrelnvhnnyqnjqfysfltclzeoaletjfzskzvcdwhlbmwbdkxnyqappjzwlowslwcbbmcxoiqkjaqqwvkybimebapkorhfdzntodhpbhgmsspgkbetmgkqlolsltpulgsmyapgjeswazvhxedqsypejwuzlvegtusjcsoenrcmypexkjxyduohlvkhwbrtzjnarusbouwamazzejhnetfqbidalfomecehfmzqkhndpkxinzkpxvhwargbwvaeqbzdhxzmmeeozxxtzpylohvdwoqocvutcelgdsnmubyeeeufdaoznxpvdiwnkjliqtgcmvhilndcdelpnilszzerdcuokyhcxjuedjielvngarsgxkemvhlzuprywlypxeezaxoqfges") . PHP_EOL;*/
echo $s->longestPalindrome("aacabdkacaa") . PHP_EOL;
echo $s->longestPalindrome("aacabdkacaamadam") . PHP_EOL;


echo "\n\n\n\nTime: " . (time() - $t);
