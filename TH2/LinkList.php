<?php
include_once("Node.php");


class LinkList
{
    private $fiertNode;
    private $lastNode;
    private $count;


    function __construct()
    {
        $this->fiertNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }

    public function insertFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->fiertNode;
        $this->fiertNode = $link;

        if ($this->lastNode == null) {
            $this->lastNode = $link;
        }
        $this->count++;
    }

    public function insertLast($data)
    {
        if ($this->fiertNode != null) {
            $link = new Node($data);
            $this->lastNode->next = $link;
            $link->next = null;
            $this->lastNode = $link;
            $this->count++;
        } else {
            $this->insertFirst($data);
        }
    }

    public function totalNodes()
    {
        return $this->count;
    }

    public function readList()
    {
        $listData = array();
        $current = $this->fiertNode;

        while ($current != NULL) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }

}