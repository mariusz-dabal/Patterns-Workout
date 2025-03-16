<?php

namespace Patterns\Creational\Factory\RPG2\Character\Factory;

use Patterns\Creational\Factory\RPG2\Character\Character;
use Patterns\Creational\Factory\RPG2\Character\Mage;
use Patterns\Creational\Factory\RPG2\Items\Factory\ItemsFactoryInterface;

class MageFactory extends CharacterFactory
{
    public function __construct(
        private ItemsFactoryInterface $itemsFactory,
    ) {}

    public function create(string $name): Character
    {
        return new Mage(
            $name,
            3,
            1,
            2,
            4,
            $this->itemsFactory->createWeapon(),
            $this->itemsFactory->createArmor(),
        );
    }
}
