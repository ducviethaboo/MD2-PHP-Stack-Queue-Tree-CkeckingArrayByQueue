<?php


class Queue
{
    public $queue;

    public function __construct()
    {
        $this->queue = [];
    }

    public function insert($arr)
    {
        for ($i = 0; $i < count($arr); $i++) {
            array_push($this->queue, $arr[$i]);
        }
    }

    public function getElement()
    {
        return $this->queue;
    }
}