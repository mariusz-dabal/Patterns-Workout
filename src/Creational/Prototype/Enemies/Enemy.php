<?php

namespace Patterns\Creational\Prototype\Enemies;

abstract class Enemy
{
    protected string $name;
    protected int $damage;
    protected int $health;

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function attack(): int
    {
        return $this->damage;
    }

    public function defence(): int
    {
        return $this->health;
    }

    public function cloneCharacter(): static
    {
        return clone $this;
    }
}
