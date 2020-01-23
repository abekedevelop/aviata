<?php


namespace App\Domain\Common;


use App\Domain\Common\Traits\GetCommandFactory;
use App\Domain\Contracts\CommandContract;
use App\Domain\Contracts\ContextContract;

abstract class BaseCommand implements CommandContract
{
    use GetCommandFactory;

    abstract public function handle(ContextContract $context): ContextContract;
}
