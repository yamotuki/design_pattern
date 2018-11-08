<?php

namespace Visitor_pattern;

require_once __DIR__ . "/../vendor/autoload.php";

try {
    echo("making root entries ..." . "\n");
    $rootDir = new DirectoryEntry("root");

    $binDir = new DirectoryEntry("bin");
    $tmpDir = new DirectoryEntry("tmp");
    $usrDir = new DirectoryEntry("usr");

    $rootDir->add($binDir);
    $rootDir->add($tmpDir);
    $rootDir->add($usrDir);

    $binDir->add(new FileEntry("vi", 10000));
    $binDir->add(new FileEntry("latex", 20000));

    $rootDir->accept(new ListVisitor());

    echo("" . "\n");
    echo("making user entries ..." . "\n");

    $suzuki = new DirectoryEntry("suzuki");
    $arai = new DirectoryEntry("arai");
    $tasai = new DirectoryEntry("tasai");

    $usrDir->add($suzuki);
    $usrDir->add($arai);
    $usrDir->add($tasai);

    $suzuki->add(new FileEntry("poem.html", 10000000));
    $suzuki->add(new FileEntry("Composite.php", 100));
    $arai->add(new FileEntry("memo.txt", 200));
    $tasai->add(new FileEntry("game.doc", 300));

    $file = new FileEntry("junk.txt", 400);
    $tasai->add($file);

    $rootDir->accept(new ListVisitor());

} catch (FileTreatmentException $e) {
    echo $e;
}
