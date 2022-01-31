<?php

return [
    'preferences' => [
        'Psr\Http\Message\RequestInterface'         => 'EasyTool\Framework\Http\Message\Request',
        'Psr\Http\Message\ResponseInterface'        => 'EasyTool\Framework\Http\Message\Response',
        'Psr\Http\Message\StreamInterface'          => 'EasyTool\Framework\Http\Message\Stream',
        'Psr\Http\Message\UriInterface'             => 'EasyTool\Framework\Http\Message\Uri',
        'Psr\Http\Message\RequestFactoryInterface'  => 'EasyTool\Framework\App\Http\Message\RequestFactory',
        'Psr\Http\Message\ResponseFactoryInterface' => 'EasyTool\Framework\App\Http\Message\ResponseFactory',
        'Psr\Http\Message\StreamFactoryInterface'   => 'EasyTool\Framework\App\Http\Message\StreamFactory',
        'Psr\Http\Message\UriFactoryInterface'      => 'EasyTool\Framework\App\Http\Message\UriFactory',
        'Psr\Http\Message\ServerRequestInterface'   => 'EasyTool\Framework\App\Http\Server\Request',
        'Psr\Http\Server\RequestHandlerInterface'   => 'EasyTool\Framework\App\Http\Server\Request\Handler',
    ],
    'types'       => [
        'EasyTool\Framework\App\Cache\Manager'      => [
            'parameters' => [
                'cacheItems'       => [
                    'modules' => true
                ],
                'storageFactories' => [
                    'redis' => 'EasyTool\Framework\App\Cache\Adapter\RedisFactory'
                ]
            ]
        ],
        'EasyTool\Framework\App\Session\Middleware' => [
            'parameters' => [
                'adapters' => [
                    'files' => 'EasyTool\Framework\App\Session\Adapter\Files',
                    'redis' => 'EasyTool\Framework\App\Session\Adapter\Redis'
                ]
            ]
        ]
    ]
];
