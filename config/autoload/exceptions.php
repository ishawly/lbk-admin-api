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
    'handler' => [
        'http' => [
            Hyperf\HttpServer\Exception\Handler\HttpExceptionHandler::class,
            App\Exception\Handler\AppExceptionHandler::class,
        ],
    ],
];
