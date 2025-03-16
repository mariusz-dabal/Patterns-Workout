<?php

declare(strict_types=1);

namespace Patterns\Behavioral\Strategy\Duck\QuackStrategy;

class Quack implements QuackingInterface
{
    public function quack(): void
    {
        print "Quack!";
    }
}
