<?php

namespace Patterns\Creational\Factory\RPG2\Items\Factory;

use Patterns\Creational\Factory\RPG2\Items\Armor;
use Patterns\Creational\Factory\RPG2\Items\Robes;
use Patterns\Creational\Factory\RPG2\Items\Staff;
use Patterns\Creational\Factory\RPG2\Items\Weapon;

class MageItemsFactory implements ItemsFactoryInterface
{
    public function createWeapon(): Weapon
    {
        return new Staff();
    }

    public function createArmor(): Armor
    {
        return new Robes();
    }
}
