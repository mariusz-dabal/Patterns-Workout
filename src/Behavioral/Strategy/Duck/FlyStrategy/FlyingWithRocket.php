<?php

declare(strict_types=1);

namespace Patterns\Behavioral\Strategy\Duck\FlyStrategy;

class FlyingWithRocket implements FlyingInterface
{
    public function fly(): void
    {
        print "I have a rocket and I'm using it!";
    }
}
