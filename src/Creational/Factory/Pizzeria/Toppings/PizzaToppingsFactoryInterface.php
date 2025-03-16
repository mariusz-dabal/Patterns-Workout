<?php

namespace Patterns\Creational\Factory\Pizzeria\Toppings;

interface PizzaToppingsFactoryInterface
{
    public function createCrust(): Crust;
    public function createSouce(): Souce;
    public function createCheese(): Cheese;
    public function createVeggies(): Veggies;
    public function createPepperoni(): Pepperoni;
    public function createClams(): Clams;
}
