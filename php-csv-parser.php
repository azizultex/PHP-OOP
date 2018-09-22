<?php

require __DIR__ . '/vendor/autoload.php';
$parser = \KzykHys\CsvParser\CsvParser::fromFile('./assets/data.csv');
$result = $parser->parse();

var_dump($result);