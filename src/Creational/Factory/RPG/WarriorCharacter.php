<?php

namespace Patterns\Creational\Factory\RPG;

class WarriorCharacter extends Character
{
    public function __construct(string $name = 'Warrior')
    {
        $this->name = $name;
        $this->damage = 5;
        $this->armor = 3;
        $this->specialAbility = 2;
    }
}
