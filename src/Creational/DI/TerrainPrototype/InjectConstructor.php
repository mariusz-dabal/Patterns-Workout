<?php

namespace Patterns\Creational\DI\TerrainPrototype;

use Attribute;

#[Attribute]
class InjectConstructor
{
    public function __construct() {}
}
