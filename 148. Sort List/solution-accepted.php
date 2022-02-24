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
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function sortList($head) {
        if(!$head || !$head->next)
            return $head;

        $list = [];
        $temp = $head;
        while($temp){
            $list[] = $temp->val;
            $temp = $temp->next;
        }

        sort($list);
        $head = new ListNode($list[0]);
        $temp = $head;
        for($i= 1 ; $i < count($list); $i ++){
            $temp->next = new ListNode($list[$i]);
            $temp = $temp->next;
        }
        return $head;
    }
}
