<?php
require_once('./vendor/autoload.php');
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
$log = new Logger('name');
$log->pushHandler(new StreamHandler('mongolog.log', Logger::WARNING));
$log->warning('Foo');
$log->error('Bar');





















