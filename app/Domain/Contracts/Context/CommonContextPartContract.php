<?php

namespace App\Domain\Contracts\Context;

use App\Domain\Contracts\Context\Common\BreakContextPartContract;
use App\Domain\Contracts\Context\Common\FallibleContextPartContract;
use App\Domain\Contracts\Context\Common\StatusContextPartContract;

/**
 * Interface CommonContextPartContract
 *
 * @package App\Domain\Contracts\Context
 */
interface CommonContextPartContract extends
    BreakContextPartContract,
    StatusContextPartContract,
    FallibleContextPartContract
{
}