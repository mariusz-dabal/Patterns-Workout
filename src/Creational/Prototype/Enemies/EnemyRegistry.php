<?php

namespace Patterns\Creational\Prototype\Enemies;

class EnemyRegistry
{
    private array $enemies = [];

    public function register(string $key, Enemy $enemy): void
    {
        $this->enemies[$key] = $enemy;
    }

    public function get(string $key): ?Enemy
    {
        if (!isset($this->enemies[$key])) {
            return null;
        }
        // Clone the prototype to create a new instance.
        return $this->enemies[$key]->cloneCharacter();
    }
}
