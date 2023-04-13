<?php

declare(strict_types=1);
/**
 * This file is part of ZlChat.
 */
namespace ZlChat\Framework\Log;

use Hyperf\Utils\ApplicationContext;

class Log
{
    public static function get(string $name = 'app')
    {
        return ApplicationContext::getContainer()->get(\Hyperf\Logger\LoggerFactory::class)->get($name);
    }
}
