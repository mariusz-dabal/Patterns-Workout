<?php

namespace Patterns\Creational\Factory\RPG2\Character\Factory;

use Patterns\Creational\Factory\RPG2\Character\Archer;
use Patterns\Creational\Factory\RPG2\Character\Character;
use Patterns\Creational\Factory\RPG2\Items\Factory\ItemsFactoryInterface;

class ArcherFactory extends CharacterFactory
{
    public function __construct(
        private ItemsFactoryInterface $itemsFactory,
    ) {}

    public function create(string $name): Character
    {
        return new Archer(
            $name,
            3,
            2,
            3,
            2,
            $this->itemsFactory->createWeapon(),
            $this->itemsFactory->createArmor(),
        );
    }
}
