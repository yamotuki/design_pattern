<?php
require_once "factory/Tray.php";

class ListTray extends Tray
{
    public function __construct(string $caption)
    {
        parent::__construct($caption);
    }

    public function makeHTML(): string
    {
        $buffer = [];
        $buffer[] = "<li>\n";
        $buffer[] = "$this->caption \n";
        $buffer[] = "<ul> \n";

        foreach ($this->tray as $item) {
            $buffer[] = $item->makeHTML();
        }

        $buffer[] = "</ul> \n";
        $buffer[] = "</li> \n";

        return implode("", $buffer);
    }

}