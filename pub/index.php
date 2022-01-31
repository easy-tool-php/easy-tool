<?php

use EasyTool\Framework\Bootstrap;

$classLoader = require __DIR__ . '/../vendor/autoload.php';
Bootstrap::getInstance()->createApplication($classLoader, dirname(__DIR__))->handleHttp();
