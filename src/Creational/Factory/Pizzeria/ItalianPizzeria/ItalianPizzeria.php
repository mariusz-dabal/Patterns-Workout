<?php

namespace Patterns\Creational\Factory\Pizzeria\ItalianPizzeria;

use Patterns\Creational\Factory\Pizzeria\CheesePizza;
use Patterns\Creational\Factory\Pizzeria\ItalianPizzeria\Toppings\ItalianToppingsFactory;
use Patterns\Creational\Factory\Pizzeria\Pizza;
use Patterns\Creational\Factory\Pizzeria\Pizzeria;

class ItalianPizzeria extends Pizzeria
{
    protected function createPizza(string $type): Pizza
    {
        $pizza = null;
        $toppingsFactory = new ItalianToppingsFactory();

        if ($type === 'cheese') {
            $pizza = new CheesePizza($toppingsFactory);
            $pizza->setName('Italian Cheese Pizza');
        } else {
            return null;
        }

        return $pizza;
    }
}
