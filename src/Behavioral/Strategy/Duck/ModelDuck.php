<?php

declare(strict_types=1);

namespace Patterns\Behavioral\Strategy\Duck;

use Patterns\Behavioral\Strategy\Duck\FlyStrategy\NoFlying;
use Patterns\Behavioral\Strategy\Duck\QuackStrategy\Quack;

class ModelDuck extends Duck
{
    public function __construct()
    {
        $this->flyingInterface = new NoFlying();
        $this->quackingInterface = new Quack();
    }

    public function show(): void
    {
        print "I'm a model duck!";
    }
}
