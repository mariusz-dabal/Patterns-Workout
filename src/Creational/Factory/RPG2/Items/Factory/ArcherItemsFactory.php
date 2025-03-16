<?php

namespace Patterns\Creational\Factory\RPG2\Items\Factory;

use Patterns\Creational\Factory\RPG2\Items\Armor;
use Patterns\Creational\Factory\RPG2\Items\Bow;
use Patterns\Creational\Factory\RPG2\Items\LeatherArmor;
use Patterns\Creational\Factory\RPG2\Items\Weapon;

class ArcherItemsFactory implements ItemsFactoryInterface
{
    public function createWeapon(): Weapon
    {
        return new Bow();
    }

    public function createArmor(): Armor
    {
        return new LeatherArmor();
    }
}
