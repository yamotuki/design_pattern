<?php

namespace Observer;

interface Observer {
    public function update(NumberGenerator $generator);
}