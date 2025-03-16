<?php

namespace Patterns\Creational\Factory\Pizzeria\AmericanPizzeria;

use Patterns\Creational\Factory\Pizzeria\Pizza;
use Patterns\Creational\Factory\Pizzeria\Pizzeria;

class AmericanPizzeria extends Pizzeria
{
    public function createPizza(string $type): Pizza
    {
        if ($type === 'cheese') {
            return new AmericanCheesePizza();
        } else if ($type === 'vege') {
            return new AmericanVegePizza();
        } else {
            return null;
        }
    }
}
