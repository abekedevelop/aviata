<?php
/**
 * Created by PhpStorm.
 * User: abk
 * Date: 1/22/20
 * Time: 8:50 PM
 */

namespace App\Domain\Contexts;


use App\Domain\Common\CollectionContext;
use App\Domain\Contexts\Support\WithCommonContextParts;
use App\Domain\Contracts\Context\Common\StatusContextPartContract;
use App\Domain\Contracts\Context\CommonContextPartContract;
use App\Domain\Contracts\Context\RawFlightDataContextPartContract;
use App\Domain\Support\WithRawFlightDataContextPart;

class GetFlightsDataContext extends CollectionContext implements
    CommonContextPartContract,
    RawFlightDataContextPartContract
{
    use WithCommonContextParts,
        WithRawFlightDataContextPart
    ;

    public function hasBreak(): bool
    {
        return $this->status !== StatusContextPartContract::STATUS_OK;
    }
}