<?php

namespace Visitor_pattern;

class ListVisitor implements Visitor
{
    private $currentDir = "";

    public function visitFile(FileEntry $file)
    {
        echo($this->currentDir . '/' . $file . "\n");
    }

    public function visitDirectory(DirectoryEntry $directoryEntry)
    {
        echo($this->currentDir . '/' . $directoryEntry . "\n");

        $saveDir = $this->currentDir;
        $this->currentDir = $this->currentDir . '/' . $directoryEntry->getName();

        // TODO Iterator pattern を使った方が、内部構造を知らなくて良いので良い（forearchの場合にはArrayで順番がわかっているという糸になるが、Listなら順不同）
        foreach ($directoryEntry->getEntries() as $entry) {
            /** @var Entry $entry */
            $entry->accept($this);
        }

        $this->currentDir = $saveDir;
    }
}