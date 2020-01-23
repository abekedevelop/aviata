<?php
/**
 * Created by PhpStorm.
 * User: abk
 * Date: 1/23/20
 * Time: 11:00 PM
 */

namespace App\Domain\Processes\GetFlightData;


use App\Domain\Common\BaseProcess;
use App\Domain\Contracts\Context\RawFlightDataContextPartContract;
use App\Domain\Contracts\ContextContract;
use App\Helpers\HttpHelper;
use Illuminate\Support\Arr;

class SetFlightDataProcess extends BaseProcess
{
    /**
     * @param ContextContract|RawFlightDataContextPartContract $context
     * @return ContextContract
     */
    public function run(ContextContract $context): ContextContract
    {
        $httpHelper = HttpHelper::getInstance();

        $response = $httpHelper->get('https://api.skypicker.com/flights?fly_from=TSE&fly_to=ALA&date_from=18/05/2020&date_to=12/06/2020&partner=picky&v=3&curr=KZT');

        $data = Arr::get($response, 'data');

        $context->setRawFlightData($data);

        $rawData = $context->getRawFlightData();

        foreach ($rawData as $rawDatum) {
            dd($rawDatum);
        }

        dd($context);

        return $context;
    }
}