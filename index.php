<?php
spl_autoload_register(function (string $className) {
    require_once __DIR__ . '/src/' . str_replace('\\', '/', $className) . '.php';
});

//propertyContainer();
//delegation();
//eventChannel();
//abstractFactory();
//factoryMethod();
//staticFactory();
//simpleFactory();
singleton();

//контейнер свойств
function propertyContainer()
{
    $keyValueDatabase = new \propertyContainer\KeyValueDatabase('моя база');
    $keyValueDatabase->addProperty('kisa', 'мяу');
    var_dump($keyValueDatabase->getProperty('kisa'));
    $keyValueDatabase->deleteProperty('kisa');
    var_dump($keyValueDatabase->getProperty('kisa'));
}
//делегирование
function delegation()
{
    $textWriter = new \delegation\TextWriter();
    $textWriter->write();
    $textWriter->toWhereAreYouFromWriter()->write();
    $textWriter->toHelloWorldWriter()->write();
}

//канал событий
function eventChannel()
{
    $repository = new \eventChannel\Repository("моя первая программа");
    $workingDeveloper = new \eventChannel\Publisher("1234", $repository);
    $sleepingDeveloper = new \eventChannel\Subscriber();
    $repository->subscribe('1234', $sleepingDeveloper);

    $workingDeveloper->publish([
        'name' => 'bad boy',
        'surname' => 'so bad boy'
    ]);
}

/**
 * @throws Exception
 */
function abstractFactory()
{
    $carFactory = new \abstractFactory\CarFactory();
    var_dump($carFactory->getFactory(\abstractFactory\FordFactory::class)->getDoor());
    var_dump($carFactory->getFactory(\abstractFactory\NissanFactory::class)->getDoor());
}

// фабричный метод
function factoryMethod()
{
    var_dump((new \factoryMethod\NissanCarShop())->sellRedDoor());
    var_dump((new \factoryMethod\FordCarShop())->sellRedDoor());
}

//статическая фабрика
function staticFactory()
{
    \staticFactory\CarFactory::build(\staticFactory\Nissan::class)->startEngine();
    \staticFactory\CarFactory::build(\staticFactory\Ford::class)->startEngine();
}

//простая фабрика
function simpleFactory()
{
    $carFactory = new \simpleFactory\CarFactory();
    $carFactory->build(\staticFactory\Nissan::class)->startEngine();
    $carFactory->build(\staticFactory\Ford::class)->startEngine();
}

function singleton()
{
    $singletone = \singleton\Singleton::getInstance();
    $singletone->setName('fury');
    $singletone2 = \singleton\Singleton::getInstance();
    var_dump($singletone2->getName());
}