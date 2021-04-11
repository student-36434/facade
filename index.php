<?php

include_once __DIR__ . '\Classes\Facade.php';
include_once __DIR__ . '\Classes\Subsystem1.php';
include_once __DIR__ . '\Classes\Subsystem2.php';
include_once __DIR__ . '\Classes\Subsystem3.php';
include_once __DIR__ . '\Classes\Subsystem4.php';

use facade\Classes\Facade;
use facade\Classes\Subsystem1;
use facade\Classes\Subsystem2;

$subsystem1 = new Subsystem1();
$subsystem2 = new Subsystem2();

//subsystem1 i subsystem2 zostały utworzone wcześniej, subsystem3 i subsystem4 zostaną utworzone w konstruktorze Facade
$facade = new Facade($subsystem1, $subsystem2);

function useFacade(Facade $facade) {
    echo $facade->operation();
}

useFacade($facade);
