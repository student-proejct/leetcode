<?php


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
     * @param ListNode $head
     * @return ListNode
     */
    function deleteDuplicates($head)
    {
        $items = [];
        $next = $head;
        while ($next) {
            $items[$next->val] = $items[$next->val] + 1 ?? 1;

            $next = $next->next;
        }
        $items = array_filter($items, function ($v) {
            return $v === 1;
        });

        if (count($items) > 0) {
            $items = array_keys($items);

            $res = new ListNode(array_shift($items));
            $next = $res;
            while (count($items) > 0) {
                $next->next = new ListNode(array_shift($items));
                $next = $next->next;
            }
            return $res;
        }

        return null;
    }
}
