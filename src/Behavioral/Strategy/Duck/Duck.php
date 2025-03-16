<?php

declare(strict_types=1);

namespace Patterns\Behavioral\Strategy\Duck;

use Patterns\Behavioral\Strategy\Duck\FlyStrategy\FlyingInterface;
use Patterns\Behavioral\Strategy\Duck\QuackStrategy\QuackingInterface;

abstract class Duck
{
    public FlyingInterface $flyingInterface;

    public QuackingInterface $quackingInterface;

    public abstract function show(): void;

    public function setFlyingInterface(FlyingInterface $flyingInterface): void
    {
        $this->flyingInterface = $flyingInterface;
    }

    public function setQuackingInterface(QuackingInterface $quackingInterface): void
    {
        $this->quackingInterface = $quackingInterface;
    }

    public function executeFly(): void
    {
        $this->flyingInterface->fly();
    }

    public function executeQuack(): void
    {
        $this->quackingInterface->quack();
    }

    public function swim(): void
    {
        print "Every duck swims!";
    }
}
