<?php

namespace Facade;


class PageMaker
{
    private function __construct()
    {
    }

    public static function makeWelcomePage(string $mailAddr, string $filename)
    {
        $mailProp = Database::getProperties('maildata');

        $userName = $mailProp[$mailAddr];

        $writer = new HtmlWriter($filename);

        $writer->title("Welcome to " . $userName . " 's Page");
        $writer->paragraph($userName . "のページへようこそ");
        $writer->paragraph("メール待ってますね");
        $writer->mailTo($mailAddr, $userName);
        $writer->close();

        echo($filename . " is created for " . $mailAddr . "(" . $userName . ") \n");

    }

}