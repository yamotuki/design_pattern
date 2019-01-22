<?php

namespace Observer;

class DigitObserver implements Observer
{
    public function update(NumberGenerator $generator)
    {
        echo "Digit Observer: " . $generator->getNumber() .  "\n";
        usleep(10000);
    }
}