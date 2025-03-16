<?php

require_once '/app/vendor/autoload.php';

use Patterns\Creational\DI\AppointmentMaker;
use Patterns\Creational\DI\ApptEncoder;
use Patterns\Creational\DI\MegaApptEncoder;
use Patterns\Creational\DI\ObjectAssembler;
use Patterns\Creational\DI\TerrainPrototype\TerrainFactory;

// $assembler = new ObjectAssembler('/app/src/Creational/DI/conf.yml');
// $encoder = $assembler->getComponent(ApptEncoder::class);
// $apptmaker = new AppointmentMaker($encoder);
// $out = $apptmaker->makeAppointment();
// print $out;

// $encoder = $assembler->getComponent(MegaApptEncoder::class);
// $apptmaker = new AppointmentMaker($encoder);
// $out = $apptmaker->makeAppointment();
// print $out;

// $assembler = new ObjectAssembler('/app/src/Creational/DI/conf.yml');
// $apptmaker = $assembler->getComponent(AppointmentMaker::class);
// $out = $apptmaker->makeAppointment();
// print $out;

$assembler = new ObjectAssembler('/app/src/Creational/DI/conf.yml');
$terrainfactory = $assembler->getComponent(TerrainFactory::class);
$plains = $terrainfactory->getPlains();
