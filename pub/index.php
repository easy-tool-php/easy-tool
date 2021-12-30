<?php

require __DIR__ . '/../vendor/autoload.php';

Bootstrap::getInstance()->createApplication()->handleHttp();
