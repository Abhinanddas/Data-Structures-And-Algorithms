<?php

class Stack
{

    private $head;
    private $stack;
    private $length;

    public function __construct($length)
    {
        $this->head = null;
        $this->stack = [];
        $this->length = $length;
    }

    public function push($num)
    {

        if ($this->head >= $this->length)
        {
            print_r("\n The stack is full.");
            return;
        }

        if (is_null($this->head))
        {
            $this->head = 0;
        }
        else
        {
            $this->head += 1;
        }
        $this->stack[$this->head] = $num;
    }

    public function pop()
    {

        if ($this->head == null)
        {
            print_r("\n The stack is empty.");
            return;
        }

        print_r("\n Popped element is: " . $this->stack[$this->head]);
        unset($this->stack[$this->head]);
        $this->head -= 1;
    }

    public function traverse()
    {
        print_r("\n" . implode(",", $this->stack));
    }
}

$a = new Stack(3);
$a->pop();
$a->push(1);
$a->push(2);
$a->traverse();
$a->push(3);
$a->push(4);
$a->push(5);
$a->traverse();
$a->pop();
$a->traverse();
