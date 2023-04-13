<?php

declare(strict_types=1);
/**
 * This file is part of ZlChat.
 */
namespace ZlChat\Framework\Log;

use Psr\Container\ContainerInterface;

class StdoutLoggerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return Log::get('sys');
    }
}
