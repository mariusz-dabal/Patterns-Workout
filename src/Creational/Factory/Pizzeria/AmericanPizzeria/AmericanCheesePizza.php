<?php

namespace Patterns\Creational\Factory\Pizzeria\AmericanPizzeria;

use Patterns\Creational\Factory\Pizzeria\Pizza;

class AmericanCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'American cheese';
        $this->crust = 'Thick';
        $this->souce = 'BBQ';

        $this->toppings[] = 'Bacon';
    }
}
