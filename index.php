<?php
include "Stack.php";
include "Queue.php";
$srt = 'able was I ere I saw elba';
$arr = str_split($srt);


$stack = new Stack();
$queue = new Queue();

$stack->insert($arr);
$queue->insert($arr);
$flag = true;

for ($i = 0; $i < count($stack->getElement()); $i++) {
    if ($stack->getElement()[$i] === $queue->getElement()[$i]) {
        $flag = true;
    } else {
        $flag = false;
    }
}

if ($flag == true) {
    echo "This is symmetry String!!";
} else {
    echo "This is not symmetry String!!";
}