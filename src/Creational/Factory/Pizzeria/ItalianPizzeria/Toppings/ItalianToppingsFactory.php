<?php

namespace Patterns\Creational\Factory\Pizzeria\ItalianPizzeria\Toppings;

use Patterns\Creational\Factory\Pizzeria\Toppings\Cheese;
use Patterns\Creational\Factory\Pizzeria\Toppings\Clams;
use Patterns\Creational\Factory\Pizzeria\Toppings\Crust;
use Patterns\Creational\Factory\Pizzeria\Toppings\Pepperoni;
use Patterns\Creational\Factory\Pizzeria\Toppings\PizzaToppingsFactoryInterface;
use Patterns\Creational\Factory\Pizzeria\Toppings\Souce;
use Patterns\Creational\Factory\Pizzeria\Toppings\Veggies;

class ItalianToppingsFactory implements PizzaToppingsFactoryInterface
{
    public function createCrust(): Crust
    {
        return new ThinCrust();
    }

    public function createSouce(): Souce
    {
        return new Marinara();
    }

    public function createCheese(): Cheese
    {
        return new Reggiano();
    }

    public function createVeggies(): Veggies
    {
        return new ItalianVeggies();
    }

    public function createPepperoni(): Pepperoni
    {
        return new ItalianPepperoni();
    }

    public function createClams(): Clams
    {
        return new FreshClams();
    }
}
