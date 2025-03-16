<?php

namespace Patterns\Creational\Factory\RPG2\Items\Factory;

use Patterns\Creational\Factory\RPG2\Items\Armor;
use Patterns\Creational\Factory\RPG2\Items\HeavyArmor;
use Patterns\Creational\Factory\RPG2\Items\Sword;
use Patterns\Creational\Factory\RPG2\Items\Weapon;

class WarriorItemsFactory implements ItemsFactoryInterface
{
    public function createWeapon(): Weapon
    {
        return new Sword();
    }

    public function createArmor(): Armor
    {
        return new HeavyArmor();
    }
}
