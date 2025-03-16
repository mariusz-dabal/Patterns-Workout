<?php

namespace Patterns\Creational\Factory\RPG2\Character;

use Patterns\Creational\Factory\RPG2\Items\Armor;
use Patterns\Creational\Factory\RPG2\Items\Weapon;

abstract class Character
{
    public function __construct(
        protected string $name,
        protected int $health,
        protected int $defence,
        protected int $strength,
        protected int $power,
        protected Weapon $weapon,
        protected Armor $armor,
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getHealth(): int
    {
        return $this->health;
    }

    public function attack(): int
    {
        return $this->strength;
    }

    public function defend(): int
    {
        return $this->defence;
    }

    public function ability(): int
    {
        return $this->power;
    }

    public function getWeapon(): Weapon
    {
        return $this->weapon;
    }

    public function setWeapon(Weapon $weapon): static
    {
        $this->weapon = $weapon;
        return $this;
    }

    public function getArmor(): Armor
    {
        return $this->armor;
    }

    public function setArmor(Armor $armor): static
    {
        $this->armor = $armor;
        return $this;
    }
}
