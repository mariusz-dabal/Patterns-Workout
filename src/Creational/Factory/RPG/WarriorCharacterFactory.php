<?php

namespace Patterns\Creational\Factory\RPG;

class WarriorCharacterFactory extends CharacterFactory
{
    public function create(string $name): Character
    {
        return new WarriorCharacter($name);
    }
}
