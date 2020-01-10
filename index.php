<?php
/**
 * Marcos Rivera
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

$f3 = Base::instance();

$f3->route('GET /', function() {
    echo "<h1>Howdy!</h1>";
});

$f3->run();
