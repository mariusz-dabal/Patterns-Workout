<?php

namespace Patterns\Creational\Factory\Pizzeria;

use Patterns\Creational\Factory\Pizzeria\Toppings\Cheese;
use Patterns\Creational\Factory\Pizzeria\Toppings\Clams;
use Patterns\Creational\Factory\Pizzeria\Toppings\Crust;
use Patterns\Creational\Factory\Pizzeria\Toppings\Pepperoni;
use Patterns\Creational\Factory\Pizzeria\Toppings\Souce;
use Patterns\Creational\Factory\Pizzeria\Toppings\Veggies;

abstract class Pizza
{
    protected string $name;
    protected Crust $crust;
    protected Souce $souce;
    protected Veggies $veggies;
    protected Cheese $cheese;
    protected Pepperoni $pepperoni;
    protected Clams $clams;

    abstract public function prepare(): void;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function bake(): void
    {
        print "Baking" . PHP_EOL;
    }

    public function cut(): void
    {
        print "Cuting..." . PHP_EOL;
    }

    public function pack(): void
    {
        print "Packing..." . PHP_EOL;
    }
}
