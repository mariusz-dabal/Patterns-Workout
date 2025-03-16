<?php


require_once '/app/vendor/autoload.php';

use Patterns\Behavioral\Strategy\Duck\CommonDuck;
use Patterns\Behavioral\Strategy\Duck\FlyStrategy\FlyingWithRocket;
use Patterns\Behavioral\Strategy\Duck\ModelDuck;

$duck = new CommonDuck();

$duck->executeQuack();
print PHP_EOL;

$duck->executeFly();
print PHP_EOL;

print PHP_EOL;

$modelDuck = new ModelDuck();

$modelDuck->executeQuack();
print PHP_EOL;

$modelDuck->executeFly();
print PHP_EOL;

$modelDuck->setFlyingInterface(new FlyingWithRocket());
$modelDuck->executeFly();
print PHP_EOL;
