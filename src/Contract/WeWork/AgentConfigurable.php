<?php

declare(strict_types=1);
/**
 * This file is part of ZlChat.
 */
namespace ZlChat\Framework\Contract\WeWork;

interface AgentConfigurable
{
    public function agentConfig(?string $wxCorpId = null, ?array $agentId = null): array;
}
