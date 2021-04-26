<?php


namespace propertyContainer;


class PropertyContainer implements PropertyContainerInterface
{

    private array $container = [];

    public function addProperty(string $property, string $value): string
    {
        $this->container[$property] = $value;

        return $value;
    }

    public function updateProperty(string $property, string $value): string
    {
        if (!key_exists($property, $this->container)){
            throw new \Exception('свойство не найдено');
        }

        $this->container[$property] = $value;
        return $value;
    }

    public function deleteProperty(string $property): bool
    {
        $keyExists = key_exists($property, $this->container);

        if (!$keyExists){
            return false;
        }

        unset ($this->container[$property]);
        return true;
    }

    public function getProperty(string $property): ?string
    {
        return $this->container[$property] ?? null;
    }

    public function clear(): void
    {
        $this->container = [];
    }
}