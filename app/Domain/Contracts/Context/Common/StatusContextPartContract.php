<?php

namespace App\Domain\Contracts\Context\Common;

/**
 * Interface StatusContextPartContract
 *
 * @package App\Domain\Contracts\Context\Common
 */
interface StatusContextPartContract
{
    public const STATUS_OK = 'ok';

    public const STATUS_LIST = [
        self::STATUS_OK,
    ];

    /**
     * @param string $status
     */
    public function setStatus(string $status): void;

    /**
     * @return string
     */
    public function getStatus(): string;
}