<?php

class Solution
{

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s)
    {
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
$tc = [
    "babad",
    "cbbd",
    "aacabdkacaa",
    "aacabdkacaamadam",
    "aacabdkacaaMAdamasdfasdfasfwer",
    "uhrfjotnewtodhmbplsaolnpcdaohiytmfllukijouxipvqohtsgxbtfoxyfkfczkfwhzimbefiohmtimrcxbpgcxogystdkcqujvbxsgirpccdnvejtljftwkdpsqpflzwruwwdzovsbmwbcvlftkjnxqaguvtsycylqzquqkbnybnbaeahbxejhphwrpmymcemuhljwtuvxefqfzjhskuqhifydkxpnfwfxkpeexnjltfqwfvchphmtsrsyayxukvmlqodshqwbeaxhcxdbssnrdzvxtusngwqdxvluauphmmbwmgtazjwvolenegwbmjfwprfuswamyvgrgshqocnhirgyakbkkggviorawadzhjipjjgiwpelwxvtaegauerbwpalofrbghfhnublttqtcmqskcocwwwxpnckrnbepusjyohsrretrqyvgnbezuvwmzizcefxyumtdwnqjkgsktyuacfpnqocqjxcurmipjfqmjqrkdeqsfseyigqlwmzgqhivbqalcxhlzgtsfjbdbfqiedogrqasgmimifdexbjjpfusxsypxobxjtcwxnkpgkdpgskgkvezkriixpxkkattyplnpdbdifforxozfngmlgcunbnubzamgkkfbswuqfqrvzjqmlfqxeqpjaqayodtetsecmfbplscmslpqiyhhykftzkkhshxqvdwmwowokpluwyvavwvofwqtdilwqjgrprukzyhckuspyzaoe",
    "asdfasifpwoeir239482u3498usdfoiajsdflakjfri2394MADAM8u23948usadfasdfsadfasff29348u23498sadfsadjifasdfji2302349sadfajsdfaksjdf23482394823492348928423948uoisaisdfjasdfu9asd9f8uasd09f8uasd9f8uasdf98sdf9s8adufasd98fusad90f8uasdf9u8asdf98asudf9sa8fuysad098fusadf8usd8uasdf8asudf9sa8dfusd9f87yuasdf98usdfu8asdf98u2349823y492834",
    "aacabdkacaa",
    "aacabdkacaamadam"
];
$t = microtime(true);

foreach ($tc as $test)
    echo $s->longestPalindrome($test) . PHP_EOL;


echo "\n\n\n\nTime: " . (microtime(true) - $t) * 1000;
