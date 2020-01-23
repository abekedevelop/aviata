<?php


namespace App\Domain\Handlers;


use App\Domain\Command\GetFlightDataCommand;
use App\Domain\Common\BaseHandler;
use App\Domain\Contexts\GetFlightsDataContext;
use App\Domain\Contracts\ContextContract;

class GetFlightDataHandler extends BaseHandler
{
    public function handle(): ContextContract
    {
        /** @var ContextContract $context */
        $context = app()->make(GetFlightsDataContext::class);


        $this->getCommandFactory()
            ->make(GetFlightDataCommand::class)
            ->handle($context);

        return $context;
    }
}
