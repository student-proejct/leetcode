<?php

/**
 * Definition for a singly-linked list.
 *
 */
class ListNode
{
    public $val = 0;
    public $next = null;

    function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}
class Solution
{

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2)
    {
        $result = new ListNode();
        $next = null;
        $remain = 0;
        do {
            $t = ($l1->val ?? 0) + ($l2->val ?? 0) + $remain;
            $remain = $t > 9 ? 1 : 0;

            $next = $next->next ?? $result;
            $next->val = $t > 9 ? $t - 10 : $t;
            $next->next = new ListNode();

            $l1 = $l1->next ?? null;
            $l2 = $l2->next ?? null;
        } while ($l1 || $l2 || $remain > 0);

        $next->next = null;

        return $result;
    }
}
