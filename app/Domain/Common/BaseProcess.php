<?php
/**
 * @noinspection MethodShouldBeFinalInspection
 */

namespace App\Domain\Common;

use App\Domain\Contracts\ContextContract;
use App\Domain\Contracts\ProcessContract;

/**
 * Class BaseProcess
 *
 * @package App\Domain\Common
 */
abstract class BaseProcess implements ProcessContract
{
    /**
     * @param ContextContract $context
     *
     * @return ContextContract
     */
    abstract public function run(ContextContract $context): ContextContract;
}