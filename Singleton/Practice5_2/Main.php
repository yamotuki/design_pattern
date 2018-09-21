<?php
require_once "Tripleton.php";

try {
    for ($id = 0; $id < 3; $id++) {
       $obj[$id] = Triple::getInstance($id);
    }
} catch (Exception $e) {
    print $e;
}

if ($obj[0] === $obj[1]) {
    print "同じ";
} else {
    print "違う";
}