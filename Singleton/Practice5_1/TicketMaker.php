<?php

namespace Design_pattern\Singleton\Practice5_1;

class TicketMaker
{
    private static $ticket = 1000;
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance(): self
    {
        if(!isset(static::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getNextTicketNumber()
    {
        return self::$ticket++;
    }
}