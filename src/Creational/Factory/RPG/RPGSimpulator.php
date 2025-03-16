<?php

require_once '/app/vendor/autoload.php';

use Patterns\Creational\Factory\RPG\MageCharacterFactory;
use Patterns\Creational\Factory\RPG\Character;
use Patterns\Creational\Factory\RPG\WarriorCharacterFactory;

// A simple function to simulate using a character
function playCharacter(Character $character): void
{
    echo "Playing as: " . $character->getName() . PHP_EOL;
    echo "Damage output: " . $character->attack() . PHP_EOL;
    echo "Defense rating: " . $character->defend() . PHP_EOL;
    echo "Special ability power: " . $character->specialAbility() . PHP_EOL;
    echo PHP_EOL;
}

// Client code chooses a factory to create a character.
// In this case, we're creating a Mage.
$mageFactory = new MageCharacterFactory();

// Create a Mage character with the name "Gandalf"
$mageCharacter = $mageFactory->create('Gandalf');

// Use the character in our game logic
playCharacter($mageCharacter);

$warriorFactory = new WarriorCharacterFactory();
$warrior = $warriorFactory->create('Gimli');
playCharacter($warrior);
