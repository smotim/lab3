<?php

namespace App;

class Point

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

    public function move_point($delta_x, $delta_y)
    {
        $this->x = $delta_x;
        $this->y = $delta_y;
    }
}