<?php

require_once "factory/Tray.php";

class TableTray extends Tray
{
    public function __construct(string $caption)
    {
        parent::__construct($caption);
    }

    public function makeHTML(): string
    {
        $buffer = "";
        // TODO: Implement makeHTML() method.
        $buffer .= "<td>";

        $buffer .= "<table width=\'100\' border=\'1\'><tr>";
        $buffer .= "<td bgcolor='#cccccc' align='center' colspan=" . count($this->tray) . "><b>" . $this->caption . "</b></td>";

        $buffer .= "</tr>\n";
        $buffer .= "<tr>";

        foreach ($this->tray as $item) {
            $buffer .= $item->makeHTML();
        }

        $buffer .= "</tr></table>";
        $buffer .= "</td>";

        return $buffer;
    }
}