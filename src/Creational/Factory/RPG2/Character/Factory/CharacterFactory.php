<?php

namespace Patterns\Creational\Factory\RPG2\Character\Factory;

use Patterns\Creational\Factory\RPG2\Character\Character;

abstract class CharacterFactory
{
    abstract public function create(string $name): Character;
}
