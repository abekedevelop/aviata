<?php

namespace App\Console\Commands;

use App\Contracts\SearchFlightUrlContract;
use App\Domain\Common\BaseHandler;
use App\Domain\Context\GetFlightsDataContext;
use App\Domain\Handlers\GetFlightDataHandler;
use App\Helpers\HttpHelper;
use GuzzleHttp\Psr7\Request;
use Illuminate\Console\Command;

class RequestFlightPrices extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'request:flight_price';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send request to api requesting flight prices';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function handle()
    {
        /** @var BaseHandler $handler */
        $handler = app()->make(GetFlightDataHandler::class);

        $handler->handle();

        $httpHelper = HttpHelper::getInstance();

        $response = $httpHelper->get('https://api.skypicker.com/flights?fly_from=TSE&fly_to=ALA&date_from=18/05/2020&date_to=12/06/2020&partner=picky&v=3');

    }
}
