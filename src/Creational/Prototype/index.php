<?php

use Patterns\Creational\Prototype\Enemies\EnemyRegistry;
use Patterns\Creational\Prototype\Enemies\Goblin;

require_once '/app/vendor/autoload.php';

$registry = new EnemyRegistry();
$registry->register('Goblin', new Goblin());

$goblin1 = $registry->get('Goblin');
$goblin1->setName('Gary');

$goblin2 = $registry->get('Goblin');
$goblin3 = $registry->get('Goblin');
$goblin4 = $registry->get('Goblin');
$goblin5 = $registry->get('Goblin');

var_dump($goblin1, $goblin2, $goblin3, $goblin4);
