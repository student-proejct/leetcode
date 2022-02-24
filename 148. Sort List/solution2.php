<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution
{

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function sortList($head)
    {
        if (!$head || !$head->next)
            return $head;
        $next = $head;
        while ($next && $next->next) {
            if ($next->val > $next->next->val) {
                $t = $next->val;
                $next->val = $next->next->val;
                $next->next->val = $t;
            }

            $next = $head->val > $next->val ? $head : $next->next;
        }
        $this->sortList($head->next);

        return $head;
    }
}
