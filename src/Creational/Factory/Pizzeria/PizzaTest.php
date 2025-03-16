<?php

use Patterns\Creational\Factory\Pizzeria\AmericanPizzeria\AmericanPizzeria;
use Patterns\Creational\Factory\Pizzeria\ItalianPizzeria\ItalianPizzeria;

require_once '/app/vendor/autoload.php';

$italianPizzeria = new ItalianPizzeria;

// $americanPizzeria = new AmericanPizzeria;

$pizza = $italianPizzeria->orderPizza('cheese');

var_dump($pizza);

// $pizza = $americanPizzeria->orderPizza('cheese');
