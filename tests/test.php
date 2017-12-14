<?php

require_once __DIR__.'/../vendor/autoload.php';

$passed = interface_exists('Tidal\\Zipkin\\B3Headers');
echo PHP_EOL.'Test ';
echo $passed ? 'passed' : 'failed';

exit((int)!$passed);