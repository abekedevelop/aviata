<?php


namespace App\Domain\Handlers;


use App\Domain\Common\BaseHandler;
use App\Domain\Context\GetFlightsDataContext;
use App\Domain\Contracts\ContextContract;

class GetFlightDataHandler extends BaseHandler
{
    public function handle(): ContextContract
    {
        $context = app()->make(GetFlightsDataContext::class);

        dd($context);
    }
}
