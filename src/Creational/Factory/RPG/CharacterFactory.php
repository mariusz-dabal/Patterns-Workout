<?php

namespace Patterns\Creational\Factory\RPG;

abstract class CharacterFactory
{
    abstract public function create(string $name): Character;
}
