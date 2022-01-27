<?php

return [
    'api'      => [
        'route' => 'rest'
    ],
    'backend'  => [
        'route' => 'admin'
    ],
    'cache'    => [
        'adapter' => 'redis',
        'options' => [
            'database' => 0,
            'server'   => [
                'host' => 'easy_tool_redis'
            ]
        ]
    ],
    'database' => [
        'default' => [
            'driver'  => 'Pdo_Mysql',
            'host'     => 'easy_tool_mysql',
            'database' => 'project',
            'username' => 'project',
            'password' => 'project'
        ]
    ]
];
