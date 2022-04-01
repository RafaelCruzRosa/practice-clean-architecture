<?php

Interface Shape
{
    public function calculateArea(): float;
}

class Rectangle implements Shape
{
    protected float $width;
    protected float $height;


    public function __construct(float $height,float $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function calculateArea(): float
    {
        return $this->width * $this->height;
    }
}

class Square implements Shape
{
    protected float $width;

    public function __construct(float $width)
    {
        $this->width = $width;
    }

    public function calculateArea(): float
    {
        return pow($this->width, 2);
    }
}


class ShapeCalc
{
    public function calcTotalArea(Shape $shape) 
    {
        return $shape->calculateArea();
    }
}

$square = new Square(2);
$rectangle = new Rectangle(2, 3);

$shapeCalc = new ShapeCalc();

$shapeCalc->calcTotalArea($square); // 4
$shapeCalc->calcTotalArea($rectangle); // 6
