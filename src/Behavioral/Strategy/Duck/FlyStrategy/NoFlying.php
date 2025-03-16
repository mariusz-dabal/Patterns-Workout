<?php

declare(strict_types=1);

namespace Patterns\Behavioral\Strategy\Duck\FlyStrategy;

class NoFlying implements FlyingInterface
{
    public function fly(): void
    {
        print "How do I fly?!";
    }
}
