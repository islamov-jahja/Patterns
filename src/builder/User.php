<?php

namespace builder;
use builder\interfaces\UserInterface;

class User implements UserInterface
{
    private string $name;
    private int $age;
    private string $surname;
    private array $hobbies;
    private array $friends;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }

    public function setSurname(string $surname)
    {
        $this->surname = $surname;
    }

    public function setHobbies(array $hobbies)
    {
        $this->hobbies = $hobbies;
    }

    public function setFriends(array $friends)
    {
        $this->friends = $friends;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getHobbies(): array
    {
        return $this->hobbies;
    }

    public function getFriends(): array
    {
        return $this->friends;
    }
}