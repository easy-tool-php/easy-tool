<?php

use EasyTool\Framework\App;

$classLoader = require __DIR__ . '/../vendor/autoload.php';

App\ObjectManager::getInstance()
    ->get(App::class, ['classLoader' => $classLoader, 'directoryRoot' => dirname(__DIR__)])
    ->handleHttp();
