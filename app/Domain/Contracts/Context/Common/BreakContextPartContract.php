<?php

namespace App\Domain\Contracts\Context\Common;

use App\Domain\Contracts\ContextContract;
use App\Domain\Contracts\ProcessContract;

/**
 * Interface BreakContextPartContract
 *
 * @package App\Domain\Contracts\Context\Common
 *
 * @method setBreakProcess(ProcessContract $process);
 */
interface BreakContextPartContract extends ContextContract
{
    /**
     * @return bool
     */
    public function hasBreak(): bool;

    /**
     * @return string
     */
    public function getBreakProcess(): string;
}