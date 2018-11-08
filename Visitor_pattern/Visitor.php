<?php

namespace Visitor_pattern;

interface Visitor
{
    // MEMO PHPはオーバーロードができないので、とりあえずEntry と Fileがどちらも受けれる Entry で引数を設定してみる
    public function visitFile(FileEntry $entry);

    public function visitDirectory(DirectoryEntry $entry);
}