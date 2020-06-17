<?php

class Node
{
    public $data;
    public $next;
    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }

    public function readNode()
    {
        return $this->data;
    }
}

class LinkedList
{
    public static $count = 0;
    public $firstNode;
    public $lastNode;

    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
    }

    public function addFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;
        if ($this->lastNode === null) {
            $this->lastNode = $link;
        }
        self::$count++;
    }
    public function addLast($data)
    {
        $link = new Node($data);
        if ($this->firstNode !== null) {
            $this->lastNode->next = $link;
            $link->next = null;
            $this->lastNode = $link;
            self::$count++;
        } else {
            $this->addFirst($data);
        }
    }
    public function add(int $index, $data)
    {
        if ($index >= 0 && $index <= self::$count) {
            $link = new Node($data);
            if ($index === 0) {
                $this->addFirst($data);
            } else {
                $current = $this->firstNode;
                $previous = $this->firstNode;
                for ($i = 0; $i < $index; $i++) {
                    $previous = $current;
                    $current = $current->next;
                }
                $previous->next = $link;
                $link->next = $current;
                self::$count++;
            }
        }
    }
    public function delNode($index)
    {
        if (self::$count !== 0) {
            if ($index >= 0 && $index < self::$count) {
                $current = $this->firstNode;
                $previous = $this->firstNode;
                for ($i = 0; $i < $index; $i++) {
                    $previous = $current;
                    $current = $current->next;
                }
                $previous->next = $current->next;
                $current->next  = $current;
                self::$count--;
            }
        }
    }
    public function remove($obj)
    {
        $current = $this->firstNode;
        $previous = $this->firstNode;
        while ($current->data !== $obj) {
            if ($current->next === null) {
                return null;
            } else {
                $previous = $current;
                $current = $current->next;
            }
        }
        if ($current === $this->firstNode) {
            if (self::$count === 1) {
                $this->lastNode = $this->firstNode;
            }
            $this->firstNode = $this->firstNode->next;
        } else {
            if ($current === $this->lastNode) {
                $this->lastNode = $previous;
            }
            $previous->next = $current->next;
            $current->next  = $current;
        }
        self::$count--;
    }

    public function get(int $index)
    {
        $current = $this->firstNode;
        for ($i = 0; $i < $index; $i++) {
            $current = $current->next;
        }
        return $current->data;
    }
    public function totalNode()
    {
        return self::$count;
    }
    public function printList()
    {
        $listData = [];
        $current = $this->firstNode;
        while ($current !== null) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
    public function clone()
    {
        $newList = new LinkedList();

        $newList->firstNode = $this->firstNode;
        $newList->lastNode = $this->lastNode;
        return $newList;
    }
    public function indexOf($obj)
    {
        $listData = $this->printList();
        foreach ($listData as $key => $value) {
            if ($value === $obj->data) {

                return $key;
            }
        }

        return 'false';
    }
}

