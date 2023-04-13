<?php

declare(strict_types=1);
/**
 * This file is part of ZlChat.
 */
namespace ZlChat\Framework\Provider\WeWork;

use ZlChat\Framework\Contract\WeWork\AgentConfigurable;

class AgentProvider extends AbstractProvider
{
    /**
     * @var AgentConfigurable
     */
    protected $service;

    /**
     * @return array app配置
     */
    protected function config(?string $wxCorpId = null, ?array $agentId = null): array
    {
        return $this->service->agentConfig($wxCorpId, $agentId);
    }
}
