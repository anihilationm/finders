<?php

$words = require_once "words.php";
require_once "finders.php";

//search
foreach($words as $word) {
    print "Searching for $word:\n";

    foreach($finders as $finder_id => $finder) {
        $result = $finder->search($word);

        print "\t$finder_id -> is found = " . ($result['result'] ? 'YES' : 'NO');
        print PHP_EOL;
    }
}