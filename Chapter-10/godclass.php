<?php

interface GodInterface
{
    public function makeCoffee(): string;
    public function makeHamburguer(): string;
}

class HamburguerChef implements GodInterface
{
    public function makeCoffee(): string
    {
        throw new Exception("I only make hamburguer");
    }
    public function makeHamburguer(): string
    {
        return "Making hamburguer";
    }
}

class CoffeeChef implements GodInterface
{
    public function makeCoffee(): string
    {
        return "Making coffe";
    }
    public function makeHamburguer(): string
    {
        throw new Exception("I only make coffee");
    }
}