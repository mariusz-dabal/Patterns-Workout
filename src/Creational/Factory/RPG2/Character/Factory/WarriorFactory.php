<?php

namespace Patterns\Creational\Factory\RPG2\Character\Factory;

use Patterns\Creational\Factory\RPG2\Character\Character;
use Patterns\Creational\Factory\RPG2\Character\Warrior;
use Patterns\Creational\Factory\RPG2\Items\Factory\ItemsFactoryInterface;

class WarriorFactory extends CharacterFactory
{
    public function __construct(
        private ItemsFactoryInterface $itemsFactory,
    ) {}

    public function create(string $name): Character
    {
        return new Warrior(
            $name,
            3,
            3,
            3,
            1,
            $this->itemsFactory->createWeapon(),
            $this->itemsFactory->createArmor(),
        );
    }
}
