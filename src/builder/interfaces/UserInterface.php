<?php

namespace builder\interfaces;
interface UserInterface
{
    public function setName(string $name);
    public function setAge(int $age);
    public function setSurname(string $surname);
    public function setHobbies(array $hobbies);
    public function setFriends(array $friends);

    public function getName(): string;
    public function getAge(): int;
    public function getSurname(): string;
    public function getHobbies(): array;
    public function getFriends(): array;
}