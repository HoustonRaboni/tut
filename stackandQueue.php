<?php

// queue first in first out
$queue = [];// initializing an empty queue
array_push($queue, 'item1');// Enqueue element 'item1'
array_push($queue, 'item2');// Enqueue element 'item2'
$removedElement = array_shift($queue);//Dequeue the first element

echo $removedElement; // output: 'item1'

// stack last in first out
$stack = []; //initializing an empty stack
array_push($stack, 'item1');
array_push($stack, 'item2');
$removedElement = array_pop($stack); // pop the last array from the stack
echo $removedElement;


?>