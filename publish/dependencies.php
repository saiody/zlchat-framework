<?php

declare(strict_types=1);
/**
 * This file is part of ZlChat.
 */
use Hyperf\Contract\StdoutLoggerInterface;
use ZlChat\Framework\Log\StdoutLoggerFactory;

$dependencies = [];

$appEnv = env('APP_ENV', 'production');
if ($appEnv !== 'dev') {
    $dependencies[StdoutLoggerInterface::class] = StdoutLoggerFactory::class;
}

return $dependencies + [
];
