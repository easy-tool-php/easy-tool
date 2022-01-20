<?php

return [
    'api' => [
        'route' => 'rest'
    ],
    'backend' => [
        'route' => 'admin'
    ],
    'cache' => [
        'adapter' => 'files'
    ],
    'database' => [
        'default' => [
            'driver' => 'Pdo_Mysql',
            'host' => 'easy_tool_mysql',
            'database' => 'project',
            'username' => 'project',
            'password' => 'project'
        ]
    ]
];
