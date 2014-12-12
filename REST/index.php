<?php

require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();
$app->config('debug', true);

require 'urls/idreceiver.php';

$app->run();

?>