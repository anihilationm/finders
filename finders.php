<?php

//finders
require_once "Finders/googleFinder.php";
$googleSearch = new GoogleFinder();

require_once "Finders/arrayFinder.php";
$arraySearch = new arraySearch();

require_once "Finders/simple.php";
$simpleSearch = new MySimpleFinder();


// adapters
require_once "Adapters/arrayFinderAdapter.php";
$arraySearchAdapter = new arraySearchAdapter($arraySearch);

require_once "Adapters/simpleAdapter.php";
$simpleSearchAdapter = new MySimpleFinderAdapter($simpleSearch);

$finders = [
    'google_finder' => $googleSearch,
    'array_search' => $arraySearchAdapter,
    'simple_search' => $simpleSearchAdapter
];