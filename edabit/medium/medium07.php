<?php
class Circle
{
    private $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    public function getArea()
    {
        return pi()* pow($this->getRadius(),2);
    }
    public function getPerimeter()
    {
        return pi()*2*$this->getRadius();
    }
}
