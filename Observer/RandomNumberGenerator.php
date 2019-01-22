<?php

namespace Observer;

class RandomNumberGenerator extends NumberGenerator
{
    private $number;

    public function getNumber(): int
    {
        return $this->number;
    }

    public function execute()
    {
        for ($i = 1; $i < 20 ; $i++) {
            $this->number = rand(1,50);
            $this->notifyObservers();
        }
    }
}