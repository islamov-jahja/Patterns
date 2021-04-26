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

//канал событий
$repository = new \eventChannel\Repository("моя первая программа");
$workingDeveloper = new \eventChannel\Publisher("1234", $repository);
$sleepingDeveloper = new \eventChannel\Subscriber();
$repository->subscribe('1234', $sleepingDeveloper);

$workingDeveloper->publish([
    'name' => 'bad boy',
    'surname' => 'so bad boy'
]);