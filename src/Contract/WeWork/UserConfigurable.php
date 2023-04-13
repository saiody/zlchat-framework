<?php

declare(strict_types=1);
/**
 * This file is part of ZlChat.
 */
namespace ZlChat\Framework\Contract\WeWork;

interface UserConfigurable
{
    public function userConfig(?string $wxCorpId = null): array;
}
