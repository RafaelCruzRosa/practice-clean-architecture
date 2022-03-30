<?php

class Reactangle
{
    public function __construct(
        protected float $height,
        protected float $width
    )
    {
        
    }

    public function setH(float $newHeight)// Same name of book example
    {
        $this->height = $newHeight;
    }

    public function setW(float $newWidth)// Same name of book example
    {
        $this->width = $newWidth;
    }
}

class Square extends Reactangle
{
    public function setSide(float $side)
    {
        $this->height = $side;
        $this->width = $side;
    }
}