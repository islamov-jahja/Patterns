<?php

namespace propertyContainer;

interface PropertyContainerInterface
{
    /**
     * @param string $property
     * @param string $value
     * @return string
     */
    public function addProperty(string $property, string $value): string;

    /**
     * @param string $property
     * @param string $value
     * @return string
     * @throws \Exception
     */
    public function updateProperty(string $property, string $value): string;

    /**
     * @param string $property
     * @return bool
     */
    public function deleteProperty(string $property): bool;

    /**
     * @param string $property
     * @return string|null
     */
    public function getProperty(string $property): ?string;

    /**
     * @return void
     */
    public function clear(): void;
}