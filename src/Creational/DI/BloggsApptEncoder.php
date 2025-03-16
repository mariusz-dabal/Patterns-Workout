<?php

namespace Patterns\Creational\DI;

class BloggsApptEncoder extends ApptEncoder
{
    public function encode(): string
    {
        return "Bloggs apointment!" . PHP_EOL;
    }
}
