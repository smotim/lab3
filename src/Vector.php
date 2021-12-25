<?php

namespace App;

class Vector
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function __toString()
    {
        return "x: " . $this->x . " " . "y: ". $this->y;
    }

    public function get_length()
    {
        return sqrt($this->x**2 + $this->y**2);
    }

    public function is_null()
    {
        if ($this->x == 0 or $this->y == 0) return True;
        else return False;
    }

    public function perpendicular($vector)
    {
        if($this->x * $vector->x + $this->y * $vector->y == 0) return True;
        else return False;
    }
}