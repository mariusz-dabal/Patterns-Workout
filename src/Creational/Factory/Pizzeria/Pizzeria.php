<?php

namespace Patterns\Creational\Factory\Pizzeria;

use Patterns\Creational\Factory\Pizzeria\Pizza;

abstract class Pizzeria
{
    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->pack();

        return $pizza;
    }

    abstract protected function createPizza(string $type): Pizza;
}
