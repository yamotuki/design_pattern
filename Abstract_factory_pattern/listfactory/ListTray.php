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

/*            // PHPStormに型を教えるためだけのもの。なくても動く。多分。ありえないものは入ってくる可能性は？
            if (!$item instanceof Tray) {
                return;
            }*/

            $buffer[] = $item->makeHTML();
        }

        $buffer[] = "</ul> \n";
        $buffer[] = "</li> \n";

        return implode("", $buffer);
    }

}