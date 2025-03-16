<?php

declare(strict_types=1);

namespace Patterns\Behavioral\Strategy\Duck;

use Patterns\Behavioral\Strategy\Duck\FlyStrategy\FlyingWithWings;
use Patterns\Behavioral\Strategy\Duck\QuackStrategy\Quack;

class CommonDuck extends Duck
{
    public function __construct()
    {
        $this->flyingInterface = new FlyingWithWings();
        $this->quackingInterface = new Quack();
    }

    public function show(): void
    {
        print "I'm common duck!";
    }
}
