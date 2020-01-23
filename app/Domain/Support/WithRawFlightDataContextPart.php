<?php
/**
 * Created by PhpStorm.
 * User: abk
 * Date: 1/23/20
 * Time: 11:27 PM
 */

namespace App\Domain\Support;


trait WithRawFlightDataContextPart
{
    private $rawFlightData;

    public function setRawFlightData($rawFlightData): void
    {
        $this->rawFlightData = $rawFlightData;
    }

    public function getRawFlightData()
    {
        return $this->rawFlightData;
    }
}