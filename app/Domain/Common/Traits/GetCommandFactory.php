<?php


namespace App\Domain\Common\Traits;


use App\Domain\Contracts\CommandFactoryContract;

trait GetCommandFactory
{
    public function getCommandFactory(): CommandFactoryContract
    {
        return app()->make(CommandFactoryContract::class);
    }
}
