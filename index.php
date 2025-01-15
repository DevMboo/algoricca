<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\config\Bootstrap;

$bootstrap = new Bootstrap();
$bootstrap->handle();
