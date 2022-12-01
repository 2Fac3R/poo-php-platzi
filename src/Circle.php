<?php

class Circle {

    private $radius;

    private function __construct($r) 
    {
        $this->radius = $r;
    }

    public function area() 
    {
        // The circumference of a circle is equal to its area.
        return $this->radius**2*3.14;
    }
}

?>