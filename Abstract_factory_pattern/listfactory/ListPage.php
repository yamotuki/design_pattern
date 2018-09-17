<?php
require_once "factory/Page.php";

class ListPage extends Page
{
    public function __construct(string $title, string $author)
    {
        parent::__construct($title, $author);
    }

    public function makeHTML(): string
    {
        $buffer = [];

        $buffer[] = "<html><head><title>" . $this->title . "</title></head> \n";
        $buffer[] = "<body> \n";
        $buffer[] = "<h1>" .$this->title. "</h1> \n";

        $buffer[] = "<ul> \n";

        foreach ($this->content as $item) {
/*            if (!$item instanceof Item) {
                return;
            }*/

            $buffer[] = $item->makeHTML();
        }

        $buffer[] = "</ul> \n";
        $buffer[] = "<hr> <address>" . $this->author . "</address>";

        $buffer[] = "</body> </html> \n";

        return implode("", $buffer);
    }
}