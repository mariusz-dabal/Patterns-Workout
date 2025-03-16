<?php

namespace Patterns\Creational\Factory\Pizzeria\AmericanPizzeria\Toppings;

use Patterns\Creational\Factory\Pizzeria\AmericanPizzeria\AmericanCheesePizza;
use Patterns\Creational\Factory\Pizzeria\Toppings\AmericanVeggies;
use Patterns\Creational\Factory\Pizzeria\Toppings\Cheese;
use Patterns\Creational\Factory\Pizzeria\Toppings\Clams;
use Patterns\Creational\Factory\Pizzeria\Toppings\Crust;
use Patterns\Creational\Factory\Pizzeria\Toppings\Pepperoni;
use Patterns\Creational\Factory\Pizzeria\Toppings\PizzaToppingsFactoryInterface;
use Patterns\Creational\Factory\Pizzeria\Toppings\Souce;
use Patterns\Creational\Factory\Pizzeria\Toppings\Veggies;

class AmericanToppingsFactory implements PizzaToppingsFactoryInterface
{
    public function createCrust(): Crust
    {
        return new ThickCrust();
    }

    public function createSouce(): Souce
    {
        return new BBQ();
    }

    public function createCheese(): Cheese
    {
        return new Mozzarella();
    }

    public function createVeggies(): Veggies
    {
        return new AmericanVeggies();
    }

    public function createPepperoni(): Pepperoni
    {
        return new AmericanPepperoni();
    }

    public function createClams(): Clams
    {
        return new FrozenClams();
    }
}
