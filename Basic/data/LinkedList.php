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

class LinkList
{
    public $fistNode;
    public $lastNode;
    public static $count  = 0;

    public function __construct()
    {
        $this->fistNode = null;
        $this->lastNode = null;
    }

    public function insertFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->fistNode;
        $this->fistNode = $link;
        if ($this->lastNode === NULL) {
            $this->lastNode = $link;
        }
        self::$count++;
    }
    public function insertLast($data)
    {
        $link = new Node($data);
        if ($this->fistNode !== null) {
            $this->lastNode->next = $link;
            $link->next = NULL;
            $this->lastNode = $link;
            self::$count++;
        }else {
            $this->insertFirst($data);
        }
        
    }
    public function totalNodes()
    {
        return self::$count;
    }
    public function readList()
    {
        $listData = [];
        $current = $this->fistNode;
        while ($current !== null) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
}
$linkedList = new LinkList();

$linkedList->insertFirst(11);
$linkedList->insertFirst(22);
$linkedList->insertLast(33);
$linkedList->insertLast(44);
$totalNodes = $linkedList->totalNodes();
$linkData = $linkedList->readList();

echo $totalNodes;
echo implode('-', $linkData);
