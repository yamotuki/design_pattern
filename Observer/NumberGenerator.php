<?php

namespace Observer;

abstract class NumberGenerator
{
    private $observers = [];

    public function addObserver(Observer $observer)
    {
        $this->observers[spl_object_hash($observer)] = $observer;
    }

    public function deleteObserver(Observer $observer)
    {
        unset($this->observers[spl_object_hash($observer)]);
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            /** @var Observer $observer */
            $observer->update($this);
        }
    }

    public abstract function getNumber(): int;

    public abstract function execute();
}