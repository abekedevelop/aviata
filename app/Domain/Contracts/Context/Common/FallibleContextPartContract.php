<?php

namespace App\Domain\Contracts\Context\Common;

use Throwable;

/**
 * Interface FallibleContextPartContract
 *
 * @package App\Domain\Contracts\Context\Common
 * @method setFail(Throwable $fail)
 */
interface FallibleContextPartContract
{
    /**
     * @return bool
     */
    public function hasFail(): bool;

    /**
     * @return Throwable
     */
    public function getFail(): Throwable;

}