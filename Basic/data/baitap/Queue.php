<?php


class Element
{
    public $data;
    public $next;
    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

class Queue
{
    public $font;
    public $back;
    public function __construct()
    {
        $this->font = null;
        $this->back = null;
    }

    public function isEmpty()
    {
        if ($this->font === null) {
            return true;
        } else {
            return false;
        }
    }
    public function enqueue($data)
    {
        $link = new Element($data);
        if ($this->isEmpty()) {
            $this->back = $link;
            $this->font = $this->back;
        } else {
            $this->back->next = $link;
            $link->next = null;
            $this->back = $link;
        }
    }
    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null;
        } else {
            $result = $this->font->data;
            $this->font = $this->font->next;
        }
        return $result;
    }
}
