<?php

declare(strict_types=1);
/**
 * This file is part of Little Bookkeeping Project.
 * Developed By Shawly
 *
 * @link     https://www.shawly.cn
 * $contact  liber@shawly.cn
 */
namespace App\Controller;

class IndexController extends AbstractController
{
    public function index()
    {
        $user   = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();

        return [
            'method'  => $method,
            'message' => "Hello {$user}.",
        ];
    }
}
