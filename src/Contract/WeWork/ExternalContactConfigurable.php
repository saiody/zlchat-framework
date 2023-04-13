<?php

declare(strict_types=1);
/**
 * This file is part of ZlChat.
 */
namespace ZlChat\Framework\Contract\WeWork;

interface ExternalContactConfigurable
{
    public function externalContactConfig(?string $wxCorpId = null, ?array $agentId = null): array;
}
