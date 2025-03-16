<?php

namespace Patterns\Creational\Factory\RPG2\Items\Factory;

use Patterns\Creational\Factory\RPG2\Items\Armor;
use Patterns\Creational\Factory\RPG2\Items\Weapon;

interface ItemsFactoryInterface
{
    public function createWeapon(): Weapon;
    public function createArmor(): Armor;
}
