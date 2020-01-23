<?php

namespace App\Domain\Contexts\Support;

use App\Domain\Contexts\Support\Common\WithBreakProcessContextPart;
use App\Domain\Contexts\Support\Common\WithFailContextPart;
use App\Domain\Contexts\Support\Common\WithStatusContextPart;

/**
 * Trait WithCommonContextParts
 *
 * @package App\Domain\Contexts\Support
 */
trait WithCommonContextParts
{
    use WithBreakProcessContextPart,
        WithFailContextPart,
        WithStatusContextPart;
}