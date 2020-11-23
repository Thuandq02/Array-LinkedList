<?php


class Arrlist
{
    public $elements = [];
    public $size;

    public function Arrlist($arr = "")
    {
        if (is_array($arr) == true)
            $this->elements = $arr;
        else
            $this->elements = array();
    }

    public function insert($index, $obj)
    {
        array_splice($this->elements, $index, 0, [$obj]);
    }


    public function add($obj)
    {
        array_push($this->elements, $obj);
    }


    public function remove($index)
    {
        if ($this->isInteger($index)) {
            $newArrayList = array();

            for ($i = 0; $i < $this->size(); $i++)
                if ($index != $i) $newArrayList[] = $this->get($i);

            $this->elements = $newArrayList;
        } else {
            die("ERROR in Arrlist.remove <br> Integer value required");
        }
    }


    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->elements[$index];

        } else {
            die("ERROR in Arrlist.get");
        }
    }


    public function clear()
    {
        $this->elements = array();
    }

    public function addAll($arr)
    {
        $this->elements = array_merge($this->elements, $arr);
    }

    public function indexOf($obj)
    {
        foreach ($this->elements as $key => $value) {
            if ($value == $obj) {
                return $key;
            }
        }
    }


    public function isEmpty()
    {
        if (count($this->elements) == 0) {
            return true;
        }
        return false;
    }


    public function sort()
    {
        sort($this->elements);
    }

    public function reset()
    {
        return reset($this->elements);
    }


    public function size()
    {
        return count($this->elements);
    }


    public function toArray()
    {
        return $this->elements;
    }


    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }


}