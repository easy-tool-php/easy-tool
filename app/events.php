<?php

return [
    'after_modules_init' => [
        ['listener' => 'EasyTool\Framework\App\Listener\CollectDependencyInjections'],
        ['listener' => 'EasyTool\Framework\App\Listener\CollectEvents'],
        ['listener' => 'EasyTool\Framework\App\Listener\CollectApiRoutes']
    ]
];
