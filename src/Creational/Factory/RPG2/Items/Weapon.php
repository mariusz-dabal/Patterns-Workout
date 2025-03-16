<?php

namespace Patterns\Creational\Factory\RPG2\Items;

abstract class Weapon
{
    protected string $name = 'Basic Weapon';

    public function getName(): string
    {
        return $this->name;
    }
}
