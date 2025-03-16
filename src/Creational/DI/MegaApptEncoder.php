<?php

namespace Patterns\Creational\DI;

class MegaApptEncoder extends ApptEncoder
{
    public function encode(): string
    {
        return "Mega apointment!" . PHP_EOL;
    }
}
