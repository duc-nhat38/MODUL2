<?php
include "StopWatch.php";
include "MyList.php";
include "MyLinked.php";
include "Queue.php";
include "stack.php";

$myList = new MyList();
$watch =new StopWatch();
echo 'Thời gian push vào.'.'<br>';
$watch->start();
for($i = 0;$i < 10000;$i++){
    $myList->add(rand(1, 10));
}
$watch->stop();
echo 'Array List : '.$watch->getElapsedTime()."<br>";

$list = new LinkedList();
$watch->start();
for ($i = 0; $i < 10000; $i++) {
    $list->addLast(rand(1,10));
}
$watch->stop();
echo "Linked List : ".$watch->getElapsedTime()."<br>";

$queue = new Queue();
$watch->start();
for ($i =0;$i < 10000;$i++){
    $queue->enqueue(rand(1,10));
}
$watch->stop();
echo "Queue : ".$watch->getElapsedTime()."<br>";

$stack =new Stack(100000);
$watch->start();
for ($i = 0;$i < 10000; $i++){
    
    $stack->push(rand(1, 10));
}
$watch->stop();
echo "Stack : ".$watch->getElapsedTime()."<br>";

echo 'Thời gian pop.'.'<br>';
$watch->start();
for ($i = 0;$i < 10000; $i++){
    $myList->printList();
}
$watch->stop();
echo "Array List : ".$watch->getElapsedTime()."<br>";

$watch->start();
for ($i = 0;$i < 10000; $i++){
    $list->printList();
}
$watch->stop();
echo "Linked List : ".$watch->getElapsedTime()."<br>";

$watch->start();
for ($j =0;$j < 10000;$j++){
    $queue->dequeue();
}
$watch->stop();
echo "Queue : ".$watch->getElapsedTime()."<br>";

$watch->start();
for ($i = 0;$i < 10000; $i++){
     $stack->pop();
}
$watch->stop();
echo "Stack : ".$watch->getElapsedTime()."<br>";