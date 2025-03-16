<?php

namespace Patterns\Creational\DI;

// require_once '/app/vendor/autoload.php';

use Patterns\Creational\DI\TerrainPrototype\InjectConstructor;
use Symfony\Component\Yaml\Yaml;

class ObjectAssembler
{
    private array $components = [];

    public $data;

    public function __construct(string $conf)
    {
        $this->configure($conf);
    }

    private function configure(string $conf): void
    {
        $data = Yaml::parseFile($conf, Yaml::PARSE_OBJECT_FOR_MAP);

        $this->data = $data;

        // var_dump($data->objects);

        foreach ($data->objects as $object) {

            // var_dump($object->class->name);
            $args = [];
            $name = $object->class->name;
            $resolvedName = $name;

            $arguments = $object->class->arguments ?? [];
            foreach ($arguments as $arg) {
                $argClass = $arg->inst;
                $args[] = $argClass;
            }

            // var_dump($args);
            // var_dump($object->class->instance);

            if (isset($object->class->instance)) {
                $resolvedName = $object->class->instance;
            }

            $this->components[$name] = function () use ($resolvedName, $args) {
                $expandedArgs = [];
                foreach ($args as $arg) {
                    $expandedArgs[] = $this->getComponent($arg);
                }
                $rClass = new \ReflectionClass($resolvedName);

                return $rClass->newInstanceArgs($expandedArgs);
            };
        }
    }

    public function getComponent(string $class): object
    {
        if (isset($this->components[$class])) {
            $inst = $this->components[$class]();

            $rclass = new \ReflectionClass($inst::class);
            $methods = $rclass->getMethods();
        } else {
            $rclass = new \ReflectionClass($class);
            $methods = $rclass->getMethods();
            $injectconstructor = null;

            // var_dump($rclass->getName());

            foreach ($methods as $method) {
                // var_dump($method->getAttributes());
                foreach ($method->getAttributes(InjectConstructor::class) as $attribute) {
                    $injectconstructor = $attribute;
                    var_dump($attribute);
                    break;
                }
            }

            if (is_null($injectconstructor)) {
                $inst = $rclass->newInstance();
            } else {
                $constructorargs = [];
                foreach ($injectconstructor->getArguments() as $arg) {
                    $constructorargs[] = $this->getComponent($arg);
                }
                $inst = $rclass->newInstanceArgs($constructorargs);
            }
        }


        return $inst;
    }
}

// $test = new ObjectAssembler('/app/src/Creational/DI/conf.yml');
// var_dump($test->data);
