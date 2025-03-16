<?php

namespace Patterns\Creational\Factory\RPG;

class MageCharacter extends Character
{
    public function __construct(string $name = 'Mage')
    {
        $this->name = $name;
        $this->damage = 2;
        $this->armor = 1;
        $this->specialAbility = 7;
    }
}
