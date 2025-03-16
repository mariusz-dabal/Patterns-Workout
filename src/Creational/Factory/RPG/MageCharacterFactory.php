<?php

namespace Patterns\Creational\Factory\RPG;

class MageCharacterFactory extends CharacterFactory
{
    public function create(string $name): Character
    {
        return new MageCharacter($name);
    }
}
