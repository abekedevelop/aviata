<?php

namespace App\Domain\Contexts\Support\Common;

use Throwable;

/**
 * Trait WithFailContextPart
 *
 * @package App\Domain\Contexts\Support\Common
 */
trait WithFailContextPart
{
    /**
     * @var Throwable
     */
    protected $fail;

    /**
     * @return bool
     */
    final public function hasFail(): bool
    {
        return $this->fail !== null;
    }

    /**
     * @return Throwable
     */
    final public function getFail(): Throwable
    {
        return $this->fail;
    }

    /**
     * @param Throwable $fail
     */
    final public function setFail(Throwable $fail): void
    {
        $this->fail = $fail;
    }
}