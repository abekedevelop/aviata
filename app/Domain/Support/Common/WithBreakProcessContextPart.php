<?php

namespace App\Domain\Contexts\Support\Common;

use App\Domain\Contracts\ProcessContract;

/**
 * Trait WithBreakProcessContextPart
 *
 * @package App\Domain\Contexts\Support\Common
 */
trait WithBreakProcessContextPart
{
    /**
     * @var string
     */
    protected $processName;

    /**
     * @param ProcessContract $process
     */
    final public function setBreakProcess(ProcessContract $process): void
    {
        $this->processName = get_class($process);
    }

    /**
     * @return string
     */
    final public function getBreakProcess(): string
    {
        return $this->processName;
    }
}