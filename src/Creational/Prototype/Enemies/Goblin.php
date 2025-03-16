<?php

namespace Patterns\Creational\Prototype\Enemies;

class Goblin extends Enemy
{
    public function __construct(string $name = "Goblin", int $health = 100, int $damage = 10)
    {
        $this->name   = $name;
        $this->health = $health;
        $this->damage = $damage;
    }
}
