<?php

require_once __DIR__ . '/../src/WebApplication.php';
require_once __DIR__ . '/../src/MainController.php';

use TUDublin\WebApplication;

$app = new WebApplication();
$app->run();