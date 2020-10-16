<?php


class Stack
{
    public $stack;

    public function __construct()
    {
        $this->stack = [];
    }

    public function insert($arr)
    {
        for ($i = 0; $i < count($arr); $i++) {
            array_unshift($this->stack,$arr[$i]);
            }
    }

    public function getElement() {
        return $this->stack;
    }


}