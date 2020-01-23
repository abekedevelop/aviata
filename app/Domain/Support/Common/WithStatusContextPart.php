<?php

namespace App\Domain\Contexts\Support\Common;

use App\Domain\Contracts\Context\Common\StatusContextPartContract;
use InvalidArgumentException;

/**
 * Trait WithStatusContextPart
 *
 * @package App\Domain\Contexts\Support\Common
 */
trait WithStatusContextPart
{
    /**
     * @var string
     */
    private $status = StatusContextPartContract::STATUS_OK;

    /**
     * @return string
     */
    final public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    final public function setStatus(string $status): void
    {
        if (!in_array($status, StatusContextPartContract::STATUS_LIST, true)) {
            throw new InvalidArgumentException(
                sprintf('invalid status %s', $status)
            );
        }
        $this->status = $status;
    }
}