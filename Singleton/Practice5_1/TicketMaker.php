<?php

namespace Design_pattern\Singleton\Practice5_1;

class TicketMaker
{
    private static $ticket = 1000;
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance(): TicketMaker
    {
        if(!isset(TicketMaker::$instance)){
            TicketMaker::$instance = new TicketMaker();
        }
        return TicketMaker::$instance;
    }

    public function getNextTicketNumber()
    {
        return TicketMaker::$ticket++;
    }
}