<?php


namespace builder;


use builder\interfaces\UserBuilderInterface;
use builder\interfaces\UserInterface;

class UserBuilder implements UserBuilderInterface
{
    private UserInterface $user;

    public function create(): UserBuilderInterface
    {
        $this->user = new User();
        return $this;
    }
    public function setName(string $name): UserBuilderInterface
    {
        $this->user->setName($name);
        return $this;
    }

    public function setAge(int $age): UserBuilderInterface
    {
        $this->user->setAge($age);
        return $this;
    }

    public function setFriends(array $friends): UserBuilderInterface
    {
        $this->user->setFriends($friends);
        return $this;
    }

    public function setHobbies(array $hobbies): UserBuilderInterface
    {
        $this->user->setHobbies($hobbies);
        return $this;
    }

    public function setSurname(string $surname): UserBuilderInterface
    {
        $this->user->setSurname($surname);
        return $this;
    }

    public function get(): UserInterface
    {
        $user = $this->user;
        $this->user = new User();
        return $user;
    }
}