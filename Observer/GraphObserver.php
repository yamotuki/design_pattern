<?php

namespace Observer;

class GraphObserver implements Observer
{
    public function update(NumberGenerator $generator)
    {
        $count = $generator->getNumber();
        echo "Graph Observer: ";
        for ($i = 0; $i < $count; $i++) {
            echo "*";
        }
        echo "\n";

        usleep(10000);
    }
}