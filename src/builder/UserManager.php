<?php


namespace builder;


use builder\interfaces\UserBuilderInterface;
use builder\interfaces\UserInterface;

class UserManager
{
    public function __construct(private UserBuilderInterface $builder){}

    public function setbuilder(UserBuilderInterface $builder)
    {
        $this->builder = $builder;
    }

    public function getCleanUser(): UserInterface
    {
        return $this->builder->create()->get();
    }

    public function getSuperman(): UserInterface
    {
        return $this->builder->setAge(1512)
            ->setName('super')
            ->setSurname('man')
            ->setFriends(['all' => 'peoples'])
            ->get();
    }
}