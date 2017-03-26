<?php

$manager = new MongoDB\Driver\Manager('mongodb://mongo:27017');
$command = new MongoDB\Driver\Command(['ping' => 1]);

try {
    $cursor = $manager->executeCommand('admin', $command);
} catch(MongoDB\Driver\Exception $e) {
    throw $e;
}

$response = $cursor->toArray()[0];

var_dump($response);