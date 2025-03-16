<?php

namespace Patterns\Creational\Factory\RPG;

abstract class Character
{
    protected string $name;
    protected int $damage;
    protected int $armor;
    protected int $specialAbility;

    public function attack(): int
    {
        return $this->damage;
    }

    public function defend(): int
    {
        return $this->armor;
    }

    public function specialAbility(): int
    {
        return $this->specialAbility;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
