<?php
/**
 * Created by PhpStorm.
 * User: abk
 * Date: 1/23/20
 * Time: 11:25 PM
 */

namespace App\Domain\Contracts\Context;



interface RawFlightDataContextPartContract
{

    public function setRawFlightData($rawData): void;


    public function getRawFlightData();
}