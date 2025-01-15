<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\config\Bootstrap;

$current_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if ($current_url == 'http://127.0.0.1:8000/') {
    header('Location: /listar');
    exit();
}

$bootstrap = new Bootstrap();
$bootstrap->handle();
