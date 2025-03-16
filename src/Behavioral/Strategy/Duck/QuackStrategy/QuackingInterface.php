<?php

declare(strict_types=1);

namespace Patterns\Behavioral\Strategy\Duck\QuackStrategy;

interface QuackingInterface
{
    public function quack(): void;
}
