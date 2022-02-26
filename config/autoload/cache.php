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
        'driver' => Hyperf\Cache\Driver\RedisDriver::class,
        'packer' => Hyperf\Utils\Packer\PhpSerializerPacker::class,
        'prefix' => 'c:',
    ],
];
