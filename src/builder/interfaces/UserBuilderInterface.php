<?php


namespace builder\interfaces;


interface UserBuilderInterface
{
    public function create(): self;
    public function setName(string $name): self;
    public function setAge(int $age): self;
    public function setFriends(array $friends): self;
    public function setHobbies(array $hobbies): self;
    public function setSurname(string $surname): self;
    public function get(): UserInterface;
}