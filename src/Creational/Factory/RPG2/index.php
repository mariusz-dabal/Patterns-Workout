<?php

require_once '/app/vendor/autoload.php';

use Patterns\Creational\Factory\RPG2\Character\Enum\CharacterEnum;
use Patterns\Creational\Factory\RPG2\Character\Factory\ArcherFactory;
use Patterns\Creational\Factory\RPG2\Character\Factory\MageFactory;
use Patterns\Creational\Factory\RPG2\Character\Factory\WarriorFactory;
use Patterns\Creational\Factory\RPG2\Items\Factory\ArcherItemsFactory;
use Patterns\Creational\Factory\RPG2\Items\Factory\MageItemsFactory;
use Patterns\Creational\Factory\RPG2\Items\Factory\WarriorItemsFactory;

$characterTypeInput = readline(
    'Choose your Character:' . PHP_EOL
        . '1. Warrior' . PHP_EOL
        . '2. Mage' . PHP_EOL
        . '3. Archer' . PHP_EOL
);

$characterNameInput = readline('Choose your Characters name: ');

$characterFactory = match (CharacterEnum::from($characterTypeInput)) {
    CharacterEnum::Warrior => new WarriorFactory(new WarriorItemsFactory()),
    CharacterEnum::Mage => new MageFactory(new MageItemsFactory()),
    CharacterEnum::Archer => new ArcherFactory(new ArcherItemsFactory()),
};

$character = $characterFactory->create($characterNameInput);

echo $character->getName() . PHP_EOL;
echo $character->attack() . PHP_EOL;
echo $character->getWeapon()->getName() . PHP_EOL;
echo $character->getArmor()->getName() . PHP_EOL;
