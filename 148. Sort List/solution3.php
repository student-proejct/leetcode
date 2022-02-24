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
        $temp = $head;

        while ($temp) {
            $next = $temp->next;

            while ($next) {
                if ($temp->val > $next->val) {
                    $t = $temp->val;
                    $temp->val = $next->val;
                    $next->val = $t;
                }
                $next = $next->next;
            }

            $temp = $temp->next;
        }

        return $head;
    }
}
