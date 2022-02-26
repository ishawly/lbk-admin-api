<?php

declare(strict_types=1);
/**
 * This file is part of Little Bookkeeping Project.
 * Developed By Shawly
 *
 * @link     https://www.shawly.cn
 * $contact  liber@shawly.cn
 */
return [
    'default' => [
        'handler' => [
            'class'       => Monolog\Handler\StreamHandler::class,
            'constructor' => [
                'stream' => BASE_PATH . '/runtime/logs/hyperf.log',
                'level'  => Monolog\Logger::DEBUG,
            ],
        ],
        'formatter' => [
            'class'       => Monolog\Formatter\LineFormatter::class,
            'constructor' => [
                'format'                => null,
                'dateFormat'            => 'Y-m-d H:i:s',
                'allowInlineLineBreaks' => true,
            ],
        ],
    ],
];
