<?php

namespace App\Console\Commands;

use App\Contracts\SearchFlightUrlContract;
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
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $client = new \GuzzleHttp\Client();

        $searchUrl = SearchFlightUrlContract::SEARCH_FLIGHT_URL;

        $response = $client->request('GET', $searchUrl);
    }
}
