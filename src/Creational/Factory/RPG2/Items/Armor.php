<?php

namespace Patterns\Creational\Factory\RPG2\Items;

abstract class Armor
{
    protected string $name = 'Basic Armor';

    public function getName(): string
    {
        return $this->name;
    }
}
