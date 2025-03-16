<?php

declare(strict_types=1);

namespace Patterns\Behavioral\Strategy\Duck\FlyStrategy;

class FlyingWithWings implements FlyingInterface
{
    public function fly(): void
    {
        print "God damn it! I'm Flying!";
    }
}
