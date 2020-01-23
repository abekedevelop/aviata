<?php


namespace App\Domain\Command;



use App\Domain\Common\BaseProcessCommand;
use App\Domain\Processes\GetFlightData\SetFlightDataProcess;

class GetFlightDataCommand extends BaseProcessCommand
{
    protected $processes = [
        SetFlightDataProcess::class,
    ];
}
