<?php

namespace Patterns\Creational\Factory\Pizzeria;

use Patterns\Creational\Factory\Pizzeria\Toppings\PizzaToppingsFactoryInterface;

class CheesePizza extends Pizza
{
    public function __construct(
        private PizzaToppingsFactoryInterface $pizzaToppingsFactory,
    ) {}

    public function prepare(): void
    {
        print 'Preparing pizza: ' . $this->getName() . PHP_EOL;

        $this->crust = $this->pizzaToppingsFactory->createCrust();
        $this->souce = $this->pizzaToppingsFactory->createSouce();
        $this->cheese = $this->pizzaToppingsFactory->createCheese();
    }
}
