<?php

namespace Design_pattern\Singleton\Practice5_1;

class TicketMaker
{
    private static $ticket = 1000;

    private function __construct(){}

    public static function getNextTicketNumber(){
        return TicketMaker::$ticket++;
    }
}