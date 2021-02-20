<?php

class View
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function out()
    {
        echo '
        Hello World;
        <br/>
        Data: ' . $this->data . '
        ';
    }
}