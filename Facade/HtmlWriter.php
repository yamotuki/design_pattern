<?php

namespace Facade;

class HtmlWriter
{
    // Java ではファイルの書き出しにWriterを使っておりプロパティに保持しているが、PHPだと単に file_put_contents を使用すれば良い
    // 書き出す先のファイルを外部から渡しているので合わせる感じで outFileName をクラス変数に入れる。
    private $outFileName;

    public function __construct(string $outFileName)
    {
        $this->outFileName = $outFileName;
    }

    public function title(string $title)
    {
        $buffer = "";
        $buffer .= "<html><head><title>" . $title . "</title></head><body>\n ";
        $buffer .= "<h1>" . $title . "</h1> \n";

        file_put_contents($this->outFileName, $buffer);
    }

    public function paragraph(string $msg)
    {
        file_put_contents($this->outFileName, "<p>" . $msg . "</p> \n", FILE_APPEND);
    }

    public function link(string $href, string $caption)
    {
        $this->paragraph("<a href=\"" . $href . "\">" . $caption . "</a>");
    }

    public function mailTo(string $mailaddr, string $userName)
    {
        $this->link("mailto:" . $mailaddr, $userName);
    }

    public function close()
    {
        $buffer = "";
        $buffer .= "</body>";
        $buffer .= "</html> \n";

        file_put_contents($this->outFileName, $buffer, FILE_APPEND);
    }

}