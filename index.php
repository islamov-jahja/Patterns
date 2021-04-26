<?php
spl_autoload_register(function (string $className) {
    require_once __DIR__ . '/src/' . str_replace('\\', '/', $className) . '.php';
});

//контейнер свойств
$keyValueDatabase = new \propertyContainer\KeyValueDatabase('моя база');
$keyValueDatabase->addProperty('kisa', 'мяу');
var_dump($keyValueDatabase->getProperty('kisa'));
$keyValueDatabase->deleteProperty('kisa');
var_dump($keyValueDatabase->getProperty('kisa'));

//делегирование
$textWriter = new \delegation\TextWriter();
$textWriter->write();
$textWriter->toWhereAreYouFromWriter()->write();
$textWriter->toHelloWorldWriter()->write();