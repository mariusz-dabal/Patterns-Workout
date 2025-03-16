<?php

declare(strict_types=1);

namespace Patterns\Behavioral\Strategy\Duck\QuackStrategy;

class NoQuack implements QuackingInterface
{
    public function quack(): void
    {
        print "<<Silence>>";
    }
}
