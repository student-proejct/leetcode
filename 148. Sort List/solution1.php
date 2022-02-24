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
        while ($next) {
            if ($head->val > $next->val) {
                $t = $head->val;
                $head->val = $next->val;
                $next->val = $t;
            }

            $next = $next->next;
        }
        $this->sortList($head->next);

        return $head;
    }
}
